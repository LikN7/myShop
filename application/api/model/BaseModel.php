<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/21
 * Time: 18:36
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    //读取器
    protected function preFixUrl($value,$data){ //$value 是图片路径
        $finalUrl = $value;
        if ($data['from'] == 1){
            $finalUrl =  config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }
}