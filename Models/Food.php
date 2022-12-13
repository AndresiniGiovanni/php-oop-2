<?php

include_once __DIR__ . '/Product.php';

class Food extends Product
{
    private array $ingredients;
    private int $weight;
    function __construct(string $_image, string $_title, float $_price, Category $_category, array $_ingredients, int $_weight)
    {
        parent::__construct($_image, $_title, $_price, $_category);

        $this->setIngredients($_ingredients);
        $this->setWeight($_weight);
    }

    public function getIngredients()
    {
        return $this->ingredients;

    }
    public function setIngredients($ingredients)
    {
        if (count($ingredients)) {
            $this->ingredients = $ingredients;
        } else {
            $this->ingredients = ["None"];
        }
        return $this;
    }


    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

}
?>