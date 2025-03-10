<?php

namespace Threeonarow;

abstract class Figure
{
    private $colorR, $colorG, $colorB;

    public function __construct($colorR, $colorG, $colorB)
    {
        $this->colorR = $colorR;
        $this->colorG = $colorG;
        $this->colorB = $colorB;
    }

    protected function getColor()
    {
        return "{$this->colorR},{$this->colorG},{$this->colorB}";
    }

    abstract public function draw();
}