<?php
include_once __DIR__ . '/Category.php';
include_once __DIR__ . '/../Traits/Weightable.php';

class Product
{

    use Weightable;

    public string $image;
    public string $title;
    public float $price;
    public $category;

    function __construct(string $_image, string $_title, float $_price, Category $_category)
    {

        $this->setImage($_image);
        $this->setTitle($_title);
        $this->setPrice($_price);

    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }


    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }



    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
 
}
?>