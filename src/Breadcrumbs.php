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
 * Class Breadcrumbs
 * @package Pimple\Breadcrumbs
 */
class Breadcrumbs
{
    /**
     * @var array
     */
    protected $breadcrumbs = array();

    /**
     * @param string $text
     * @param string|null $route
     * @param array $params
     */
    public function addItem($text, $route = null, $params = array())
    {
        $this->breadcrumbs[] = array(
            'text' => $text,
            'route' => $route,
            'params' => $params,
        );
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->breadcrumbs;
    }
}
