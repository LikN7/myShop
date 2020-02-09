<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/21
 * Time: 16:49
 */

namespace app\api\model;


use think\Model;
class BannerItem extends Model
{
    protected $hidden = ['delete_time','update_time','id','img_id'];
    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }
}