# guzzle-psr18-adapter

[![Build Status](https://api.travis-ci.org/ricardofiorani/guzzle-psr18-adapter.svg?branch=master)](http://travis-ci.org/ricardofiorani/guzzle-psr18-adapter)
[![Minimum PHP Version](https://img.shields.io/packagist/php-v/ricardofiorani/guzzle-psr18-adapter.svg)](https://php.net/)
[![License](https://poser.pugx.org/ricardofiorani/guzzle-psr18-adapter/license.png)](https://packagist.org/packages/ricardofiorani/guzzle-psr18-adapter)
[![Total Downloads](https://poser.pugx.org/ricardofiorani/guzzle-psr18-adapter/d/total.png)](https://packagist.org/packages/ricardofiorani/guzzle-psr18-adapter)
[![Coding Standards](https://img.shields.io/badge/cs-PSR--4-yellow.svg)](https://github.com/php-fig-rectified/fig-rectified-standards)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ricardofiorani/guzzle-psr18-adapter/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ricardofiorani/guzzle-psr18-adapter/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ricardofiorani/guzzle-psr18-adapter/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/ricardofiorani/guzzle-psr18-adapter/?branch=master)


A (very) simple guzzle PSR-18 adapter.

## Requirements
- PHP ^7.1 (Due to PSR-18 interface using Return Type Declaration)  
- Guzzle ^6.3

## Install

Via Composer

``` bash
$ composer require ricardofiorani/guzzle-psr18-adapter
```

## Usage

```php
$client = new \RicardoFiorani\GuzzlePsr18Adapter\Client();
$request = new \Your\Implementation\Of\Psr7\Request();
try {
    echo $client->sendRequest($request);
} catch (\Psr\Http\Client\ClientExceptionInterface $exception) {
    // your error handling
}
```
For futher documentation please see [http://docs.guzzlephp.org/en/stable/](http://docs.guzzlephp.org/en/stable/)

## Testing

``` bash
$ composer test
```

## Credits

- [Ricardo Fiorani][link-author]
- [All Contributors][link-contributors]

[link-author]: https://github.com/ricardofiorani
[link-contributors]: ../../contributors
