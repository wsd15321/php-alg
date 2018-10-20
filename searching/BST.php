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
            $cmp = $item->compareTo($key);
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
        return $this->getRoot('left')->root;
    }

    public function getMax()
    {
        return $this->getRoot('right')->root;
    }

    /**
     * @return BST;
     */
    public function getRoot($name)
    {
        /** @var BST $item */
        $item = $this;
        if ($item->root === null) {
            return null;
        }
        while ($item !== null || $item->$name !== null) {
            if ($item->$name === null) {
                return $item;
            }
            $item = $item->$name;
        }
        return null;
    }

    /**
     * @param int $key
     * @return string|integer
     */
    public function get($key)
    {
        /** @var BST $item */
        $item = $this;
        if ($this->root === null) {
            return null;
        }
        while ($item === null || $item->root !== null) {
            if ($key > key($item->root)) {
                $item = $item->right;
            } elseif ($key < key($item->root)) {
                $item = $item->left;
            } else {
                return $item->root;
            }
        }
        return null;
    }

    /**
     * @return object|null
     */
    public function deleteMin()
    {
        if ($this->left === null) {
            return $this;
        }
        $this->deleteMinValue($this);
        return $this;
    }

    /**
     * @param BST $node
     */
    private function deleteMinValue(&$node)
    {
        if ($node->left === null) {
            $node = $node->right;
        } else {
            $node->deleteMinValue($node->left);
        }
    }

    public function deleteMax()
    {
        if ($this->right === null) {
            return $this;
        }
        $this->deleteMaxValue($this);
        return $this;
    }

    /**
     * @param BST $node
     */
    public function deleteMaxValue(&$node)
    {
        if ($node->right === null) {
            $node = $node->left;
        } else {
            $this->deleteMaxValue($node->right);
        }
    }

    /**
     * @param string|integer $key
     */
    public function delete($key)
    {
        return $this->deleteValue($this, $key);
    }

    /**
     * @param BST $node
     */
    public function deleteValue($node, $key)
    {
        $cmp = $node->compareTo($key);

    }

    public function min()
    {
        return $this->minNode($this);
    }

    /**
     * @param BST $node
     * @return BST;
     */
    public function minNode($node)
    {
        if ($node->left === null) {
            return $node;
        } else {
            return $this->minNode($node->left);
        }
    }


}