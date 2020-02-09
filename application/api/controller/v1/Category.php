<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/26
 * Time: 17:09
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
class Category
{
    public function getAllCategory(){
        $res = CategoryModel::all([],'img');
        if (!$res){
            throw new CategoryException();
        }
        return json($res);
    }
}