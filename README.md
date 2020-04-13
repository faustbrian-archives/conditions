# Conditions

[![Latest Version](https://badgen.net/packagist/v/kodekeep/conditions)](https://packagist.org/packages/kodekeep/conditions)
[![Software License](https://badgen.net/packagist/license/kodekeep/conditions)](https://packagist.org/packages/kodekeep/conditions)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/conditions/run-tests?label=tests)](https://github.com/kodekeep/conditions/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/conditions)](https://codeclimate.com/github/kodekeep/conditions)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/conditions)](https://codeclimate.com/github/kodekeep/conditions)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/conditions)](https://packagist.org/packages/kodekeep/conditions)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides a human-friendly interface for common conditional checks.

## Installation

```bash
composer require kodekeep/conditions
```

## Usage

``` php
Condition::contains('Hello World', 'World');
Condition::doesNotContain('Hello World', 'Planet');
Condition::is('a', 'a');
Condition::isNot('a', 'b');
Condition::startsWith('Hello World', 'Hello');
Condition::endsWith('Hello World', 'World');
Condition::hasNoValue('');
Condition::hasAnyValue('abc');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Conditions is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
