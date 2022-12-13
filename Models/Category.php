<?php
class Category
{
    private string $species;
    public function __construct(string $_species)
    {
        $this->setSpecies($_species);

    }
    public function getSpecies()
    {
        return $this->species;
    }

    public function setSpecies($species)
    {
        $this->species = $species;

        return $this;
    }
}


?>