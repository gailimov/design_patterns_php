<?php

abstract class Duck
{
    /**
     * @var FlyBehavior
     */
    protected $flyBehavior;

    /**
     * @var QuackBehavior
     */
    protected $quackBehavior;

    public function swim()
    {
        return 'swimming...';
    }

    abstract public function display();

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}