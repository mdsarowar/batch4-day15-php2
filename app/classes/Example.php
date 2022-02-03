<?php
namespace App\classes;

class Example{

    public $firstNumber=10;
    public $firstName;
    public $lastName;

    public function index(){
//        echo "hello world";
        $this->firstName="Habibur";
        $this->lastName="Rahman";

        echo "the first number is : ";
        echo $this->firstNumber;
        echo '<br/>';
        echo "First Name is : ";
        echo $this->firstName;
        echo '<br/>';
        echo "Last name is : ";
        echo $this->lastName;
        echo '<br/>';
        echo $this->firstName.$this->lastName;
    }

}