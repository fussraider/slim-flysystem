# FlySystem Integration for Slim micro framework 3
Access your Slim 3 application file system using FlySystem.

## Install

Via [Composer](https://getcomposer.org/)

```bash
$ composer require fussraider/slim-flysystem --prefer-dist
```

Requires Slim micro framework 3 and PHP 5.5.0 or newer.

## Usage

```php
// Create Slim app
$app = new \Slim\App();

// Fetch DI Container
$container = $app->getContainer();

// Register FlySystem helper:
// Option 1, using FlysystemProvider
$container->register(new \fussraider\Slim\FlysystemProvider);

// Option 2, using Closure
$container['fs'] = function ($c) {
    $fs = new \fussraider\Slim\Flysystem([
        'local' => [
            'path' => 'path/to/your/resources',
        ]
    ]);

    return $fs;
};

// Define named route
$app->get('/hello/{name}', function ($request, $response, $args) {
    // Read a file.
    $this->fs->read('path/to/file');

    return $response;
});

// Run app
$app->run();
```

**NOTE**: if you are using _option 1_ please make sure you already have `$container['settings']['filesystem']` in your configuration file.

## Custom functions

Description soon.

### `aFunction()`

Description soon.

```php
// ...
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](.github/CONDUCT.md) for details.

## License

This library is open-sourced software licensed under [MIT license](LICENSE.md).
