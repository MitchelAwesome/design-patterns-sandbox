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
        $this->builder->reset();
        $this->builder->setBase();
        $this->builder->setPepperoni();
    }

    public function constructPizzaHawaii(BuilderInterface $builder)
    {
        // TODO: implement builder methods
        $this->builder->reset();
        $this->builder->setBase();
        $this->builder->setPineapple();
        $this->builder->setHam();
    }
}