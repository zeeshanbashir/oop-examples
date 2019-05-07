<?php

interface Machine
{
    public function tyre();
}

/**
 * Abstraction on on single Level
 */
abstract class Car implements Machine
{
    abstract public function brand();

    abstract public function tyre();

    public function sellBy()
    {
        echo "Sell By : Al Tayyar Online Group \r\n";

        return $this;
    }
}

class Honda extends Car
{
    public function brand()
    {
        echo "Brand : Honda Civic \r\n";

        return $this;
    }

    public function tyre()
    {
        echo "Tyre : 16x16 \r\n";

        return $this;
    }

    public function model()
    {
        echo "Model : 2012 \r\n";

        return $this;
    }

    public function color()
    {
        echo "Color : White \r\n";

        return $this;
    }
}

class Nissan extends Car
{
    public function brand()
    {
        echo "Brand : Nissan \r\n";

        return $this;
    }

    public function tyre()
    {
        echo "Tyre : 16x32 \r\n";

        return $this;
    }

    public function model()
    {
        echo "Model : 2019 \r\n";

        return $this;
    }

    public function color()
    {
        echo "Color : Black \r\n";

        return $this;
    }
}


$honda = new Honda();
$honda->brand()->model()->tyre()->color()->sellBy();

$nissan = new Nissan();
$nissan->brand()->model()->tyre()->color()->sellBy();
