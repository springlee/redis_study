<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/10/27
 * Time: 下午4:05
 */


$redis->delete('s');
$redis->sAdd('s', 5);
$redis->sAdd('s', 4);
$redis->sAdd('s', 2);
$redis->sAdd('s', 1);
$redis->sAdd('s', 3);
