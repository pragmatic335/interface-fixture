<?php


class Base
{
    public function a(): void
    {
        echo 'hello, i am a'. PHP_EOL;
    }

}

class Child extends Base
{
    public function b()
    {
        echo 'hello, i am b ' . PHP_EOL;
    }

    static function test(Base $example): void
    {
        $example->b();
    }
}

Child::test( new Child() );



