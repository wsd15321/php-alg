<?php

namespace searching;

class ST {

    private $list = [];

    public function __construct()
    {

    }

    public function put($key, $value)
    {

    }

    public function get($key)
    {

    }

    public function delete($key)
    {

    }

    /**
     * 键key是否存在于表中
     * @return boolean
     */
    public function contains($key)
    {

    }

    /**
     * @return boolean
     */
    public function isEmpty()
    {

    }

    /**
     * @return int
     */
    public function size()
    {

    }

    /**
     * @return $key
     */
    public function min()
    {

    }

    /**
     * @return $key
     */
    public function max()
    {

    }

    /**
     * 小于等于key的最大键
     * @return $key
     */
    public function floor($key)
    {

    }

    /**
     * 大于等于key的最小键
     * @return $key
     */
    public function ceiling($key)
    {

    }

    /**
     * 小于key的键的数量
     * @return int
     */
    public function rank($key)
    {

    }
    
    /**
     * 排名为k的键
     * @param int $k
     * @return $key
     */
    public function select($k)
    {

    }

    /**
     * 删除最小的键
     */
    public function deleteMin()
    {

    }

    /**
     * 删除最大的键
     */
    public function deleteMax()
    {

    }

    /**
     * $lo....$hi之间键的数量
     * @return int
     */
    public function getSize($lo, $hi)
    {

    }

    /**
     * lo...hi之间的所有键，已排序
     * @return $kyes
     */
    public function keys($lo, $hi)
    {

    }

    /**
     * 表中所有键的集合，已排序
     */
    public function getKeys()
    {

    }

}