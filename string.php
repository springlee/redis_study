<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/10/27
 * Time: 下午4:04
 */


$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

$redis->setOption(Redis::OPT_PREFIX, 'spring:');

$redis->select(0);


//往值后面追加数据
//$redis->append('test2', ' world');

//取字符串的
//var_dump($redis->get('test2'));
//var_dump($redis->getRange('test2',0,5));
//var_dump($redis->getRange('test2',-5,-2)); //右往左数数


//覆盖位置为6后的值
//$redis->set('key', 'Hello world');
//$redis->setRange('key', 6, "redis"); /* returns 11 */
//var_dump($redis->get('key')); /* "Hello redis" */

//获取长度
//$redis->set('key', 'value');
//var_dump($redis->strlen('key'));



//获取所有的键
//$allKeys = $redis->keys('*');
//var_dump($allKeys);
//键值还可以匹配
//$keyWithUserPrefix = $redis->keys('test*');
//var_dump($keyWithUserPrefix);



//加减
//$redis->set('num',10);

//$redis->incr('num'); //加1

//$redis->incrByFloat('num',1.1);

//$redis->incrBy('num',3);

//$redis->decr('num');

//$redis->decrBy('num',3);


//一次性取多个key
//var_dump($redis->mget(['test1','test12']));


//设置并获取
//var_dump($redis->getSet('num',10));

//多次设值
//var_dump($redis->mset(array('test1'=>'test1234','test12'=>'test1234')));



//存在就报错
//var_dump($redis->setnx('keyNx','test'));
//var_dump($redis->msetnx(array('test1'=>'test1234','test12'=>'test1234')));

//设置值的时候带上ttl
//$redis->setex('keyx','1000','test');

//设置值的时候带上ttl
//$redis->psetex('keyNEx','100000','test');


//获取值的字符长度
//$redis->set('keyNx',123);
//var_dump($redis->strlen('keyNx'));
