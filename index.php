<?php

$post = $_POST['url'];
// 加载获取页面类
require_once "./WechatGetData/WechatGetData.php";

$instance = new WechatGetData();