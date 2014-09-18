<?php
namespace Topxia\Component\MediaParser;

class ParserProxy
{

    public function parseItem($url)
    {
        $parsers = array('YoukuVideo', 'QQVideo', 'NeteaseOpenCourse', 'TudouVideo');
        //新增用于扩展视频类型
        $parsersExtension = array('Bokecc');
        $parsers = array_merge($parsers, $parsersExtension);

        foreach ($parsers as $parserName) {
            $class = __NAMESPACE__ . "\\ItemParser\\{$parserName}ItemParser";
            $parser = new $class();
            if (!$parser->detect($url)) {
                continue;
            }
            return $parser->parse($url);
        }

        throw $this->createParserNotFoundException();
    }

    public function parseAlbum($url)
    {
        $parsers = array('YoukuVideo', 'QQVideo', 'NeteaseOpenCourse', 'SinaOpenCourse');
        foreach ($parsers as $parserName) {
            $class = __NAMESPACE__ . "\\AlbumParser\\{$parserName}AlbumParser";
            $parser = new $class();

            if (!$parser->detect($url)) {
                continue;
            }
            return $parser->parse($url);
        }

        throw $this->createParserNotFoundException();
    }

    protected function createParserNotFoundException($message = '')
    {
        return new ParserNotFoundException($message);
    }


}