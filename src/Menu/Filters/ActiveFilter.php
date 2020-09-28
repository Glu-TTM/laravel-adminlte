<?php

namespace GluTtm\LaravelAdminLte\Menu\Filters;

use GluTtm\LaravelAdminLte\Menu\Builder;
use GluTtm\LaravelAdminLte\Menu\ActiveChecker;

class ActiveFilter implements FilterInterface
{
    private $activeChecker;

    public function __construct(ActiveChecker $activeChecker)
    {
        $this->activeChecker = $activeChecker;
    }

    public function transform($item, Builder $builder)
    {
        if (! isset($item['header'])) {
            $item['active'] = $this->activeChecker->isActive($item);
        }

        return $item;
    }
}
