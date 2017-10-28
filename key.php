<?php
/**
 * Created by PhpStorm.
 * User: springlee
 * Date: 2017/10/27
 * Time: 下午8:06
 */

$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

//$redis->setOption(Redis::OPT_PREFIX, 'spring:');

$redis->select(0);

//设置
//$redis->set('key','123');

//删除
//$redis->del('test');

//序列化
//$res= $redis->dump('test');
//var_dump($res);
//反序列化
//var_dump($redis->restore('test2',0,$res));

//是否存在
//var_dump($redis->exists('test'));



//设置key的生命周期(秒)
//var_dump($redis->expire('key',100));

//设置key的生命周期 (秒)
//var_dump($redis->setTimeout('key',100));

//设置key的生命周期(微秒)
//var_dump($redis->pExpire('key',1000));

//去除键的ttl
//var_dump($redis->persist('key'));

//var_dump($redis->ttl('key'));
//
//var_dump($redis->pttl('key'));

//设置key的生命周期(微秒) 在某个时候失效
//$redis->set('key', '42');
//var_dump($redis->ExpireAt('key',time()+10));


//数据跨服务器迁移 (好像不成功)
//var_dump($redis->migrate('127.0.0.1','6379','spring:test',1,0));
//echo $redis->migrate('127.0.0.1', 6379, 'test', 2, 3600000,true, true);
//$redis->migrate('backup', 6379, 'foo', 0, 3600, true, true); /* copy and replace */
//$redis->migrate('backup', 6379, 'foo', 0, 3600, false, true); /* just REPLACE flag */
//$redis->migrate('backup', 6379, ['key1', 'key2', 'key3'], 0, 3600);


//当前库数据迁移
//var_dump($redis->move('test',1));

//观察键
//var_dump($redis->object('encoding','test')); //类型 返回给定 key 锁储存的值所使用的内部表示(representation)。
//var_dump($redis->object('refcount','test')); //返回给定 key 引用所储存的值的次数。此命令主要用于除错。
//var_dump($redis->object('idletime','test')); //返回给定 key 自储存以来的空闲时间(idle， 没有被读取也没有被写入)，以秒为单位。

//随机获取一个存在的key
//$key = $redis->randomKey();
//var_dump($key);

//修改键 如果键存在则覆盖
//$redis->rename('test2','test1');

//修改键 如果键存在则报错
//var_dump($redis->renameNx('test','test1'));


//排序 ,只是查询排序 ,并不改变结构
//var_dump($redis->lPush('list',3,4,5,2,1));
/*
 *     * - 'by' => 'some_pattern_*',
     * - 'limit' => array(0, 1),
     * - 'get' => 'some_other_pattern_*' or an array of patterns,
     * - 'sort' => 'asc' or 'desc',
     * - 'alpha' => TRUE,
     * - 'store' => 'external-key'
 */
//var_dump($redis->sort('list'));

//返回值是数字
//var_dump($redis->type('key'));


//scan 扫描
/* Without enabling Redis::SCAN_RETRY (default condition) */
//$it = null;
//do {
//    // Scan for some keys
//    $arr_keys = $redis->scan($it,'spring:test*',10);
//
//    // Redis may return empty results, so protect against that
//    if ($arr_keys !== FALSE) {
//        foreach($arr_keys as $str_key) {
//            echo "Here is a key: $str_key".'<br>';
//        }
//    }
//} while ($it > 0);


//$redis->setOption(Redis::OPT_SCAN, Redis::SCAN_RETRY);
//$it = NULL;
//
///* phpredis will retry the SCAN command if empty results are returned from the
//   server, so no empty results check is required. */
//while ($arr_keys = $redis->scan($it)) {
//    foreach ($arr_keys as $str_key) {
//        echo "Here is a key: $str_key'<br>'";
//    }
//}
//echo "No more keys to scan!\n";