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
    private $_a;

    public function __construct($url)
    {
        $this->_url = $url;
    }

    public function createCurl($url = 'nul')
    {
        if($url != 'nul'){
            $this->_url = $url;
        }
        $ch = curl_init($this->_url);
        $_a = curl_exec($ch);
        curl_close($ch);
        return $_a;
    }
}

$rivg = new RivgRequest("http://rivg-view/hhhh.php?Rivg=dfgsdfgfsdf");
$resp = $rivg->createCurl();

if(isset($_GET['Rivg'])){
    echo$resp;
}
