<?php

namespace GluTtm\LaravelAdminLte\Menu\Filters;

use GluTtm\LaravelAdminLte\Menu\Builder;

interface FilterInterface
{
    public function transform($item, Builder $builder);
}
