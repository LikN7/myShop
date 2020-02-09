<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/21
 * Time: 21:02
 */

namespace app\api\model;


class Product extends BaseModel
{
    //pivot是多对多的中间表
    protected $hidden = ['delete_time','main_img_id','pivot','from','category_id','create_time','update_time'];
    public function getMainImgUrlAttr($value,$data){
        return $this->preFixUrl($value,$data);
    }
    public static function getMostRecent($count){
        $products = self::limit($count)
            ->order('id','desc')
            ->select();
        return $products;
    }
    public static function getProductsByCategoryID($categoryID){
        $product = self::where('category_id','=',$categoryID)->select();
        return $product;
    }
}