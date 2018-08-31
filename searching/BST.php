<?php


namespace searching;

use common\Compare;

class BST extends Compare
{

    public $root = null;

    public $left = null;

    public $right = null;

    public $n = 0;

    public $fixed = 0;

    public function put($key, $value)
    {
        $this->fixed = $this->fixed + 1;
        $this->putValue($key, $value);
    }

    /**
     * @param BST $item
     * @return void
     */
    private function putValue($key, $value)
    {
        $item = $this;
        while ($item->root !== null) {
            $cmp = $item->compareTo($value);
            if ($cmp) {
                $item = &$item->left;
            } else {
                $item = &$item->right;
            }
            if ($item === null) {
                $item = new BST();
            }
        }

        if ($item === null) {
            $item = new BST();
        }
        $item->root = [$key => $value];
        $item->n = $this->fixed;
    }

    public function getMin()
    {
        return $this->getRoot('left');
    }

    public function getMax()
    {
        return $this->getRoot('right');
    }

    public function getRoot($name)
    {
        /** @var BST $item */
        $item = $this;
        if ($item->root === null) {
            return null;
        }
        while ($item !== null || $item->$name !== null) {
            if ($item->$name === null) {
                return $item->root;
            }
            $item = $item->$name;
        }
        return null;
    }

    /**
     * @param int $key
     * @return string|integer
     */
    public function get($value)
    {
        /** @var BST $item */
        $item = $this;
        if ($this->root === null) {
            return null;
        }
        while ($item === null || $item->root !== null) {
            if ($value > current($item->root)) {
                $item = $item->right;
            } elseif ($value < current($item->root)) {
                $item = $item->left;
            } else {
                return $item->root;
            }
        }
        return null;
    }

}