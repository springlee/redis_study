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


$redis->del('z');
$redis->zAdd('z', 1, 'val1');
$redis->zAdd('z', 1, 'val2');
$redis->zAdd('z', 0, 'val0');
$redis->zAdd('z', 5, 'val5');


$redis->del('b');
$redis->zAdd('b', 1, 'val1');
$redis->zAdd('b', 0, 'val0');
$redis->zAdd('b', 5, 'val5');


//返回数量
//var_dump($redis->zCard('z'));


//返回有序集 key 中， score 值在 min 和 max 之间(默认包括 score 值等于 min 或 max )的成员的数量。
//var_dump($redis->zCount('z',0,0));

//返回分数
//var_dump($redis->zScore('z','val1'));

//给为有序集 key 的成员 member 的 score 值加上增量 increment 。 可以负数
//var_dump($redis->zIncrBy('z',100,'val1'));


//取出redis 数据
//var_dump($redis->zRange('z',0,-1));


//求出差集 然后分数做特殊判定 并赋值
//$redis->zAdd('k1', 0, 'val0');
//$redis->zAdd('k1', 1, 'val1');
//$redis->zAdd('k1', 3, 'val3');
//
//$redis->zAdd('k2', 2, 'val1');
//$redis->zAdd('k2', 3, 'val3');
//var_dump($redis->zInter('ko1', array('k1', 'k2'))); 				/* 2, 'ko1' => array('val1', 'val3') */
//var_dump($redis->zInter('ko2', array('k1', 'k2'), array(1, 2))); 	/* 2, 'ko2' => array('val1', 'val3') */
//
//$redis->zInter('ko3', array('k1', 'k2'), array(1, 5), 'min'); /* 2, 'ko3' => array('val1', 'val3') */
//$redis->zInter('ko4', array('k1', 'k2'), array(1, 5), 'max'); /* 2, 'ko4' => array('val3', 'val1') */


//$redis->zAdd('key', 0, 'val0');
//$redis->zAdd('key', 2, 'val2');
//$redis->zAdd('key', 10, 'val10');
//var_dump($redis->zRangeByScore('key', 0, 3)); /* array('val0', 'val2') */
//var_dump($redis->zRangeByScore('key', 0, 3, array('withscores' => TRUE))); /* array('val0' => 0, 'val2' => 2) */
//var_dump($redis->zRangeByScore('key', 0, 3, array('limit' => array(1, 1)))); /* array('val2') */
//var_dump($redis->zRangeByScore('key', 0, 300, array('withscores' => TRUE, 'limit' => array(0, 3)))); /* array('val2' => 2) 分页 */



//
//foreach(Array('a','b','c','d','e','f','g') as $c)
//    $redis->zAdd('key_list',0, $c);

//当有序集合的所有成员都具有相同的分值时， 有序集合的元素会根据成员的字典序（lexicographical ordering）来进行排序， 而这个命令则可以返回给定的有序集合键 key 中， 值介于 min 和 max 之间的成员。
//var_dump($redis->zRangeByLex('key_list','-','[c'));/* Array('a','b','c'); */
//var_dump($redis->zRangeByLex('key_list','-','(c')); /* Array('a','b') */
//var_dump($redis->zRangeByLex('key_list','-','[c',1,2)); /* Array('b','c') */


//返回有序集 key 中成员 member 的排名。其中有序集成员按 score 值递增(从小到大)顺序排列。
//$redis->delete('key');
//$redis->zAdd('key', 1, 'one');
//$redis->zAdd('key', 2, 'two');
//var_dump($redis->zRank('key', 'one')); /* 0 */
//var_dump($redis->zRank('key', 'two')); /* 1 */


//$redis->delete('key');
//$redis->zAdd('key', 0, 'val0');
//$redis->zAdd('key', 2, 'val2');
//$redis->zAdd('key', 10, 'val10');
//$redis->zRem('key', 'val2');
//var_dump($redis->zRange('key', 0, -1)); /* array('val0', 'val10') */


//$redis->delete('key');
//$redis->zAdd('key', 7, 'three3');
//$redis->zAdd('key', 1, 'one');
//$redis->zAdd('key', 2, 'two');
//$redis->zAdd('key', 3, 'three');
//$redis->zAdd('key', 5, 'three211'); //按字母顺序
//$redis->zAdd('key', 5, 'three221');
//$redis->zAdd('key', 6, 'three2');
//$redis->zRemRangeByRank('key', 0, 3); /* 2 删除 0-3 名次的 */
//var_dump($redis->zRange('key', 0, -1, true)); /* array('three' => 3) */



//$redis->delete('key');
//$redis->zAdd('key', 7, 'three3');
//$redis->zAdd('key', 1, 'one');
//$redis->zAdd('key', 2, 'two');
//$redis->zAdd('key', 3, 'three');
//$redis->zAdd('key', 5, 'three211'); //按字母顺序
//$redis->zAdd('key', 5, 'three221');
//$redis->zAdd('key', 6, 'three2');
//$redis->zRemRangeByScore('key', 0, 4); /*  删除 0-4 分数的  包含2*/
//var_dump($redis->zRange('key', 0, -1, true)); /* array('three' => 3) */

//$redis->delete('key');
//$redis->zAdd('key', 7, 'three3');
//$redis->zAdd('key', 1, 'one');
//$redis->zAdd('key', 2, 'two');
//$redis->zAdd('key', 3, 'three');
//$redis->zAdd('key', 5, 'three211'); //按字母顺序
//$redis->zAdd('key', 5, 'three221');
//$redis->zAdd('key', 6, 'three2');
//var_dump($redis->zRevRange('key',0,-1,true)); //取出数量
//var_dump($redis->zRange('key',0,-1,true));
//var_dump($redis->zRevRangeByScore('key',7,5,array('withscores' => TRUE,'limit'=>array(0,1)))); //start end 顺序


//获取分值
//$redis->delete('key');
//$redis->zAdd('key', 2.5444434, 'val2');
//var_dump($redis->zScore('key', 'val2')); /* 2.5 */

//求集合的并集 和zInter 一样
//$redis->delete('k1');
//$redis->delete('k2');
//$redis->delete('k3');
//$redis->delete('ko1');
//$redis->delete('ko2');
//$redis->delete('ko3');
//
//$redis->zAdd('k1', 0, 'val0');
//$redis->zAdd('k1', 1, 'val1');
//
//$redis->zAdd('k2', 2, 'val1');
//$redis->zAdd('k2', 2, 'val2');
//$redis->zAdd('k2', 3, 'val3');
//
//$redis->zUnion('ko1', array('k1', 'k2')); /* 4, 'ko1' => array('val0', 'val1', 'val2', 'val3') */
//
///* Weighted zUnion */
//$redis->zUnion('ko2', array('k1', 'k2'), array(1, 1)); /* 4, 'ko2' => array('val0', 'val1', 'val2', 'val3') */
//$redis->zUnion('ko3', array('k1', 'k2'), array(5, 1)); /* 4, 'ko3' => array('val0', 'val2', 'val3', 'val1') */
