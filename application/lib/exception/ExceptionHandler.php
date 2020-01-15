<?php
namespace app\lib\exception;
use Exception;
use think\exception\Handle;
use think\Request;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/13
 * Time: 23:13
 */
class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    //需要返回客户端当前请求的URL
    public function render(Exception $ex)
    {
        //处理两种不同的异常
        //1:区分异常类别 BaseException为用户行为异常
        if ($ex instanceof BaseException){
            //如果是自定义异常
            $this->code = $ex->code;
            $this->msg = $ex->msg;
            $this->errorCode = $ex->errorCode;
        }else{
            $this->code = 500;
            $this->msg = '服务器内部错误';
            $this->errorCode = 999;
    }
    $request = Request::instance();
    $result = [
        'msg' => $this->msg,
        'error_code' => $this->errorCode,
        'request_url' => $request->url(),
    ];
        return json($result,$this->code);
    }
}