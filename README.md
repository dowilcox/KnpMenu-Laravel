KnpMenu-Laravel
============
Laravel 5 package to create navigation menus, based on [KnpLabs/KnpMenu](https://github.com/KnpLabs/KnpMenu).

### Installation
Add to your composer.json file
```json
"dowilcox/knp-menu-laravel": "1.0.*"
```

### Register the package

In config/app.php add the service provider and alias.

```php
Dowilcox\KnpMenu\MenuServiceProvider::class,
```

```php
'Menu' => Dowilcox\KnpMenu\Facades\Menu::class,
```

#### Publish config
```bash
php artisan vendor:publish
```

### Example

```php
$menu = Menu::create('main-menu', ['childrenAttributes' => ['class' => 'nav']]);

$menu->addChild('Home', ['uri' => url('/')]);
$menu->addChild('Users', ['uri' => route('admin.users.index')]);
$menu->addChild('Roles', ['uri' => route('admin.roles.index')]);
$menu->addChild('Menu', ['uri' => url('menu')]);

echo Menu::render($menu);
```

Will output:
```html
<ul class="nav">
  <li class="first">
    <a href="http://localhost:8000">Home</a>
  </li>
  <li>
    <a href="http://localhost:8000/admin/users">Users</a>
  </li>
  <li>
    <a href="http://localhost:8000/admin/roles">Roles</a>
  </li>
  <li class="current active last">
    <a href="http://localhost:8000/menu">Menu</a>
  </li>
</ul>
```