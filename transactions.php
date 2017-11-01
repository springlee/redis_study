<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/10/31
 * Time: 下午9:13
 */



$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

$redis->setOption(Redis::OPT_PREFIX, 'spring:');

$redis->select(0);


//$redis->multi();
//$redis->del('user');
//$redis->hSet('user','name','spring1');
//$redis->hSet('user','age',18);
//$redis->hIncrBy('user','age',3);
//$redis->discard();//取消事务
//$redis->exec();//提交事务
//
//var_dump($redis->hGetAll('user'));


//监控键有没有变化
$redis->watch('user'); // or for a list of keys: $redis->watch(array('x','another key'));
/* long code here during the execution of which other clients could well modify `x` */
$ret = $redis->multi();
$redis->hIncrBy('user','age',3);
sleep(10);
$ret = $redis->exec();
var_dump($ret);
