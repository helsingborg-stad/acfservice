<!-- SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![License][license-shield]][license-url]

![Unit Tests](https://github.com/helsingborg-stad/acfservice/actions/workflows/php-test.yml/badge.svg)
![PHP Versions][php-versions-shield]


# AcfService

Simplifies ACF integration by providing a centralized AcfService that exposes global ACF functions in a streamlined manner. Simplify your development workflow and enhance ACF integration with ease.

[Report Bug](https://github.com/helsingborg-stad/acfservice/issues)
·
[Request Feature](https://github.com/helsingborg-stad/acfservice/issues)

## About AcfService

Enable the use of global ACF functions in plugins and themes where applying Interface Segregation. Different flavors of the ACF Service can be utilized by applying available decorators.

## Getting Started

### Installation

1. Install the package via composer:
```bash
composer require helsingborg-stad/acfservice
```

2. Use the AcfService in your plugin or theme:
```php
use AcfService\Implementations\NativeAcfService;

$acfService = new NativeAcfService();
$fields = $acfService->getFields(123);
```

### Built With

* PHP

## Tests

### Run tests
Run `composer test` in the terminal.

## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the [MIT License][license-url].

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/helsingborg-stad/acfservice
[contributors-url]: https://github.com/helsingborg-stad/acfservice/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/helsingborg-stad/acfservice.svg?style=flat-square
[forks-url]: https://github.com/helsingborg-stad/acfservice/network/members
[stars-shield]: https://img.shields.io/github/stars/helsingborg-stad/acfservice.svg?style=flat-square
[stars-url]: https://github.com/helsingborg-stad/acfservice/stargazers
[issues-shield]: https://img.shields.io/github/issues/helsingborg-stad/acfservice.svg?style=flat-square
[issues-url]: https://github.com/helsingborg-stad/acfservice/issues
[license-shield]: https://img.shields.io/github/license/helsingborg-stad/acfservice.svg?style=flat-square
[license-url]: https://github.com/helsingborg-stad/acfservice/blob/main/LICENSE
[php-versions-shield]: https://img.shields.io/badge/php-^8.1-777bb3.svg?logo=php&logoColor=white&labelColor=555555
