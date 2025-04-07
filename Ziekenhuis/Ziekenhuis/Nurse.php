<?php
namespace Hospital;

class Nurse extends Staff {
    private float $bonusRate;
    private int $extraAppointments;

    public function __construct(string $name, float $fixedSalary, float $bonusRate) {
        parent::__construct($name, $fixedSalary, "Nurse");
        $this->bonusRate = $bonusRate;
        $this->extraAppointments = 0;
    }

    // Method to add extra appointments
    public function addExtraAppointment(): void {
        $this->extraAppointments++;
    }

    // Implement the calculateSalary() method
    public function calculateSalary(): float {
        return $this->salary + ($this->extraAppointments * $this->bonusRate);
    }
}