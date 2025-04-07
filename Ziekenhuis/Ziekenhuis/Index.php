<?php
require_once '../vendor/autoload.php';

use Hospital\{Patient, Doctor, Nurse, Appointment};

$appointments = [
    new Appointment(new Patient("Jantje", 100), new Doctor("Mohammed", 105), new DateTime("2025-04-06 12:00"), new DateTime("2025-04-06 13:00"), [new Nurse("Jennifer", 2000, 10), new Nurse("Kelly", 2000, 10)]),
    new Appointment(new Patient("Piet", 100), new Doctor("Pieter", 125), new DateTime("2025-04-07 14:00"), new DateTime("2025-04-07 16:00"), [new Nurse("Kelly", 2000, 10), new Nurse("Xenia", 2000, 10)]),
    new Appointment(new Patient("Klaas", 100), new Doctor("Pieter", 150), new DateTime("2025-04-09 15:00"), new DateTime("2025-04-09 17:00"), [new Nurse("Xenia", 2000, 10), new Nurse("Xenia", 2000, 10)])
];

echo "<table border='1'>";
echo "<tr><th>Doctor</th><th>Patient</th><th>Nurses</th><th>Begin</th><th>End</th><th>Price</th></tr>";
foreach ($appointments as $appointment) {
    $details = $appointment->getDetails();
    echo "<tr><td>{$details['doctor']}</td><td>{$details['patient']}</td><td><ul>";
    foreach ($details['nurses'] as $nurse) {
        echo "<li>$nurse</li>";
    }
    echo "</ul></td><td>{$details['begin']}</td><td>{$details['end']}</td><td>{$details['price']}</td></tr>";
}
echo "</table>";