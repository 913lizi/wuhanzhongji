<?php

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class WebType extends Model
{
    const PAYMENT_PENDING  = 1;
    const RECEIVED_PENDING = 2;
    const RECEIVED         = 3;
    const COMPLETE         = 4;
    const CUSTOMER_CANCEL  = 5;
    const QUEUER_CANCEL    = 6;
    const QUEUER_EXPIRED   = 7;
    public static $statusMap = [
        self::PAYMENT_PENDING  => "Banner",
        self::RECEIVED_PENDING => "产品展示",
        self::RECEIVED         => "产品原料",
        self::COMPLETE         => "优秀案例",
        self::CUSTOMER_CANCEL  => "荣誉资质",
        self::QUEUER_CANCEL    => "联系我们",
        self::QUEUER_EXPIRED   => "公司简介",
    ];

    protected $table = 'web_type';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'web_type', 'sort', 'addtime'];
    public $timestamps = false;


}
