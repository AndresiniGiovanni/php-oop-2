<?php

include_once __DIR__ . '/Product.php';

class kennels extends Product
{

    public array $color;
    public string $size;

    function __construct(string $_image, string $_title, float $_price, Category $_category, array $_color, int $_weight, string $_size)
    {
        parent::__construct($_image, $_title, $_price, $_category);

        $this->setcolor($_color);
        $this->setWeight($_weight);
        $this->setSize($_size, );

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

    public function getSize()
    {
        return $this->size;
    }
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

}
?>