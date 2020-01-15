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
    protected function isPositiveInt($value,$rule = '',$data = '',$field = '')
    {
      if (is_numeric($value) && is_int($value + 0) && ($value + 0 )>0){
          return true;
      }else{
        return $field.'必须是正整数';
      }
    }
}