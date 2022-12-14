<?php

class Category
{
    private string $animals;
    private string $icons;
    public function __construct(string $_animals, string $_icons = 'icon.jpg')
    {
        $this->setAnimals($_animals);
        $this->setIcons($_icons);


    }
    public function getAnimals()
    {
        return $this->animals;
    }

    public function setAnimals($animals)
    {
        $this->animals = $animals;

        return $this;
    }


    public function getIcons()
    {
        return $this->icons;
    }

    public function setIcons($icons)
    {
        $this->icons = $icons;

        return $this;
    }
}


?>