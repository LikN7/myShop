<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/12
 * Time: 22:34
 */
class TestValidate extends \think\Validate
{
    protected $rule =[
        'name'=>'require|max:10',
        'email'=>'email',
    ];
}