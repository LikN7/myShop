<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/21
 * Time: 17:13
 */

namespace app\api\model;


use think\Model;

class Image extends BaseModel
{
    protected $hidden = ['delete_time','update_time','from','id'];
    public function getUrlAttr($value,$data){
        return $this->preFixUrl($value,$data);
    }
}