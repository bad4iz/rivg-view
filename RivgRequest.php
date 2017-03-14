<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 14.03.2017
 * Time: 19:39
 */

namespace Rivg;


class RivgRequest
{
    protected $_url;
    protected $_followlocation;
    protected $_timeout;
    protected $_post;

    public function __construct($url, $timeOut = 1000)
    {
        $this->_url = $url;
        $this->_timeout = $timeOut;

    }

    public function createCurl($url = 'nul')
    {
        if($url != 'nul'){
            $this->_url = $url;
        }
        $ch = curl_init($url);
        $a = curl_exec($ch); // выполняем запрос curl - обращаемся к сервера php.su
        curl_close($ch);
        echo $a;
    }


}

$rivg = new RivgRequest("http://api.vk.com/method/board.getComments?group_id=99828403&topic_id=32625403&count=10");
$rivg->createCurl();