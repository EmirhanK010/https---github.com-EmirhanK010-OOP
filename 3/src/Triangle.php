<?php

namespace Threeonarow;

class Triangle extends Figure
{
    private $base, $height;

    public function __construct($base, $height, $colorR, $colorG, $colorB)
    {
        parent::__construct($colorR, $colorG, $colorB);
        $this->base = $base;
        $this->height = $height;
    }

    public function draw()
    {
        return "<svg width='{$this->base}' height='{$this->height}'>
                   <polygon points='0,{$this->height} {$this->base},{$this->height} " . ($this->base / 2) . ",0' 
                   style='fill:rgb(" . $this->getColor() . ");stroke-width:10;stroke:rgb(0,0,0)'/>
                </svg>";
    }
}