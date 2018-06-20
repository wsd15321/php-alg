<?php


namespace searching;


class BST
{

    private $node = null;

    /** @var BST */
    private $left_node = null;

    /** @var BST */
    private $right_node = null;

    /** @var int */
    private $N = 0;

    /**
     * @param string|int $key
     * @param string|int|object|null $value
     */
    public function put($value, $node = null)
    {

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