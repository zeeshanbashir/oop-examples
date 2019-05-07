<?php

/**
 * Abstraction on on single Level
 */
abstract class Machine
{
    abstract public function addExtraTopping();

    public function addMilk()
    {
        echo "Add milk\r\n";

        return $this;
    }

    public function addSugar()
    {
        echo "Add Sugar\r\n";

        return $this;
    }

    public function addHotWater()
    {
        echo "Add Hot Water\r\n";

        return $this;
    }

    public function make()
    {
        return $this->addHotWater()
                  ->addSugar()
                  ->addMilk()
                  ->addExtraTopping();
    }

}

class Tea extends Machine
{
    public function __construct()
    {
        echo "\r\n";
    }

    public function addExtraTopping()
    {
        echo "add Tea Bag \r\n";

        return $this;
    }
}

class Coffee extends Machine
{
    public function __construct()
    {
        echo "\r\n";
    }

    public function addExtraTopping()
    {
        echo "add Coffee \r\n";

        return $this;
    }
}


$tea = new Tea();
$tea->make();

$nissan = new Coffee();
$nissan->make();
