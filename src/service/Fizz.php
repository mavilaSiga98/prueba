<?php

namespace app\service;

class Fizz
{
    public function execute(int $num)
    {
        if($num%15==0){
            return 'fizzbuzz';
        }

        if($num%3==0){
            return 'fzz';
        }

        if($num%5==0){
            return 'buzz';
        }

        return $num;
    }
}
