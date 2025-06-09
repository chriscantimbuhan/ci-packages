<?php

namespace App\UserRole\Filters;

use App\Models\UserRoleModel;
use Ccantimbuhan\CiFilters\BaseFilter;
use Ccantimbuhan\CiFilters\Helpers\FilterHelper;
use CodeIgniter\Database\BaseBuilder;

class NameFilter extends BaseFilter
{
    public static function apply(BaseBuilder $query, $value): BaseBuilder
    {
        return $query->where("LOWER(name) LIKE", '%' . strtolower($value) . '%');
    }

    public static function options()
    {
        return FilterHelper::resolveOptions([
            'options_from' => [UserRoleModel::class, 'name', 'id']
        ]);
    }
}
