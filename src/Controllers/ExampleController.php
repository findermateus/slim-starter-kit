<?php

namespace App\Controllers;

use App\Examples\ExampleRepository;
use App\Infra\ApplicationException;
use PDO;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ExampleController
{

    public function __construct(private ExampleRepository $repository) {}

    public function getExampleData(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $data = $this->repository->getData();
        $response->getBody()->write(json_encode($data));

        return $response->withHeader('Content-Type', 'application/json');
    }

    public function exceptionExample()
    {
        throw new ApplicationException("Example error occurred", 400, "EXAMPLE_ERROR");
    }
}
