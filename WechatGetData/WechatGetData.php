<?php


class WechatGetData {
    // wechat Request
    private $_post = null;

    /**
     * @param $url
     * @return $time
     * 将链接地址下载到本地、以时间命名并返回文件名称(时间)
     */
    public function getNews ($url) {
        if ($url == null) return false;
        $this->_post = $url;
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 20);
        $res = curl_exec($ch);
        curl_close($ch);
        // 对结果转码
        $res = mb_convert_encoding($res, 'utf-8', 'utf-8, gbk, gb2312, big5');
        // 将请求结果写入文件
        $time = time();
        $myFile = fopen("news/". $time . ".html", "w") or die ("Unable to open file!");
        fwrite($myFile, $res);
        fclose($myFile);
        return json_encode($time);
    }
}