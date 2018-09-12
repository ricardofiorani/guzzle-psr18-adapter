# guzzle-psr18-adapter

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A (very) simple guzzle PSR-18 adapter.

## Requirements
- PHP ^7.0 (Due to PSR-18 interface using Return Type Declaration)  
- Guzzle ^6.3

## Install

Via Composer

``` bash
$ composer require ricardofiorani/guzzle-psr18-adapter
```

## Usage

``` php
$client = new \RicardoFiorani\GuzzlePsr18Adapter\Client();
$request = new \Your\Implementation\Of\Psr7\Request();

echo $client->sendRequest($request);
```
For futher documentation please see [http://docs.guzzlephp.org/en/stable/](http://docs.guzzlephp.org/en/stable/)

[ico-version]: https://img.shields.io/packagist/v/ricardofiorani/guzzle-psr18-adapter.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ricardofiorani/guzzle-psr18-adapter/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ricardofiorani/guzzle-psr18-adapter.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ricardofiorani/guzzle-psr18-adapter.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ricardofiorani/guzzle-psr18-adapter.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ricardofiorani/guzzle-psr18-adapter
[link-travis]: https://travis-ci.org/ricardofiorani/guzzle-psr18-adapter
[link-scrutinizer]: https://scrutinizer-ci.com/g/ricardofiorani/guzzle-psr18-adapter/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ricardofiorani/guzzle-psr18-adapter
[link-downloads]: https://packagist.org/packages/ricardofiorani/guzzle-psr18-adapter
[link-author]: https://github.com/ricardofiorani
[link-contributors]: ../../contributors