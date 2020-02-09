<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/13
 * Time: 22:29
 */

namespace app\api\model;
use think\Db;
use think\Model;

class Banner extends Model
{
    protected $hidden = ['delete_time','update_time'];
    public function items(){
        return  $this->hasMany('BannerItem','banner_id','id');
    }

    public static function getBannerByID($id){
        //TODO: 根据ID获取BANNER
//        $res =  DB::query('select *from banner_item where banner_id=?',[$id]);
//        $res = Db::table('banner_item')->where('banner_id','=',$id)->find();
//        $res = Db::table('banner_item')->where(function ($query) use($id){
//            $query -> where('banner_id',$id);
//        })->select();
//        return $res;
        $banner = self::with(['items','items.img'])->find($id);
        return $banner;
    }
}