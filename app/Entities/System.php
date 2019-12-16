<?php

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class System extends Model
{

    protected $table = 'system';
    protected $primaryKey = 'id';
    protected $fillable = ['web_url', 'web_main_title', 'web_sub_title', 'web_keyword', 'web_description', 'web_icp', 'web_statistics', ];
    public $timestamps = false;


}
