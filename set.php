<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/10/27
 * Time: 下午4:05
 */
$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

$redis->setOption(Redis::OPT_PREFIX, 'spring:');

$redis->select(0);





$redis->del('s');
$redis->sAdd('s', 'hello');
$redis->sAdd('s', 5);
$redis->sAdd('s', 4);
$redis->sAdd('s', 2);
$redis->sAdd('s', 1);
$redis->sAdd('s', 3);
$redis->sAdd('s', 'world');

$redis->del('b');
$redis->sAdd('b', 77);
$redis->sAdd('b', 4);

//返回条数
//var_dump($redis->sCard('s'));

//返回差集
//var_dump($redis->sDiff('s','b'));

//返回差集并给赋值
//var_dump($redis->sDiffStore('diff','s','b'));
//var_dump($redis->sMembers('diff'));


//返回交集
//var_dump($redis->sInter('s','b'));

//返回交集并赋值
//var_dump($redis->sInterStore('dst','s','b'));
//var_dump($redis->sMembers('dst'));

//判断集合中是否存在
//var_dump($redis->sIsMember('s','2'));

//获取所有元素
//var_dump($redis->sMembers('s'));


//set  将 member 元素从 source 集合复制到 destination 集合。(单个元素)
//var_dump($redis->sMove('s','s1','hello'));


//移除并返回集合中的一个随机元素。
//var_dump($redis->sPop('s'));

//返回集合中的一个随机元素。
//var_dump($redis->sRandMember('s'));

//移除集合 key 中的一个或多个 member 元素，不存在的 member 元素会被忽略。
//var_dump($redis->sRem('s','3','4'));

//集合的并集
//var_dump($redis->sUnion('s','b'));
//var_dump($redis->sUnionStore('dist1','s','b'));
//var_dump($redis->sMembers('dist1'));


$it = NULL;
$redis->setOption(Redis::OPT_SCAN, Redis::SCAN_RETRY); /* don't return empty results until we're done */
while($arr_mem = $redis->sScan('s', $it, '*')) {
    var_dump($arr_mem);
    foreach($arr_mem as $str_mem) {
        echo "Member: $str_mem<br>";
    }
}

$it = NULL;
$redis->setOption(Redis::OPT_SCAN, Redis::SCAN_NORETRY); /* return after each iteration, even if empty */
while(($arr_mem = $redis->sScan('s2', $it, "*"))!==FALSE) {
    var_dump($arr_mem);
    if(count($arr_mem) > 0) {
        foreach($arr_mem as $str_mem) {
            echo "Member : $str_mem<br>";
        }
    }
}
