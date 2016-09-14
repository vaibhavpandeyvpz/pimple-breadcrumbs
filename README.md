# vaibhavpandeyvpz/pimple-breadcrumbs
Easy breadcrumbs navigation for [Pimple](https://github.com/silexphp/Pimple) powered apps, tested with [Silex](https://github.com/silexphp/Silex).

[![Latest Version](https://img.shields.io/github/release/vaibhavpandeyvpz/pimple-breadcrumbs.svg?style=flat-square)](https://github.com/vaibhavpandeyvpz/pimple-breadcrumbs/releases) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vaibhavpandeyvpz/pimple-breadcrumbs/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/vaibhavpandeyvpz/pimple-breadcrumbs/?branch=master) [![Total Downloads](https://img.shields.io/packagist/dt/vaibhavpandeyvpz/pimple-breadcrumbs.svg?style=flat-square)](https://packagist.org/packages/vaibhavpandeyvpz/pimple-breadcrumbs) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md) 

Install
-------
```bash
composer require vaibhavpandeyvpz/pimple-breadcrumbs
```

Usage
-----
```php
<?php

$app = new Pimple\Container();
// OR
$app = new Silex\Application();

$app->register(new Pimple\Breadcrumbs\BreadcrumbsServiceProvider());
```

In your ```twig``` templates, you can render items as follows (uses [Bootstrap](http://getbootstrap.com/)):

```twig
<ol class="breadcrumb">
    {% for item in app.breadcrumbs.items() %}
        {% if item.route is null or loop.last %}
            <li class="active">{{ item.text|trans }}</li>
        {% else %}
            <li><a href="{{ path(item.route, item.params) }}">{{ item.text|trans }}</a></li>
        {% endif %}
    {% endfor %}
</ol>
```

Helper
-----
```php
<?php

use Pimple\Breadcrumbs\BreadcrumbsTrait;
use Silex\Application as Silex;

class Application extends Silex
{
    use BreadcrumbsTrait;
}

$app = new Application();
$app->register(new Pimple\Breadcrumbs\BreadcrumbsServiceProvider());

$app->addBreadcrumbItem('link_text', 'link_route', ['id' => 1]);
```

License
------
See [LICENSE.md](https://github.com/vaibhavpandeyvpz/pimple-breadcrumbs/blob/master/LICENSE.md) file.
