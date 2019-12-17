<?php
if (!function_exists('jsonReturn')) {

    /**
     * api 接口返回格式规范
     * @param string $status
     * @param array $data
     * @param int $code
     * @param string $msg
     * @return \Illuminate\Http\JsonResponse
     */
    function jsonReturn($data = [],$code = 0 ,$msg = '',$status = '')
    {
        $code   = empty($code)      ? 200       : $code;
        $status = empty($status)    ? 'success' : $status;
        $msg    = empty($msg)       ? '请求成功'  : $msg;

        switch ($code) {
            case 301 :
            case 400 :
            case 403 :
            case 404 :
            case 500 :
                $status = 'error';
                break;
        }
        //默认200
        if ($code == 200){
            return response()->json(compact('status','data','code','msg'));
        }
        return response()->json(compact('status','code','msg'));
    }
}

if (!function_exists('generateFilePath')) {

    /**
     * 生成统一文件存储路径
     * @return string
     */
    function generateFilePath()
    {
        return 'public/'.date('Ym').'/'.date('d').'/';
    }
}

if (!function_exists('generateFileUrl')) {

    /**
     * 生成文件url
     * @param string $filePath storage相对路径
     * @return string   完整url（需要配置APP_URL，切记，所有想被公开访问的文件都应该放在 storage/app/public 目录下。此外，你应该在public/storage [创建符号链接 ] (#the-public-disk) 来指向 storage/app/public 文件夹。）
     */
    function generateFileUrl($filePath)
    {
        return env('API_PIC_URL').Storage::url($filePath);
    }
}

if (!function_exists('recordOrderLog')){
    /**
     * 记录订单日志
     * @param $orderId
     * @param $msg
     * @param $orderState
     * @param string $role
     * @param string $user
     * @param int $logTime
     * @return mixed
     */
    function recordOrderLog($orderId,$msg,$orderState,$role = '用户',$user = '用户',$logTime = 0){
        $log['order_id']       = $orderId;
        $log['log_msg']        = $msg;
        $log['log_role']       = $role;
        $log['log_user']       = $user;
        $log['log_orderstate'] = $orderState;
        $log['log_time']       = empty($logTime) ? time() : $logTime;
        $repository = app(\App\Repositories\Eloquent\ShopOrderLogRepository::class);
        return $repository->create($log);
    }
}

if (!function_exists('recordOperationLog')){

    /**
     * 操作日志
     * @param $logAction
     * @return mixed
     */

    function recordOperationLog($logAction){
        $operationLog = app(App\Repositories\Eloquent\OperationLogRepositoryEloquent::class);
        $admins = auth()->user()->toArray();
        $data['log_name']= $admins['name'];
        $data['log_time']= time();
        $data['log_ip']= $_SERVER["REMOTE_ADDR"];
        $data['log_action']= $logAction;
        $operationLog->create($data);
    }
}

if (!function_exists('creditLog')){
    /**
     * 额度日志
     * @param        $type
     * @param        $storeID
     * @param        $storeName
     * @param        $pre
     * @param        $next
     * @param        $value
     * @param string $msg
     *
     * @return bool
     */
    function creditLog($type, $storeID, $storeName='', $pre, $next, $value, $msg = '')
    {
        $haystack = [
            'credit_total',
            'credit_coupon_assigned',
            'credit_coupon_sold',
            'credit_coupon_consumed',
        ];
        if ( ! in_array($type, $haystack)) {
            return false;
        }
        if (empty($storeName)){
            $storeRep = app(\App\Repositories\Eloquent\StoreRepositoryEloquent::class);
            $store = $storeRep->find($storeID,['store_name'])->toArray();
            $storeName = $store['store_name'];
        }
        $tableName = 'shop_store_'.$type;
        $timeNow   = time();

        $creditData['c_sn']                = date('ymdhis', $timeNow).mt_rand(100, 999);
        $creditData['store_id']            = $storeID;
        $creditData['store_name']          = $storeName;
        $creditData['credit_change_pre']   = $pre;
        $creditData['credit_change_next']  = $next;
        $creditData['credit_change_value'] = $value;
        $creditData['credit_msg']          = $msg;
        $creditData['add_time']            = $timeNow;

        return \DB::table($tableName)->insert($creditData);
    }
}

if (!function_exists('ApproveLog')){
    /**
     * 后台attendance approve日志
     * @param $ID
     * @param $operatorName
     */
    function ApproveLog($ID,$operatorName){
        $logTime = date('Y-m-d H:i:s',time());
        file_put_contents(
            storage_path('logs/approve.log'),
            "Time: {$logTime} , ID: {$ID} , Operator: {$operatorName}".PHP_EOL,
            FILE_APPEND
        );
    }
}

if (!function_exists('saveImageResource')) {
    /**
     * 保存资源图片
     * @param $image
     *
     * @return string
     */
    function saveImageResource(\Illuminate\Http\UploadedFile $image)
    {
        //获取宽高
        list($width, $height) = getimagesize($image);

        //获取hash
        $hash = $image->hashName();

        //修改后的全名
        $joinString          = '-'.$width.'x'.$height;
        $position            = strpos($hash, '.');
        $fileNameWithWidthHeight = substr_replace($hash, $joinString, $position, 0);

        $path = $image->storeAs(substr(generateFilePath(), 0, -1),$fileNameWithWidthHeight);
        return generateFileUrl($path);
    }
}
