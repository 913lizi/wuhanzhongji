<?php
/**
 * Created by PhpStorm.
 * User: wangxiao
 * Date: 2019/3/29
 * Time: 14:57
 */

namespace App\Http\Transformers\WebType;


use Illuminate\Support\Collection;

class IndexTransformer
{
    public function transform(Collection $collection)
    {
        //return $collection->toArray();
        $data = [];
        foreach ($collection as $key => $item) {
           $data[$key]['id'] = $item->id;
           $data[$key]['name'] = $item->name;
           $data[$key]['web_type'] = $item::$statusMap[$item->web_type] ;
           $data[$key]['sort'] = $item->sort;
        }
        return $data;
    }
}
