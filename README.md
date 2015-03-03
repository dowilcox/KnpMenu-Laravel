KnpMenu-Laravel
============
Laravel 5 package to create navigation menus, based on [KnpLabs/KnpMenu](https://github.com/KnpLabs/KnpMenu).

### Installation
Add to your composer.json file
```json
"dowilcox/knp-menu-laravel": "dev-master"
```

### Register the package

In config/app.php file, add an alias to the bottom of file:

```php
'Menu' => 'Dowilcox\KnpMenu\Facades\Menu',
```

and register this service provider at the bottom of the `providers` array:

```php
'Dowilcox\KnpMenu\MenuServiceProvider',
```
