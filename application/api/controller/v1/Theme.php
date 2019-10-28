<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/10/18
 * Time: 18:30
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use \app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ThemeException;

class Theme
{
    /**
     * @url /themes?ids=id1,id2,id3
     */
    public function getSimpleList($ids = '') {
        (new IDCollection())->goCheck();  // 验证器
        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg,headImg')->select($ids);
        if(!$result) {
            throw new ThemeException();
        }
        return $result;
    }

    /**
     * Theme 详情
     */
    public function getComplexOne($id) {
        (new IDMustBePositiveInt())->goCheck();
        $result = ThemeModel::getThemeWithProducts($id);
        if(!$result){
            throw new ThemeException();
        }
        return $result;
    }
}