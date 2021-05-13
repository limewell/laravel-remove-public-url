# Laravel remove public from url

[![Latest Version on Packagist](https://img.shields.io/packagist/v/limewell/laravel-remov-public-url.svg?style=flat-square)](https://packagist.org/packages/limewell/laravel-remove-public-url)
[![Total Downloads](https://img.shields.io/packagist/dt/limewell/laravel-remove-public-url.svg?style=flat-square)](https://packagist.org/packages/limewell/laravel-remove-public-url)
![GitHub Actions](https://github.com/limewell/laravel-remove-public-url/actions/workflows/main.yml/badge.svg)

This package is used to run laravel project from root directory. This package is specially created for that server where we have no access to point public directory.
## Installation

You can install the package via composer:

```bash
composer require limewell/laravel-remove-public-url --dev
```

## Usage

``` php
php artisan vendor:publish --tag=LaravelRemovePublicUrl
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Dipesh Sukhia](https://github.com/dipeshsukhia)
- [Bhavin Gajjar](https://github.com/bhavingajjar)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
