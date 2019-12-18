<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\WebTypeServices;
use Illuminate\Http\Request;

class WebTypeController extends Controller
{
    protected $service;
    public function __construct(){
        $this->service  = new WebTypeServices();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     * 标签 的列表和读取数据
     */
    public function  index(Request $request){

        if ($request->wantsJson()){
            return $this->service->getIndex($request);

        }
        return view('admin.WebType.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 添加标签
     */
    public function create(){
        return view('admin.WebType.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * 网站类型添加操作
     */

    public function store(Request $request){
        $this->service->store($request);
        return redirect('admin/web/webType');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 修改需要修改的数据
     */

    public function edit($id){
        $result =$this->service->edit($id);
        return view('admin.WebType.update',compact('result'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * 执行修改操作
     */
    public function update(Request $request)
    {
        $this->service->update($request);
        return redirect('admin/web/webType');

    }
    public function del($id){
        $this->service->del($id);
        return redirect('admin/web/webType');

    }
}
