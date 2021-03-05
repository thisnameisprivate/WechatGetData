<?php

// 加载获取页面类
require_once "./WechatGetData/WechatGetData.php";

if ($_GET == null) {
    print_r("这个页面丢失了~");
} else {
    $instance = new WechatGetData();
    // 返回当前下载的文件名并调用后台下载相应的文件到本地
    return $time = $instance->getNews($_GET['url']);
}
