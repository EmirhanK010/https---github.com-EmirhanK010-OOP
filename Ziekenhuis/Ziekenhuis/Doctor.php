<?php
namespace Hospital;

class Doctor extends Staff {
    private float $hourlyRate;
    private int $appointments;

    public function __construct(string $name, float $hourlyRate) {
        parent::__construct($name, 0, "Doctor");
        $this->hourlyRate = $hourlyRate;
        $this->appointments = 0;
    }

    public function addAppointment(): void {
        $this->appointments++;
    }

    public function calculateSalary(): float {
        return $this->appointments * $this->hourlyRate;
    }

    // **Fix: Implementeer getRole()**
    public function getRole(): string {
        return "Doctor";
    }
}