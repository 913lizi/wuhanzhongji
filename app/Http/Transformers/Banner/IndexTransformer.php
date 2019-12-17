<?php
/**
 * Created by PhpStorm.
 * User: wangxiao
 * Date: 2019/3/29
 * Time: 14:57
 */

namespace App\Http\Transformers\Banner;


use Illuminate\Support\Collection;

class IndexTransformer
{
    public function transform(Collection $collection)
    {
        //return $collection->toArray();
        $data = [];
        foreach ($collection as $key => $item) {
            $data[$key]['id']    = $item->id;
            $data[$key]['title'] = $item->title;
            $data[$key]['type']  =isset($item->webtype) ?  $item->webtype->name :"";
            $data[$key]['view']  = $item->view;
            $data[$key]['sort']  = $item->sort;
            $data[$key]['img']   = $item->img;
            $data[$key]['url']   = $item->url;
        }
        return $data;
    }
}
