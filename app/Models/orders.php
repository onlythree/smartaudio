<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\customers;

class orders extends Model
{
    protected $table = 'orders';
    const BAOKIM_api_endpoint = 'https://sandbox-api.baokim.vn/payment/';
    const API_KEY = "a18ff78e7a9e44f38de372e093d87ca1";
    const API_SECRET = "9623ac03057e433f95d86cf4f3bef5cc";
    const Merchant_id = "40002";

    public function customers()
    {
        return $this->hasMany(customers::class,'customer_id');
    }
}
