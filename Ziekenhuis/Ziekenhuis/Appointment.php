<?php
namespace Hospital;

use DateTime;

class Appointment {
    private static int $count = 0;
    private Patient $patient;
    private Doctor $doctor;
    private array $nurses;
    private DateTime $beginTime;
    private DateTime $endTime;
    private float $price;

    public function __construct(Patient $patient, Doctor $doctor, DateTime $beginTime, DateTime $endTime, array $nurses = []) {
        $this->patient = $patient;
        $this->doctor = $doctor;
        $this->beginTime = $beginTime;
        $this->endTime = $endTime;
        $this->nurses = $nurses;
        self::$count++;
        $this->doctor->addAppointment();
        foreach ($this->nurses as $nurse) {
            $nurse->addExtraAppointment();
        }
        $this->calculatePrice();
    }

    private function calculatePrice(): void {
        $duration = ($this->endTime->getTimestamp() - $this->beginTime->getTimestamp()) / 3600;
        $this->price = ($this->doctor->calculateSalary() + array_sum(array_map(fn($n) => $n->calculateSalary(), $this->nurses))) * $duration;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getDetails(): array {
        return [
            'doctor' => $this->doctor->getName(),
            'patient' => $this->patient->getName(),
            'nurses' => array_map(fn($n) => $n->getName(), $this->nurses),
            'begin' => $this->beginTime->format('d-m-Y H:i'),
            'end' => $this->endTime->format('d-m-Y H:i'),
            'price' => $this->getPrice()
        ];
    }
}