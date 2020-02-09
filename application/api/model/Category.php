<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/26
 * Time: 17:09
 */

namespace app\api\model;

class Category extends BaseModel
{
    protected $hidden = ['delete_time'];
    public function img(){
        return $this->belongsTo('Image','topic_img_id','id');
    }
}