<?php

class User
{
    protected $name;
    protected $lastName;
    public $username;
    protected $email;
    protected $phone;
    protected $card;

    public function __construct($name, $lastName, $username, $email, $phone)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
    }

    // SET CARD 

    public function setCard($card)
    {
        if (!is_numeric($card)) {
            throw new Exception('Devi inserire delle cifre');
        } else {
            return $this->card = $card;
        }
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