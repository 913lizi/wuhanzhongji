<?php

namespace App\Services;

use App\Entities\System;

use App\Entities\WebType;
use App\Http\Transformers\WebType\IndexTransformer;
use Illuminate\Http\Request;


class WebTypeServices
{
    public $model;

    public function __construct(){
        $this->model  = new WebType();

    }

    /**
     * @param Request $request
     * @return array
     * 获取首页的数据
     */

    public function getIndex(Request $request){
        $page   = $request->page;
        $limit  = $request->limit;
        $offset     = ($page - 1) * $limit;
        $model = $this->model;
        $count = $model->count();
        $result = $model->offset($offset)->limit($limit)->orderBy('web_type','DESC')->get();
        return [
            'code'  => 0,
            'msg'   => '',
            'count' => $count,
            'data'  => (new IndexTransformer())->transform($result),
        ];

    }

    /**
     * @param Request $request
     * @return mixed
     * 创建标签操作
     */
    public function store(Request $request){
        return $this->model->create([
            'name'      => $request->name,
            'web_type'      => $request->web_type,
            'sort'      => $request->sort,
            'addtime'   =>time()
        ]);
    }

    /**
     * @param $id
     * @return mixed
     * 获取被修改数据
     */
    public function edit($id){
        return $this->model->find($id);
    }

    /**
     * @param Request $request
     * @return mixed
     * 修改网站标签的操作
     */
    public function update(Request $request){

        return $this->model->where('id',$request->id)->update([
            'name'      => $request->name,
            'web_type'      => $request->web_type,
            'sort'      => $request->sort,
        ]);
    }
    public function del($id){
        return $this->model->where('id',$id)->delete();
    }

}
