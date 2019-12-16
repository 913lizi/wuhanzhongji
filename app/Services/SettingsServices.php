<?php

namespace App\Services;

use App\Entities\System;

use Illuminate\Http\Request;


class SettingsServices
{
    public $model;

    public function __construct(){
        $this->model  = new System();

    }

    /**
     * @return mixed
     * 获取需要被修改的数据
     */
    public function getIndex()
    {

        return $this->model->find(1);
    }

    /**
     * @return mixed
     * 修改网站信息
     */
    public function createWeb(Request $request)
    {

        return $this->model->where('id',$request->id)->update([
            'web_url'           => $request->web_url,
            'web_main_title'    => $request->web_main_title,
            'web_sub_title'     => $request->web_sub_title,
            'web_keyword'       => $request->web_keyword,
            'web_description'   => $request->web_description,
            'web_icp'           => $request->web_icp,
            'web_statistics'    => $request->web_statistics
        ]);

    }






}
