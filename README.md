#  Toast [![SensioLabsInsight](https://insight.sensiolabs.com/projects/d2056d6a-d13e-487c-b0c7-087d9862bdbc/small.png)](https://insight.sensiolabs.com/projects/d2056d6a-d13e-487c-b0c7-087d9862bdbc)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]


A simple Package for creating Toast alerts in Laravel.

## Install

Via Composer

``` bash
$ composer require shawnsandy/toasts
```

Add the app.php to your `config/app.php`


*Provider*

``` php 
'providers' => [
ShawnSandy\Toasts\ToastProvider::class,
];
```

*Facade*

``` php
'aliases' => [
'Toast' => ShawnSandy\Toasts\App\ToastsFacade::class,
]
```



## Usage

__Create flash message(s) in you controller__

``` php

// Display a info alert
toastInfo( 'Information is very valuable' );

// Display a success alert
toastSuccess( 'A success alert' );

// Display a warning alert
toastWarning( 'A warming alert' );

// Display a danager alert
toastDanger( 'Information is very valuable' );

// Display a alert with title
toastInfo( 'Information is very valuable', 'Alert title' );

```

__Add to your views__

``` html

{!!  Toast::toastrJs()  !!}

@include('toast::toastr.js', ['options' => ['timeOut' => 5000]])

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email shawnsandy04@gmail.com instead of using the issue tracker.

## Credits

- [Shawn Sandy][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/shawnsandy/toasts.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis//Toast/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g//Toast.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g//Toast.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/shawnsandy/toasts.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/shawnsandy/toast
[link-travis]: https://travis-ci.org//Toast
[link-scrutinizer]: https://scrutinizer-ci.com/g//Toast/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g//Toast
[link-downloads]: https://packagist.org/packages/shawnsandy/toasts
[link-author]: https://github.com/shawnsandy


