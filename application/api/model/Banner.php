<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/13
 * Time: 22:29
 */

namespace app\api\model;
use think\Db;

class Banner
{
    public static function getBannerByID($id){
        //TODO: 根据ID获取BANNER
        $res =  DB::query('select *from banner_item where banner_id=?',[$id]);
        return $res;
    }
}