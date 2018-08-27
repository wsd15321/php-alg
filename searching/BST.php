<?php


namespace searching;

use common\Compare;

class BST extends Compare
{

    public $root = null;

    public $left = null;

    public $right = null;

    public $n = 0;

    public function put($key, $value)
    {
        $this->putValue($key, $value);
    }

    /**
     * @param BST $item
     * @return void
     */
    private function putValue($key, $value)
    {
        $n = 0;
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
    }

    public function getMin()
    {
        /** @var BST $item */
        $item = $this;
        if ($item->root === null) {
            return 'fail';
        }


    }

}