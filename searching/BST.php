<?php


namespace searching;


class BST
{

    private $node = null;

    private $left_node = null;

    private $right_node = null;

    /** @var int */
    private $N = 0;

    /**
     * @param string|int $key
     * @param string|int|object|null $value
     */
    public function put($value, $node = null)
    {
        if ($node === null) {
            $node = $this;
        }
        if ($node->node === null) {
            $node->node = $value;
        } elseif ($node->left_node !== null && $value < $node->left_node) {
            $node->put($value, $node->left_node);
        } elseif ($node->right_node !== null && $value > $node->right_node) {
            $node->put($value, $node->right_node);
        }

    }

    /**
     * @param string|int $key
     * @return mixed
     */
    public function get($key)
    {

        return null;
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
        return $this->node === null;
    }

    /**
     * @return int
     */
    public function size()
    {
        return $this->N;
    }

}