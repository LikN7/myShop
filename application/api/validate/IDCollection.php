<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/21
 * Time: 21:17
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs',
    ];

    public function checkIDs($value){
        $value = explode(',',$value);
        if (empty($value)){
            return false;
        }
        foreach($value as $id){
            if (!$this->isPositiveInt($id)){
                return false;
            }
            return true;
        }
    }
}