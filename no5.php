<?php


class No4
{
    public $a, $b;

    public function set_nilai($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function get_nilai()
    {
        return (($this->a) . ($this->b));
    }
}


$no4 = new No4();

$no4->set_nilai("a", "b");

echo $no4->get_nilai();
