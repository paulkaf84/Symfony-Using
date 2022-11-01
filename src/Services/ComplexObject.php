<?php

namespace App\Services;

class ComplexObject
{
    protected string $foo;
    protected string $bar;
    protected string $baz;
    protected string $other;

    public function __construct
    (
        $foo,
        $bar,
        $baz,
        $other
    )
    {
        $this->foo = $foo;
        $this->bar = $bar;
        $this->baz = $baz;
        $this->other = $other;
    }

    public function doSomething(): void
    {
        // Do some opp
    }
}
