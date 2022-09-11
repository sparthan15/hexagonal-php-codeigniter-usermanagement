<?php

namespace Modules\UserManagement\Models;

class ListUsersRepository extends \CodeIgniter\Model {

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

    public function findAllUsersByCompanyId(int $companyId): array {
        $builder = $this->table($this->table);
        $query = $builder->getWhere(['company_id' => $companyId]);
        $result = $query->getResult();
        return $result;
    }
    
    public function findAllUsersById(int $userId): array {
        $builder = $this->table($this->table);
        $query = $builder->getWhere(['user_id' => $userId]);
        $result = $query->getResult();
        return $result;
    }

}
