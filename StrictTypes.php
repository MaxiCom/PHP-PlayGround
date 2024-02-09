<?php

declare(strict_types=1);

enum Sexe {
    case Homme;
    case Femme;
    Case Autre;
};

class TestConstructor {
    public function __construct(
        public string $name,
        public int $age,
        public Sexe $sexe
    )
    {
    }

    public function __sleep(): array
    {
        return array('name', 'age');
    }

    public function __toString(): string
    {
        return 'test';
    }

    public function __invoke(): void
    {
        echo "called as a function()";
    }

    public function __debugInfo(): ?array
    {
        return null;
    }
}

$test = new TestConstructor('Max', 26, Sexe::Autre);
var_dump($test);