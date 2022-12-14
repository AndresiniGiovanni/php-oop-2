<?php

include_once __DIR__ . '/Product.php';

class Games extends Product
{
    public array $color;

    function __construct(string $_image, string $_title, float $_price, Category $_category, array $_color, int $_weight)
    {
        parent::__construct($_image, $_title, $_price, $_category);

        $this->setcolor($_color);
        $this->setWeight($_weight);
    }

    public function getColor()
    {
        return $this->color;

    }
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

}
?>