<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/10/28
 * Time: 上午11:16
 */

$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

$redis->setOption(Redis::OPT_PREFIX, 'spring:');

$redis->select(0);


//
//$user = [
//    'name'=>'spring',
//    'age'=>18,
//];
//
//var_dump($redis->hSet('user',$user));

//设置值
//$redis->hSet('user','height',180.5);
//$redis->hSet('user','height1',180.5);

//存在则报错
//var_dump($redis->hSetNx('user','height1',180.5));

//批量设置
//$user = [
//    'name'=>'spring',
//    'age'=>18,
//];
//多次键一起插入
//var_dump($redis->hMset('user',$user));



//取值
//var_dump($redis->hGet('user','name'));

//多个键
//var_dump($redis->hMGet('user',['name','age']));

//获取全部
//var_dump($redis->hGetAll('user'));

//自增
//var_dump($redis->hIncrBy('user','age',1));

//var_dump($redis->hIncrByFloat('user','height',1));



//获取一个hash 所有键
//var_dump($redis->hKeys('user'));



// 获取hash的键个数
//var_dump($redis->hLen('user'));



//获取hash某个键的长度
//var_dump($redis->hstrlen('user','age'));


//获取所有的值 ,没有键
var_dump($redis->hVals('user'));






