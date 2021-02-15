<?php

interface Univ{
    public function z();
}


class Base implements Univ
{
    public function a()
    {
        return 'Hi, i am function a ' . PHP_EOL;
    }

    public function z()
    {
        return 'HELLO all, i am function z ' . PHP_EOL;
    }

}

class Child extends Base
{
    public function b()
    {
        return 'hello, i am b ' . PHP_EOL;
    }

    static function test(Univ $example)
    {
        return $example->z();
    }
}


echo Child::test(new Child());



