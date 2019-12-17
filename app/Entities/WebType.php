<?php

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class WebType extends Model
{

    protected $table = 'web_type';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'tyep', 'sort', 'addtime'];
    public $timestamps = false;


}
