<?php


class WechatGetData {
    // wechat Request
    private $_post = null;

    public function getNews ($url) {
        if ($url == null) return false;
        $this->_post = $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }
}