<?php
class Stack {
    private $stack;
    private $limit;

    public function __construct($limit = 10) {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item) {
        if ($this->count() < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            echo "Stack is full. Cannot push more items.";
        }
    }

    public function pop() {
        if (!$this->isEmpty()) {
            return array_shift($this->stack);
        } else {
            echo "Stack is empty. Cannot pop any items.";
        }
    }

    public function count() {
        return count($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    public function isFull() {
        return $this->count() == $this->limit;
    }
}

?>