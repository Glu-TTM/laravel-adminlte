<?php

namespace GluTtm\LaravelAdminLte\Events;

use GluTtm\LaravelAdminLte\Menu\Builder;

class BuildingMenu
{
    public $menu;

    public function __construct(Builder $menu)
    {
        $this->menu = $menu;
    }
}
