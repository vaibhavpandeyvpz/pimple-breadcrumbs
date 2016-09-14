<?php

/*
 * This file is part of vaibhavpandeyvpz/pimple-breadcrumbs package.
 *
 * (c) Vaibhav Pandey <contact@vaibhavpandey.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.md.
 */

namespace Pimple\Breadcrumbs;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class BreadcrumbsServiceProvider
 * @package Pimple\Breadcrumbs
 */
class BreadcrumbsServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Container $pimple)
    {
        $pimple['breadcrumbs'] = function () {
            return new Breadcrumbs();
        };
    }
}
