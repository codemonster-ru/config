# Changelog

All notable changes to this project will be documented in this file.

## [1.0.1] - 2025-09-26

### Changed

-   Removed references to .env, as it may not exist.

## [1.0.0] - 2025-09-26

### Added

-   Initial release of **codemonster-ru/config**.
-   Provides configuration repository for PHP applications.
-   Includes:
    -   `Config::load()` to load `config/*.php` files
    -   `config('key', $default)` helper to get values
    -   `config(['key' => value])` to set values dynamically
