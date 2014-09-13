<?php

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        return '<< silence >>';
    }
}