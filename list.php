<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/10/27
 * Time: 下午4:06
 */

$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

$redis->setOption(Redis::OPT_PREFIX, 'spring:');

$redis->select(0);



//左边放入数据
//var_dump($redis->lPush('list2',1));

//右边放入
//var_dump($redis->rPush('list',7));

//list 存在的时候才放入
//var_dump($redis->lPushx('list2',7));
//var_dump($redis->rPushx('list2',7));

//获取list 下标为 1
//var_dump($redis->lIndex('list',1));


//在某个元素前插入
//var_dump($redis->lInsert('list',Redis::BEFORE,5,'lll'));
//在某个元素后插入
//var_dump($redis->lInsert('list',Redis::AFTER,5,'lll'));


//获取list的长度
//var_dump($redis->lLen('list'));


//左边弹出
//var_dump($redis->lPop('list'));

//右边弹出
//var_dump($redis->rPop('list'));


//取出list(原list 不变)
//var_dump($redis->lRange('list',0,2));


//lrem 删除指定值,删除个数
//var_dump($redis->lRem('list',3,2));


//将下标为N的修改
//var_dump($redis->lSet('list',0,'hello'));


//将LTRIM 对一个列表进行修剪(trim)，就是说，让列表只保留指定区间内的元素，不在指定区间之内的元素都将被删除。

//var_dump($redis->lTrim('list',0,3));

//命令里没有根据index删除元素的命令,如果想要删除指定index的值： index=0
//function str_rand($length) {
//    $r = '';
//
//    for (; $length > 0; --$length) {
//        $r .= chr(rand(32, 126)); // 32 - 126 is the printable ascii range
//    }
//
//    return $r;
//}
//$value = str_rand(69);
//
//// This code assumes $value is not present in the list. To make sure of this we would need to check the whole list and place a Watch on it to make sure the list isn't modified in between.
//$redis->lSet('list', 0, $value);
//$redis->lRem('list', $value,1);


//弹出后放入list1 弹出后放入 list2
//var_dump($redis->rpoplpush('list','list2'));

//阻塞弹出list 数据 10秒代表超时时间
//var_dump($redis->brPop('list','list2',10));

//var_dump($redis->blPop('list','list2',10));











