# guzzle-psr18-adapter
A (very) simple guzzle PSR-18 adapter.

## Requirements
- PHP ^7.0 (Due to PSR-18 interface using Return Type Declaration)  
- Guzzle ^6.3

## Install

Via Composer

``` bash
$ composer require RicardoFiorani/guzzle-psr18-adapter
```

## Usage

``` php
$client = new \RicardoFiorani\GuzzlePsr18Adapter\Client();
$request = new \Your\Implementation\Of\Psr7\Request();

echo $client->sendRequest($request);
```
For futher documentation please see [http://docs.guzzlephp.org/en/stable/](http://docs.guzzlephp.org/en/stable/)