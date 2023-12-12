<?php

namespace App\Controllers\v1;

use CodeIgniter\API\ResponseTrait;

use App\Controllers\v1\BaseController;
use App\Models\v1\BusinessLogic\OrderBusinessLogic;
use App\Models\v1\BusinessLogic\OrderProductBusinessLogic;
use App\Models\v1\OrderModel;
use App\Entities\v1\OrderEntity;
use App\Services\User;

class OrderController extends BaseController
{
    use ResponseTrait;

    private $u_key;

    function __construct()
    {
        $this->u_key = User::getUserKey();
    }

    /**
     * [GET] /api/v1/order
     * 取得所有的訂單清單
     *
     */
    public function index()
    {

    }

    /**
     * [GET] /api/v1/order/{orderKey}
     * 取得單一訂單資訊
     *
     */
    public function show($orderKey = null)
    {

    }

    /**
     * [POST] /api/v1/order 
     * 產生訂單
     *
     */
    public function create()
    {

    }

    /**
     * [DELETE] /api/v1/order/order/{orderKey}
     *
     * @param  string $orderKey
     */
    public function delete(string $orderKey = null)
    {
        
    }
}
