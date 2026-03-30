<?php

class User {
    public $firstName;
    public $lastName;
    public $phone;
    public $address;

    public function __construct($firstName, $lastName, $phone, $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function showData() {
        return "Hai " . $this->getFullName() . "<br>
                Phone Number: " . $this->phone . "<br>
                Address: " . $this->address;
    }
}

// variabel hasil
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName  = $_POST['last_name'];
    $phone     = $_POST['phone'];
    $address   = $_POST['address'];

    $user = new User($firstName, $lastName, $phone, $address);
    $result = $user->showData();
}
