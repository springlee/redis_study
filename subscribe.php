<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/11/1
 * Time: 上午11:45
 */

/*监听demo频道，打印收到的信息*/
function process($redis, $chan, $msg){
    var_dump($chan,$msg);
}

$redis = new Redis();
$res = $redis->connect('127.0.0.1', '6379');
$redis->subscribe(array('chan-1'), 'process');

function pSubscribe($redis, $pattern, $chan, $msg) {
    echo "Pattern: $pattern\n";
    echo "Channel: $chan\n";
    echo "Payload: $msg\n";
}


$redis->pSubscribe('chan*',array('chan-1'));