<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/26
 * Time: 22:30
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];
    protected  $message = [
        'code' =>'code不能为空',
    ];
}