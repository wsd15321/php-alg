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
        $this->putValue($this, $value, $key);
    }

    /**
     * @param BST $node
     * @return void
     */
    private function putValue($node, $key, $value, $n = 0)
    {
        $node->n = $n + 1;
        if ($node->root === null) {
            $node->root = [$key, $value];
        } else {
            $cmp = $node->compareTo($value);
            if ($cmp) {
                if ($node->left === null) {
                    $node->left = new BST();
                }
                call_user_func([$this, 'putValue'], $node->left, $key, $value, $node->n);
            } else {
                if ($node->right === null) {
                    $node->right = new BST();
                }
                call_user_func([$this, 'putValue'], $node->right, $key, $value, $node->n);
            }
        }
    }



    /**
     * @param string|int $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->getValue($this, $key);
    }

    /**
     * @param BST $node
     */
    private function getValue($node, $value)
    {
        if ($node->root[1] === $value) {
            return $node->root[0];
        }
        $cmp = $node->compareTo($value);
        if (($cmp && $node->left === null) || (!$cmp && $node->right === null)) {
            return null;
        }

        if ($cmp) {
            return call_user_func([$this, 'getValue'], $node->left, $value);
        } else {
            return call_user_func([$this, 'getValue'], $node->right, $value);
        }

    }

    /**
     * @param string|int $key
     */
    public function delete($key)
    {

    }

    /**
     * @return boolean
     */
    public function isEmpty()
    {
        return $this->s === 0;
    }

    /**
     * @return int
     */
    public function size()
    {
        return $this->s;
    }

}