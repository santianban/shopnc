<?php
/**
 * 入口
 *
 *
 *
 * by shopjl 网店技术交流中心  www.corecreate.cn 开发
 */
$site_url = strtolower('http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/index.php')).'/shop/index.php');
//@header('Location: '.$site_url);
include('shop/index.php');

