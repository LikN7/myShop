<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/26
 * Time: 16:21
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInt|between:1,15'
    ];
}