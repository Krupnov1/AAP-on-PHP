<?php

class Tree {

    protected $tree;

    public function __construct() {

        $this->tree = [];
    }

    public function isEmpty() {

        return empty($this->tree);
    }

    public function count() {

        return count($this->tree) - 1;
    }

    public function extract() {

        if ($this->isEmpty()) {
            throw new RuntimeException('Дерево пустое');
        }

        $root = array_shift($this->tree);

        if (!$this->isEmpty()) {
            $last = array_pop($this->tree);
            array_unshift($this->tree, $last);

            $this->adjust(0);
        }
        return $root;
    }

    public function compare($item1, $item2) {
        if ($item1 === $item2) {
            return 0;
        }
        return ($item1 > $item2 ? 1 : -1);
    }

    protected function isLeaf($node) {

        return ((2 * $node) + 1) > $this->count();
    }

    protected function adjust($root) {

        if (!$this->isLeaf($root)) {
            $left = (2 * $root) + 1; 
            $right = (2 * $root) + 2; 

            $h = $this->tree;
            if (
                (isset($h[$left]) &&
                    $this->compare($h[$root], $h[$left]) < 0)
                || (isset($h[$right]) &&
                    $this->compare($h[$root], $h[$right]) < 0)
            ) {
                if (isset($h[$left]) && isset($h[$right])) {
                    $j = ($this->compare($h[$left], $h[$right]) >= 0)
                    ? $left : $right;
                } else if (isset($h[$left])) {
                    $j = $left; 
                } else {
                    $j = $right; 
                }
                list($this->tree[$root], $this->tree[$j]) =
                    array($this->tree[$j], $this->tree[$root]);

                $this->adjust($j);
            }
        }
    }

    public function insert($item) {

        $this->tree[] = $item;
        $place = $this->count();
        $parent = floor($place / 2);
        while (
            $place > 0 && $this->compare(
                $this->tree[$place], $this->tree[$parent]) >= 0
        ) {

            list($this->tree[$place], $this->tree[$parent]) =
                array($this->tree[$parent], $this->tree[$place]);
            $place = $parent;
            $parent = floor($place / 2);
        }
    }
}

$tree = new Tree();

$tree->insert(29);
$tree->insert(46);
$tree->insert(34);
$tree->insert(10);
$tree->insert(100);
$tree->insert(3);
$tree->insert(15);
$tree->insert(77);
$tree->insert(2);
$tree->insert(9);

while (!$tree->isEmpty()) {

    echo $tree->extract() . "<br>";
}