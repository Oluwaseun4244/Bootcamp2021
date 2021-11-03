<?php


class Banjo
{
    public function wakeup()
    {
        return "Great, you are awake!";
    }

    public function eat($food)
    {
        return "Oh, you are ready to eat " . " " . $food;
    }
}



class Test
{

    private $name;
    private $age;
    public $gender;


    public function Setname($enteredName)
    {
       return $this->name = $enteredName;
    }

    public function SetAge($enteredAge)
    {
       return $this->age = $enteredAge;
    }
    public function SetGender($enteredGender)
    {
       return $this->gender = $enteredGender;
    }
}




$Tola = new Test;

// echo $Tola->name;
echo $Tola->Setname("Seun") . "<br>";
echo $Tola->SetAge(99) . "<br>";
echo $Tola->gender . "<br>";
echo $Tola->SetGender("MALE") . "<br>";
echo $Tola->SetGender("FEMALE") . "<br>";
// echo $Tola->name;
