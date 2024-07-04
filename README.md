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

## Using AcfService in tests
To make it easier when testing code that depends on the AcfService or parts of it, a FakeAcfService implementation is available.
This implementation is useful when you want to test your code without having to rely on the ACF functions.

### Example
Consider that you have the following class that utilizes a part of the AcfService:

```php
use AcfService\Contracts\GetFields;

class MyService
{
    public function __construct(private GetFields $acfService)
    {
    }

    public function getFields(): int
    {
        return $this->acfService->getFields();
    }
}
```

You can then use FakeAcfService in your tests to fake the results of the AcfService as well as verifying the calls made to the AcfService functions:

```php
use AcfService\Implementations\FakeAcfService;
use PHPUnit\Framework\TestCase;

class MyServiceTest extends TestCase
{
    public function testGetFields()
    {
        // Given
        $fakeAcfService = new FakeAcfService(['getFields' => ['fieldName' => 'fieldValue']]);
        $myService = new MyService($fakeAcfService);

        // When
        $fields = $myService->getFields();

        // Then
        $this->assertEquals([], $acfService->methodCalls['getFields'][0]);
        $this->assertEquals(['fieldName' => 'fieldValue'], $fields);
    }
}
```

### Passing return values to the FakeAcfService

The FakeAcfService constructor accepts an array of key-value pairs where the key is the name of the method and the value is the return value of the method.

```php
# Using a generic return value for all calls to the method.
$fakeAcfService = new FakeAcfService(['getFields' => ['field' => 'value']]);
$fakeAcfService->getFields(); // Returns ['field' => 'value']
$fakeAcfService->getFields(321); // Returns ['field' => 'value']
$fakeAcfService->getFields(123); // Returns ['field' => 'value']

# Using a specific return value based on what is passed to the function for a specific call to the method.
$fakeAcfService = new FakeAcfService(['getFields' => [123 => ['field' => 'value']]]);
$fakeAcfService->getFields(); // Returns false
$fakeAcfService->getFields(321); // Returns false
$fakeAcfService->getFields(123); // Returns ['field' => 'value']
```

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
