<?php

namespace App\UserRole\Filters;

use Ccantimbuhan\CiFilters\BaseFilter;
use CodeIgniter\Database\BaseBuilder;

class SearchFilter extends BaseFilter
{
    public static function apply(BaseBuilder $query, $value): BaseBuilder
    {
        return $query->where("LOWER(name) LIKE", '%' . strtolower($value) . '%');
    }
}
