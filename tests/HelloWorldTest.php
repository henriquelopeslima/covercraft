<?php

declare(strict_types=1);

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HelloWorldTest extends WebTestCase
{
    public function testRouteNotExists(): void
    {
        $this->expectException(NotFoundHttpException::class);

        $client = static::createClient();
        $client->catchExceptions(false);

        $client->request(Request::METHOD_GET, '/not-existent', server: [
            'HTTP_ACCEPT' => 'application/json',
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_NOT_FOUND);
    }

    public function testRouteExistWithResponseIsSuccessful(): void
    {
        $client = static::createClient();

        $client->request(Request::METHOD_GET, '/hello-world', server: [
            'HTTP_ACCEPT' => 'application/json',
        ]);
        $response = $client->getResponse()->getContent();

        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        $this->assertEquals(json_encode([
            'title' => 'Hello World!',
        ]), $response);
    }
}
