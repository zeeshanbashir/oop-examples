<?php

/**
 * Abstraction on on single Level
 */

abstract class Car
{
    abstract public function brand();

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


$honda = new Honda();
$honda->brand()->model()->color()->sellBy();
