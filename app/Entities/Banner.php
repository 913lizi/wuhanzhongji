<?php

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{

    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'type', 'view', 'sort', 'img', 'addtime', 'url', ];
    public $timestamps = false;
    public function webtype()
    {
        return $this->hasOne(WebType::class,'id','type');

     }



}
