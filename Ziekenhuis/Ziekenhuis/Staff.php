<?php
namespace Hospital;

abstract class Staff extends Person {
    protected float $salary;

    public function __construct(string $name, float $salary, string $role) {
        parent::__construct($name, $role);
        $this->salary = $salary;
    }

    // Abstract method for calculating salary, to be implemented by subclasses
    abstract public function calculateSalary(): float;
}