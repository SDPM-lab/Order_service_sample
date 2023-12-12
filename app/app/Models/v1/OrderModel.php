<?php

namespace App\Models\v1;

use CodeIgniter\Model;

use App\Entities\v1\OrderEntity;

class OrderModel extends Model
{
    protected $DBGroup          = USE_DB_GROUP;
    protected $table            = 'order';
    protected $primaryKey       = 'o_key';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = OrderEntity::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['u_key','ext_price'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    /**
     * 新增訂單與訂單商品的 Transcation
     *
     * @param string $o_key
     * @param integer $u_key
     * @param array $productDetailArr
     * @return integer|null
     */
    public function createOrderTranscation(string $o_key, int $u_key, array $productDetailArr): ?int
    {
        return null;
    }

    /**
     * 刪除訂單與訂單商品 transcation
     *
     * @param integer $orderKey
     * @return bool
     */
    public function deleteOrderTranscation(string $orderKey):bool
    {
        return true;
    }
}
