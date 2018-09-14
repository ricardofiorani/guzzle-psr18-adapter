<?php

namespace RicardoFioraniTest\GuzzlePsr18Adapter;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use RicardoFiorani\GuzzlePsr18Adapter\Client;

class ClientTest extends TestCase
{
    public function testSendRequest()
    {
        $client = new Client(['handler' => new MockHandler([new Response()])]);
        $request = new Request('GET', 'http://example.com');
        $r = $client->sendRequest($request);
        TestCase::assertInstanceOf(ResponseInterface::class, $r);
        TestCase::assertEquals(200, $r->getStatusCode());
    }

    /**
     * @expectedException \Psr\Http\Client\ClientExceptionInterface
     */
    public function testThrowsClientException()
    {
        $mock = new MockHandler([new Response(404)]);
        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        $request = new Request('GET', 'http://example.com');
        $r = $client->sendRequest($request);
    }
}
