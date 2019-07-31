# Laravel Cloudflare
The Cloudflare API right from Laravel.

![Travis (.org)](https://img.shields.io/travis/teakowa/laravel-cloudflare?style=flat-square)
[![StyleCI](https://github.styleci.io/repos/199674005/shield?branch=master)](https://github.styleci.io/repos/199674005)
![PHP from Packagist](https://img.shields.io/packagist/php-v/teakowa/laravel-cloudflare?style=flat-square)
![Packagist Version](https://img.shields.io/packagist/v/teakowa/laravel-cloudflare?style=flat-square)
[![LICENSE](https://img.shields.io/badge/License-Anti%20996-blue.svg?style=flat-square)](https://github.com/996icu/996.ICU/blob/master/LICENSE)
[![LICENSE](https://img.shields.io/badge/License-Apache--2.0-green.svg?style=flat-square)](https://github.com/996icu/996.ICU/blob/master/LICENSE)
[![996.icu](https://img.shields.io/badge/Link-996.icu-red.svg?style=flat-square)](https://996.icu)


*Note: This will work for anything Laravel 5 and up but I made it for Laravel 5.5 so I won't add the service provider and facade instructions here.*

## Installation

First of all, You need get your API key **(not token)** from [Cloudflare](https://dash.cloudflare.com/profile/api-tokens)

```sh
composer require Teakowa/laravel-cloudflare
```

Publish the config file.

```
php artisan vendor:publish
```

Put them in your `.env` as the following, obviously and respectively.
1. `CLOUDFLARE_EMAIL`
2. `CLOUDFLARE_API_KEY`

## Usage

Lastly, you can using `Cloudflare` class in controller use namespace top of that file

```php
use Teakowa\Cloudflare\Cloudflare;

$data = (new Cloudflare)->zone()->listZones();
```

or if you want a simple, you can use `cloudflare` function:

```php
cloudflare()
```

## LICENSE
The code in this repository, unless otherwise noted, is under the terms of both the [Anti 996](https://github.com/996icu/996.ICU/blob/master/LICENSE) License and the [Apache License (Version 2.0)]().