<?php


namespace searching;


class BST
{

    public $node = ['value' => null, 'left' => [], 'right' => [], 'N'=>0];

    private $s = 0;

    /**
     * @param string|int $key
     * @param string|int|object|null $value
     */
    public function put($value)
    {
        $this->putValue($value, $this->node);
    }
    
    private function putValue($value, &$arr)
    {
        if ($arr['value'] === null) {
            $arr['value'] = $value;
        } elseif ($value > $arr['value']) {
            if ($arr['right'] === []) {
                $arr['right']['value'] = $value;
                $arr['right']['right'] = [];
                $arr['right']['left'] = [];
                $this->s = $this->s + 1;
                $arr['right']['N'] = $this->s;
            } else {
                $this->putValue($value, $arr['right']);
            }
        } elseif ($value < $arr['value']) {
            if ($arr['left'] === []) {
                $arr['left']['value'] = $value;
                $arr['left']['right'] = [];
                $arr['left']['left'] = [];
                $this->s = $this->s + 1;
                $arr['left']['N'] = $this->s;
            } else {
                $this->putValue($value, $arr['left']);
            }
        } else {
            $arr['value'] = $value;
            $arr['N'] = $arr['N'] + 1;
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