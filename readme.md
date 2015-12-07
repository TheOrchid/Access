## Access
Role based access control package from Laravel

[![Latest Stable Version](https://poser.pugx.org/orchid/access/v/stable)](https://packagist.org/packages/orchid/access)
[![Total Downloads](https://poser.pugx.org/orchid/access/downloads)](https://packagist.org/packages/orchid/access)
[![License](https://poser.pugx.org/orchid/access/license)](https://packagist.org/packages/orchid/access)



## Installation

1. install package

	```php
    composer require orchid/access
	```

1. edit config/app.php

	service provider :

	```php
	 Orchid\Access\Providers\SettingsServiceProvider::class
	```

1. create user\roles table

	```php
	php artisan vendor:publish
	php artisan migrate
	```

## Usage

```php
 Add laters


/**
* Пользователь
*/

// Проверяет доступность у пользователя в ролях и пермишеннах
Auth:user()->hasAccess('param');

// Получить доступы для пользователя
Auth:user()->getPermissionsAttribute($permissions);

// Установть доступы для пользователя
Auth:user()->getPermissionsAttribute($permissions)

// Получить роли пользователя
Auth:user()->getRoles();

// Проверить имеет ли пользователеь роль
Auth:user()->inRole($role)

// Добиваить пользователю роль
Auth:user()->addRole($role)

```
