<?php
/**
 * Created by PhpStorm.
 * User: longm
 * Date: 04/10/2017
 * Time: 19:42
 */

class User
{
    public $name;
    public $surname;
    public $isOpen;
    public $cardNumber;
    public $cardExpire;
    public $dob;
    public $medExpire;
    public $cf;

    public function __construct($name, $surname, $isOpen, $cardNumber, $cardExpire, $medExpire, $dob, $cf)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->isOpen = $isOpen;
        $this->cardNumber = $cardNumber;
        $this->cardExpire = $cardNumber;
        $this->medExpire = $medExpire;
        $this->dob;
        $this->cf;
    }

}