<?php


namespace App\Patterns\Builder;


class PizzaBuilder implements BuilderInterface
{
    private Pizza $pizza;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->pizza = new Pizza();
    }

    public function setBase(): void
    {
        // TODO: Implement setBase() method.
    }

    public function setPepperoni(): void
    {
        // TODO: Implement setPepperoni() method.
    }

    public function setPineapple(): void
    {
        // TODO: Implement setPineapple() method.
    }

    public function setHam(): void
    {
        // TODO: Implement setHam() method.
    }

    public function getProduct(): Pizza
    {
        $product = $this->pizza;
        $this->reset();

        return $product;
    }
}