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

//$key = $redis->randomKey();
//
//var_dump($key);
$redis->set('test2','hello');

//$redis->get('test2');




//后台持久化一个AOF
//var_dump($redis->bgRewriteAOF());


//后台保存
//var_dump($redis->bgSave());

//前台管理
//var_dump($redis->save());


//获取配置
//var_dump($redis->config("GET", "*max-*-entries*"));

//设置配置
//var_dump($redis->config("SET", "hash-max-ziplist-entries",512));

//获取redis 的 key的个数
//var_dump($redis->dbSize());

//清除所有数据库
//var_dump($redis->flushAll());

//清除当前数据库
//var_dump($redis->flushDB());

//获取redis 信息
//var_dump($redis->info());

//获取最后一次保存时间
//var_dump(date('Y-m-d H:i:s',$redis->lastSave()));

//???? 重启
//var_dump($redis->slaveof());
//$redis->slaveOf('127.0.0.1', 6379);


//获取当前服务器时间
//var_dump($redis->time());


//var_dump($redis->slowLog('get', 10));
