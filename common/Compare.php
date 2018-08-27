<?php

namespace common;

class Compare
{

    protected $root = null;

    protected $left = null;

    protected $right = null;

    /**
     * 小于root true
     * 大于 false
     */
    public function compareTo($value)
    {
        if (!is_array($this->root) || $this->root === null) {
            exit(var_export($this, true));
        }
        return current($this->root) > $value;
    }

}