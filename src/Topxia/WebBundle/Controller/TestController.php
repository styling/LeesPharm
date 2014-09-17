<?php
namespace Topxia\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Topxia\Service\Util\CloudClientFactory;


class TestController extends BaseController
{
    public function indexAction(Request $request)
    {

        $ids = $this->container->getServiceIds();

        var_dump($ids);exit();

        $result = $this->getCloudClient()->deleteFilesByPrefixs('private', array(
            '_', 'a', 'b','c', 'd', 'e', 'f', 'g', 'h', 'i','j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
        ));

        var_dump($result);exit();

    }

    public function getConnection()
    {
        return $this->container->get('doctrine.dbal.default_connection');
    }

    protected function isFieldExist($table, $filedName)
    {
        $sql = "DESCRIBE `{$table}` `{$filedName}`;";
        $result = $this->getConnection()->fetchAssoc($sql);
        return empty($result) ? false : true;
    }

    private function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }

    private function getCloudClient()
    {
        if(empty($this->cloudClient)) {
            $factory = new CloudClientFactory();
            $this->cloudClient = $factory->createClient();
        }
        return $this->cloudClient;
    }
    
}