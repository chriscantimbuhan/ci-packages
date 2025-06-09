<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends BaseModel
{
    protected $table      = 'user_roles';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';

    protected $allowedFields = [
        'name',
        'access',
        // add more fields here
    ];

    // Casting fields
    protected array $casts = [
        'access'        => 'array'
    ];

    // protected $validationRules = [
    //     'name' => 'required|min_length[3]|max_length[255]',
    //     'access' => 'required',
    // ];

    // Custom scope: filter by access permission
    public function filterByName(string $value)
    {
        return $this->builder()->where("LOWER(name) LIKE", '%' . strtolower($value) . '%');

        // return $this->where("JSON_CONTAINS(access, '\"{$permission}\"')");
    }

    // // Example relation: get users with their profiles (assuming profiles table with user_id)
    // public function withProfile()
    // {
    //     return $this->select('users.*, profiles.bio, profiles.avatar')
    //                 ->join('profiles', 'profiles.user_id = users.id', 'left');
    // }

    // // Custom method to get users with a specific permission
    // public function getUsersWithPermission(string $permission)
    // {
    //     return $this->filterByAccess($permission)->findAll();
    // }


}
