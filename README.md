# Draft.php

A simple library to handle the content state of [Draft.js](https://github.com/facebook/draft-js) in the backend.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/webstronauts/draft-php.svg?style=flat-square)](https://packagist.org/packages/webstronauts/draft-php)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![HHVM Status](https://img.shields.io/hhvm/webstronauts/draft-php/csv.svg?style=flat-square)](http://hhvm.h4cc.de/package/webstronauts/draft-php)
[![Build Status](https://travis-ci.org/webstronauts/draft-php.svg?branch=master)](https://travis-ci.org/webstronauts/draft-php)
[![Total Downloads](https://img.shields.io/packagist/dt/webstronauts/draft-php.svg?style=flat-square)](https://packagist.org/packages/webstronauts/draft-php)

## Usage

```php
use Draft\ContentState;
use Draft\Encoding;

$rawState = json_decode('{"entityMap":{"0":{"type":"LINK","mutability":"MUTABLE","data":{"url":"/","rel":null,"title":"hi","extra":"foo"}}},"blocks":[{"key":"8r91j","text":"a","type":"unstyled","depth":0,"inlineStyleRanges":[{"offset":0,"length":1,"style":"ITALIC"}],"entityRanges":[{"offset":0,"length":1,"key":0}]}]}', true);

$contentBlocks = Encoding::convertFromRaw($rawState);
$contentState = ContentState::createFromBlockArray($contentBlocks);

var_dump($contentState);
```

## Inspiration

Many thanks to the [Draft.js](https://github.com/facebook/draft-js) team for the initial inspiration that became the groundworks for the library.