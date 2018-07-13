<?php

namespace common;

class Compare
{

    public $root = null;

    public $left = null;

    public $right = null;

    public function compareTo($value)
    {
        return $this->root[1] > $value;
    }

}