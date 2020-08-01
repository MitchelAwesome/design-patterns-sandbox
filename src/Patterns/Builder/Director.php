<?php


namespace App\Patterns\Builder;


class Director
{
    private BuilderInterface $builder;

    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }

    public function constructPizzaPepperoni(BuilderInterface $builder)
    {
        // TODO: implement builder methods
    }

    public function constructPizzaHawaii(BuilderInterface $builder)
    {
        // TODO: implement builder methods
    }
}