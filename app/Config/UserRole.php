<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class UserRole extends BaseConfig
{
    public array $availableFilters = [
        'name'    => \App\UserRole\Filters\NameFilter::class,
        'search' => \App\UserRole\Filters\SearchFilter::class,
    ];
}
