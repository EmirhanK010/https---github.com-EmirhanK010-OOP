<?php
namespace Hospital;

abstract class Person {
    private string $name;
    private string $role;

    public function __construct(string $name, string $role) {
        $this->name = $name;
        $this->role = $role;
    }

    public function getName(): string {
        return $this->name;
    }

    // Implement getRole() to return the role property
    public function getRole(): string {
        return $this->role;
    }
}