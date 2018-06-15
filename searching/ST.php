<?php

namespace searching;

class ST {

    private $list = [];

    public function __construct()
    {

    }

    public function put($key, $value)
    {
        $this->list[$key] = $value;
    }

    public function get($key)
    {
        return $this->list[$key];
    }

    public function delete($key)
    {
        unset($this->list[$key]);
    }

    /**
     * 键key是否存在于表中
     * @return boolean
     */
    public function contains($key)
    {
        return isset($this->list[$key]);
    }

    /**
     * @return boolean
     */
    public function isEmpty()
    {
        return count($this->list) === 0;
    }

    /**
     * @return int
     */
    public function size()
    {
        return count($this->list);
    }

    /**
     * @return $key
     */
    public function min()
    {
        ksort($this->list);
        reset($this->list);
        return key($this->list);
    }

    /**
     * @return $key
     */
    public function max()
    {
        ksort($this->list);
        end($this->list);
        return key($this->list);
    }

    /**
     * 小于等于key的最大键
     * @param string|int $key
     * @return string|int
     */
    public function floor($key)
    {
        if (!isset($this->list[$key])) {
            return null;
        }
        ksort($this->list);
        $keys = array_keys($this->list);
        if (array_flip($keys)[$key] === 0) {
            return null;
        }
        $keys = array_slice($keys, 0, array_flip($keys)[$key]);
        end($keys);
        return current($keys);
    }

    /**
     * 大于等于key的最小键
     * @return $key
     */
    public function ceiling($key)
    {
        if (!isset($this->list[$key])) {
            return null;
        }
        ksort($this->list);
        $keys = array_keys($this->list);
        if (array_flip($keys)[$key] >= count($keys) - 1) {
            return null;
        }
        $keys = array_slice($keys, array_flip($keys)[$key] + 1);
        reset($keys);
        return current($keys);
    }

    /**
     * 小于key的键的数量
     * @return int
     */
    public function rank($key)
    {
        if (!isset($this->list[$key])) {
            return null;
        }
        ksort($this->list);
        $keys = array_keys($this->list);
        $keys = array_slice($keys, 0, array_flip($keys)[$key]);
        return count($keys);
    }
    
    /**
     * 排名为k的键
     * @param int $k
     * @return string|int
     */
    public function select($k)
    {
        ksort($this->list);
        $keys = array_keys($this->list);
        return $keys[$k];
    }

    /**
     * 删除最小的键
     */
    public function deleteMin()
    {
        if (!$this->isEmpty()) {
            ksort($this->list);
            $keys = array_keys($this->list);
            unset($this->list[$keys[0]]);
        }
    }

    /**
     * 删除最大的键
     */
    public function deleteMax()
    {
        if (!$this->isEmpty()) {
            ksort($this->list);
            $keys = array_keys($this->list);
            unset($this->list[$keys[count($keys) - 1]]);
        }
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
        ksort($this->list);
        return array_keys($this->list);
    }

}