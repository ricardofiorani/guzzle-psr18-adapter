<?php declare(strict_types=1);


namespace RicardoFiorani\GuzzlePsr18Adapter\Exception;

use Psr\Http\Client\ClientExceptionInterface;

class ClientException extends \GuzzleHttp\Exception\ClientException implements ClientExceptionInterface
{

}
