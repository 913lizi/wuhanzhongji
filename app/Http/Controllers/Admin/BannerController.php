<?php

namespace App\Http\Controllers\Admin;

use App\Entities\WebType;
use App\Http\Controllers\Controller;
use App\Http\Middleware\EncryptCookies;
use App\Services\BannerServices;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $service;
    public function __construct(){
        $this->service  = new BannerServices();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     * 显示banner 的列表和读取数据
     */
    public function  index(Request $request){

        if ($request->wantsJson()){
            return $this->service->getIndex($request);

        }

        return view('admin.Banner.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * banner 上传页面
     */

    public function create()
    {
        $result= WebType::where('web_type',1)->get();
        return view('admin.Banner.create',compact('result'));

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * 添加操作
     */
    public function store(Request $request)
    {
        $this->service->store($request);
        return redirect('admin/web/banner');

    }
    public function del($id)
    {
        $this->service->del($id);
        return redirect('admin/web/banner');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 获取被修改的数据
     */
    public function edit($id)
    {
        $res= $this->service->edit($id);
        $result= WebType::where('web_type',1)->get();
        return view('admin.Banner.update',compact('res','result'));
    }
    public function update(Request $request)
    {
        $this->service->bannerUpdate($request);
        return redirect('admin/web/banner');
    }


    /**
     * @param Request $request
     * @return array
     * banner 文件上传
     */
    public function upload(Request $request){

        return [
            'code'=>200,
            'img'=>saveImageResource($request->file('file'))
        ];


    }

}
