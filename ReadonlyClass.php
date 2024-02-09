<?php

readonly class ReadonlyClass {}
abstract readonly class ReadonlyAbstract {}
final readonly class finalReadonlyClass {}



/* case insensitive */
reaDONly class childClass extends ReadonlyClass {
    //only on typed property
    private readonly int $number;

}




$object = new ReadonlyClass();

// dynamic property throw Error exception on readonly class (just deprecated but ok` on a normal class)
//$object->user = 'test';

//unset($object);