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
}