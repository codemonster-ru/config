# codemonster-ru/env

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codemonster-ru/config.svg?style=flat-square)](https://packagist.org/packages/codemonster-ru/config)
[![Total Downloads](https://img.shields.io/packagist/dt/codemonster-ru/config.svg?style=flat-square)](https://packagist.org/packages/codemonster-ru/config)
[![License](https://img.shields.io/packagist/l/codemonster-ru/config.svg?style=flat-square)](https://packagist.org/packages/codemonster-ru/config)
[![Tests](https://github.com/codemonster-ru/config-php/actions/workflows/tests.yml/badge.svg)](https://github.com/codemonster-ru/config-php/actions/workflows/tests.yml)

Simple configuration loader and helper for PHP applications.

## 📦 Installation

```bash
composer require codemonster-ru/config
```

## 🚀 Usage

### 1. Load config files

```php
use Codemonster\Config\Config;

Config::load(__DIR__ . '/config');
```

### 2. Access config values

```php
// get values
$name = config('app.name', 'Default');
$dbHost = config('database.host');

// set values dynamically
config(['app.debug' => true]);

// get all configs
$all = Config::all();
```

## 📄 Example config file (`config/app.php`)

```php
<?php

return [
    'name' => 'Codemonster',
    'debug' => false,
];
```

## 🧪 Testing

```bash
composer test
```

## 👨‍💻 Author

[**Kirill Kolesnikov**](https://github.com/KolesnikovKirill)

## 📜 License

[MIT](https://github.com/codemonster-ru/config-php/blob/main/LICENSE)
