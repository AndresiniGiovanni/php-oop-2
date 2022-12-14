<?php

trait Weightable
{

    protected $weight;

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        if (!is_int($weight)) {
            throw new Exception("Value Error");
        }
        $this->weight = $weight;
    }


}