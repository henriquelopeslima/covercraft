<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

final class HelloWorldController extends AbstractController {
    public function __invoke(): JsonResponse
    {
        return $this->json([
            'title' => 'Hello World!',
        ]);
    }
}
