<?php

declare(strict_types=1);

namespace App;

class HelloWorld
{

    protected string $greeting = 'Hello, world!';

    public function greet()
    {
        if (PHP_SAPI === 'cli') {
            echo $this->greeting.PHP_EOL;
        } else {
            echo "<h1>{$this->greeting}</h1>";
        }
    }

}