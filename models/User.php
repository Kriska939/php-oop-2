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

?>