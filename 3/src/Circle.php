<?php

namespace Threeonarow;

class Circle extends Figure
{
    private $radius;

    public function __construct($colorR, $colorG, $colorB, $radius)
    {
        $this->radius = $radius;
        parent::__construct($colorR, $colorG, $colorB);
    }

    public function draw()
    {
        return "<svg width='" . ($this->radius * 2) . "' height='" . ($this->radius * 2) . "'>
                   <circle cx='{$this->radius}' cy='{$this->radius}' r='{$this->radius}' 
                   style='fill:rgb(" . $this->getColor() . ");stroke-width:10;stroke:rgb(0,0,0)'/>
                </svg>";
    }
}