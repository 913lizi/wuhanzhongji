<?php

namespace App\Services;
use App\Entities\Banner;
use App\Http\Middleware\EncryptCookies;
use App\Http\Transformers\Banner\IndexTransformer;
use Illuminate\Http\Request;
class BannerServices
{
    public $model;

    public function __construct(){
        $this->model  = new Banner();

    }
    public function getIndex($request)
    {
        $page   = $request->page;
        $limit  = $request->limit;
        $offset     = ($page - 1) * $limit;
        $model = $this->model->with(['webtype']);
        $count = $model->count();
        $result = $model->offset($offset)->limit($limit)->orderBy('id','DESC')->get();
        return [
            'code'  => 0,
            'msg'   => '',
            'count' => $count,
            'data'  => (new IndexTransformer())->transform($result),
        ];

    }
    public function store(Request $request){
//        echo "<pre>";
//        print_r($request->toArray());
//        die();

        $this->model->create([
            'title' => $request->title,
            'type'  => $request->type,
            'sort'  => $request->sort,
            'img'   => $request->banner_img,
            'url'  => $request->url,

        ]);
        return true;
    }




}
