<?php

require_once __DIR__. '/Car.php';

class Taxi extends Car
{
private $passenger;

public function pickUp($addpassenger)
{
   $this->passenger += $addpassenger;
   return $addpassenger."人乗車しました";
}
public function lower($lowpassenger)
{   
    $this->passenger -= $lowpassenger;
    if ($this->passenger < 0) {
        return $lowpassenger."は降車できません";
    }else{
    return $lowpassenger."人降車しました"."\n";
    }
}

public function information()
    {
        return 
            "車の車種:".$this->getName()."\n".
            "車体番号:".$this->getNumber()."\n".
            "カラー:".$this->getColor()."\n". 
            "乗車人数:".$this->passenger."\n";
    } 


}

