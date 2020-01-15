<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/13
 * Time: 23:15
 */

namespace app\lib\exception;


use Exception;

class BaseException extends Exception
{
    //HTTP状态码
    public $code = 400;
    //错误具体信息，建议定义英文
    public $msg = '参数错误';
    //自定义错误信息
    public $errorCode = 10000;

    public function __construct($param = []){

        if (!is_array($param)){
            return $param;
//            throw new \think\Exception('参数必须是数组');
        }
        if (array_key_exists('code',$param)){
            $this->code = $param['code'];
        }
        if (array_key_exists('msg',$param)){
            $this->msg = $param['msg'];
        }
        if (array_key_exists('errorCode',$param)){
            $this->errorCode = $param['errorCode'];
        }
    }

}