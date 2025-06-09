<?php

namespace App\Controllers;

use App\Models\UserRoleModel;
use Ccantimbuhan\CiFilters\Facades\Filters;
use Config\UserRole as ConfigUserRole;

class UserRole extends BaseController
{
    public function index()
    {
        $request = $this->request->getJSON(true) ?? $this->request->getGet();

        $results = Filters::apply((new UserRoleModel)->builder(), $request ?? [], (new ConfigUserRole)->availableFilters);

        if (! empty($request) && isset($request['paginated'])) {
            return $this->response->setJSON(Filters::applyPagination($results, $request));
        }

        return $this->response->setJSON($results->get()->getResult());
    }

    public function options()
    {
        return $this->response->setJSON(Filters::options((new ConfigUserRole)->availableFilters));
    }
}
