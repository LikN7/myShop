<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/12
 * Time: 22:59
 */
namespace app\api\validate;
class IDMustbeInt extends BaseValidate
{
    protected $rule =[
        'id'=>'require|isPositiveInt',
    ];
    protected $message =[
      'id' => 'id必须是正整数',
    ];
}