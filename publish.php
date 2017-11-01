<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/11/1
 * Time: 上午11:46
 */


$redis = new Redis();

$redis->connect('127.0.0.1', 6379);


$redis->select(0);
//发布信息
//var_dump($redis->publish('chan-1',date('Y-m-d H:i:s')));

//查看所有被订阅的频道


var_dump($redis->pubSub("channels")); /*All channels */
var_dump($redis->pubSub("channels", "*chan*")); /* Just channels matching your pattern */
//获取被订阅的数量
var_dump($redis->pubSub("numsub", Array("chan-1", "chan2"))); /*Get subscriber counts for 'chan1' and 'chan2'*/
var_dump($redis->pubSub("numpat")); /* Get the number of pattern subscribers */



