<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/11/1
 * Time: 下午2:30
 */
$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

//
//$redis->select(0);
//
//
//var_dump($redis->eval("return 1")); // Returns an integer: 1
//var_dump($redis->eval("return {1,2,3}")); // Returns Array(1,2,3)
//var_dump($redis->del('mylist'));
//var_dump($redis->rPush('mylist','a'));
//var_dump($redis->rPush('mylist','b'));
//var_dump($redis->rPush('mylist','c'));
//// Nested response:  Array(1,2,3,Array('a','b','c'));
//var_dump($redis->eval("return {1,2,3,redis.call('lrange','mylist',0,-1)}"));
//
//
//
$script = 'return 1';
//$sha = $redis->script('load', $script);
//var_dump($sha);
//var_dump($redis->evalSha($sha)); // Returns 1



//var_dump($redis->script('load', $script));
//var_dump($redis->script('flush',$script));
//var_dump($redis->script('kill',$script));
//var_dump($redis->script('exists', $script));