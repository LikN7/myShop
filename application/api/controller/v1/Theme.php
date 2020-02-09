<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/21
 * Time: 21:00
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\validate\IDMustbeInt;
use think\Controller;
use app\lib\exception\ThemeException;
use app\api\model\Theme as ThemeModel;

class Theme extends Controller
{
    /**
     * @url /theme?ids=di1,id2,id3
     * @return 一组theme模型
    */
    public function getSimpleList($ids = '')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',',$ids);
        $result = ThemeModel::with('topicImg,headImg')
            ->select($ids);
        if(!$result){
            throw new ThemeException();
        }
        return json_encode($result);
    }
    public function getCompleOne($id){
        (new IDMustbeInt())->goCheck();
        $result = ThemeModel::getThemeProduct($id);
        if (!$result){
            throw new ThemeException();
        }
        return $result;
    }
}