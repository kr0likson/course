<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{
    #[Route('/api/endpoint-name', name: 'example_endpoint', methods: ['GET'])]
    public function example(): JsonResponse
    {
        // Przykładowe dane do zwrócenia
        $data = [
            'id' => 1,
            'title' => 'Przykładowy tytuł',
            'description' => 'To jest przykładowy opis danych.',
            'items' => [
                ['name' => 'Item 1', 'value' => 100],
                ['name' => 'Item 2', 'value' => 200],
                ['name' => 'Item 3', 'value' => 300],
            ],
        ];

        return $this->json($data);
    }
}
