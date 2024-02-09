<?php

class EmptyClass {
    private const AGE = 0;

    public function __isset(string $name): bool
    {
        return false;
    }
}

$obj = new EmptyClass;
echo empty($obj->AGE);