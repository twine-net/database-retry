Database Retry
===============

Laravel 4 database retry improvements

## Installation

You can install the package using the [Composer](https://getcomposer.org/) package manager:

```json
{
    "require": {
        "clowdy/database-retry": "dev-master"
    }
}
```

Update `app/config/app.php` with the new service provider.

```php
'providers' => array(
    ...
    //'Illuminate\Database\DatabaseServiceProvider',
    'Clowdy\Database\DatabaseServiceProvider',
    ...
)
```
