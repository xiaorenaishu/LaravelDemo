<?php

namespace App\Lib;

use Illuminate\Support\Facades\Redis;

/**
 * 分布式锁
 * Class Lock
 * @package App\Lib
 * Time 2018/12/14
 * chenxinren
 */
class Lock
{
    private $key = 'lock:';

    private $connection = '';

    private static $instance;    //保存类实例的私有静态成员变量

    //定义一个私有的构造函数，确保单例类不能通过new关键字实例化，只能被其自身实例化
    private final function __construct($connection)
    {
        $this->connection = $connection;
    }

    //定义私有的__clone()方法，确保单例类不能被复制或克隆
    private function __clone() {}

    //对外提供获取唯一实例的方法
    public static function getInstance($connection = null)
    {
        //检测类是否被实例化
        if (!(self::$instance instanceof self)) {
            self::$instance = new self($connection);
        }

        return self::$instance;
    }

    /**
     * Name lock
     * Time 2018/12/14
     * @param $key
     * @param int $time
     * @return bool
     * 该方案存在一个问题，若是调用方设置的时间太短，业务执行时间太长，会因为锁失效导致问题
     */
    public function lock($key, $time = 3)
    {
        $res = Redis::connection($this->connection)->set($this->getKey($key), 1, 'EX', $time, 'NX'); //Redis 2.8 以后支持这样的参数
        if (is_null($res)) {
            return false;
        }

        return true;
    }

    /**
     * Name unlock
     * Time 2018/12/14
     * @param $key
     * @return bool
     */
    public function unlock($key)
    {
        Redis::connection($this->connection)->del($this->getKey($key));

        return true;
    }

    private function getKey($key)
    {
        return $this->key . $key;
    }
}