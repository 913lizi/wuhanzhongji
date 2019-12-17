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

    /**
     * @param Request $request
     * @return bool
     * 创建banner
     */
    public function store(Request $request){

        $this->model->create([
            'title' => $request->title,
            'type'  => $request->type,
            'sort'  => $request->sort,
            'img'   => $request->banner_img,
            'url'  => $request->url,

        ]);
        return true;
    }

    /**'
     * @param $id
     * @return bool
     * @throws \Exception
     * 删除banner
     */
    public function del($id)
    {
        $this->model->delete($id);
        return true;
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     * 获取被修改的数据
     */
    public function edit($id)
    {
        $data = $this->model->with('webtype')->find($id);
        return $data;
    }

    public function bannerUpdate(Request $request)
    {
        $this->model->where('id',$request->id)->update([
            'title'=>$request->title,
            'type'=>$request->type,
            'sort'=>$request->sort,
            'url'=>$request->url,
            'img'=>$request->banner_img,
        ]);
        return true;

    }




}
