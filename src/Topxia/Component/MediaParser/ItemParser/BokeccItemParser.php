<?php
namespace Topxia\Component\MediaParser\ItemParser;

class BokeccItemParser extends AbstractItemParser
{

    public function parse($url)
    {
        //视频代码得地址
        $swfUrl = $url;
        //使用视频代码地址分析视频ID
        $url = substr($url,strpos($url, 'single'));
        //拆分Url
        $matches = explode('/',$url);
        //获取视频ID
        $videoId = explode('_',$matches[1])[1];
        $params = array(
            'userid' => '3FC3C3C236011776',
            'videoid' => $videoId,
        );
        $salt= 'SRdjgFJtpvVTZXbw3h9982Sb8HAUhDae';
        $query = http_build_query($params);
        $time = time();
        $apiUrl = 'http://spark.bokecc.com/api/video?' . $query . '&time='.$time.'&hash='.$this->getHashedVale($query, $time, $salt);

        $videoInfo = (array)simplexml_load_string(file_get_contents($apiUrl), 'SimpleXMLElement', LIBXML_NOCDATA);

        $item = array();
        $item['type'] = 'video';
        $item['source'] = 'bokecc';
        $item['uuid'] = 'bokecc:' . $videoId;

        $item['name'] = $videoInfo['title'];
        $item['summary'] = $videoInfo['desp'];
        $item['page'] = "";
        $item['pictures'] = empty($videoInfo['image']) ? array() : array('url' => $videoInfo['image']);
        $item['files'] = array(
            array('url' => "{$swfUrl}", 'type' => 'swf'),
        );

        return $item;
    }

    public function detect($url)
    {
        $matched = strpos($url, 'http://p.bokecc.com');
        if ($matched === FALSE) {
            return false;
        }

        return true;
    }

    public function getHashedVale($qs, $time, $salt){
        return strtoupper(md5($qs . "&time=$time&salt=$salt"));
    }

}