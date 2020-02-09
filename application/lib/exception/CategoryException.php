<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/26
 * Time: 17:17
 */

namespace app\lib\exception;

class CategoryException extends BaseException
{
    protected $code = 404;
    protected $msg = '指定目录不存在，请检查ID';
    protected $errorCode = 50000;
}