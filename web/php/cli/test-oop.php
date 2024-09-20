<?php

class Person{

private $firstName;
private $lastName;
private $personalCode;
private $distanceTotal;

public function __construct($firstName, $lastName, $personalCode, $distanceTotal) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->personalCode = $personalCode;
    $this->distanceTotal = $distanceTotal;
}

function walk1() {
    return $this->distanceTotal;
}

function walk2($distance) {
    return $this->distanceTotal += $distance;
}
}