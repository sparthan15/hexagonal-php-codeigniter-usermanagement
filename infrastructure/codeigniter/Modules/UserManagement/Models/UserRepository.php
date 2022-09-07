<?php

namespace Modules\UserManagement\Models;

use usermanagement\domain\models\User;

class UserRepository extends \CodeIgniter\Model {

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['user_id', 'company_id', 'username', 'password', 'craeted_at', 'updated_at', 'logs'];
    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function logIn(string $userName, string $password): array {
        $builder = $this->table('mytable');
        $query = $builder->getWhere(['userName' => $userName, 'password' => $password]);
        $result = $query->getResult();
        return $result;
    }

    public function logOut(int $userId): void {
        
    }

    public function saveUser(User $user): User {
        return $user;
    }

}
