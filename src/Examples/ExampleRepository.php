<?php

namespace App\Examples;

use PDO;

class ExampleRepository
{
    public function __construct(private PDO $pdo) {}

    public function getData(): array
    {
        return [
            'message' => 'This is example data from the repository.'
        ];
    }
}
