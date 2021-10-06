<?php

class User
{
    protected $name;
    protected $lastName;
    protected $username;
    protected $email;
    protected $phone;

    public function __construct($name, $lastName, $username, $email, $phone)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
    }
}

class Premium extends User {
    public $discount;

    public function __construct($name, $lastName, $username, $email, $phone, $discount = 5.99)
    {
        parent::__construct($name, $lastName, $username, $email, $phone);
        $this->discount = $discount;
    }
}

?>