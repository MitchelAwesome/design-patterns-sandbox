<?php


namespace App\Patterns\Builder;


interface BuilderInterface
{
    public function reset(): void;

    public function setBase(): void;

    public function setPepperoni(): void;

    public function setPineapple(): void;

    public function setHam(): void;

    public function getProduct();
}