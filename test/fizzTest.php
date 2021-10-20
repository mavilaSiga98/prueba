<?php

use app\service\Fizz;
use PHPUnit\Framework\TestCase;

class fizzTest extends TestCase
{

    public function testFizz()
    {
        $fizz = new Fizz;

        $this->assertEquals('fizz', $fizz->execute(3));

        $this->assertEquals('buzz', $fizz->execute(5));

        $this->assertEquals('fizzbuzz', $fizz->execute(15));

        $this->assertEquals(1, $fizz->execute(1));
    }

    public function testBuzz()
    {
        $fizz = new Fizz;

        $this->assertEquals('fizz', $fizz->execute(3));

        $this->assertEquals('buzz', $fizz->execute(5));

        $this->assertEquals('fizzbuzz', $fizz->execute(15));

        $this->assertEquals(1, $fizz->execute(1));
    }

}
