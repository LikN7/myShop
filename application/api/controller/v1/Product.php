<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/26
 * Time: 16:19
 */

namespace app\api\controller\v1;
use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\api\validate\IDMustbeInt;
use app\lib\exception\ProductException;
class Product
{
    public function getRecent($count = 15){
        (new Count())->gocheck();
        $res = ProductModel::getMostRecent($count);
        $collection = collection($res);
        $res = $collection->hidden(['summary']);
        if (!$res){
             throw  new ProductException();
        }
        return json($res);
    }
    public function getAllInCategory($id){
        (new IDMustbeInt())->goCheck();
        $res = ProductModel::getProductsByCategoryID($id); $collection = collection($res);
        $res = $collection->hidden(['summary']);
        if (!$res){
            throw new ProductException();
        }
        return json($res);

    }
}