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

/**
 * Class BreadcrumbsTrait
 * @package Pimple\Breadcrumbs
 */
trait BreadcrumbsTrait
{
    /**
     * @param string $text
     * @param string|null $route
     * @param array $params
     */
    public function addBreadcrumbItem($text, $route = null, $params = array())
    {
        $this['breadcrumbs']->addItem($text, $route, $params);
    }
}
