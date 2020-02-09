<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/12
 * Time: 23:28
 */

namespace app\api\validate;


use app\lib\exception\ParamException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        //1.获取HTTP参数 2.对参数做校验
        $request = Request::instance();
        $param = $request->param();
        $result = $this->batch()->check($param);
        if (!$result){
            $e = new ParamException([
                'msg' => $this->error,
            ]);
//            $e->msg = $this->error;
//            $e->errorCode = 10002;
            throw $e;
//            $error = $this->error;
//            throw new Exception($error);
        }else{
            return true;
        }
    }
    protected $message = [
        'ids' => 'ids必须是以逗号分隔的正整数',
    ];
    protected function isPositiveInt($value,$rule = '',$data = '',$field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0 )>0){
            return true;
        }else{
            return false;
        }
    }
    protected function isNotEmpty($value,$rule = '',$data = '',$field = '')
    {
        if (empty($value)){
            return false;
        }else{
            return true;
        }
    }
}
