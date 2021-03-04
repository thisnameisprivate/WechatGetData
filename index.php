<?php

// 加载获取页面类
require_once "./WechatGetData/WechatGetData.php";

if ($_GET == null) {
    print_r("这个页面丢失了~");
} else {
    $instance = new WechatGetData();
    $instance->getNews($_GET);
}
