<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/6/6
 * Time: 0:44
 */
namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use \app\api\model\Banner as BannerModel;
use \app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    /**
     * 首页Banner图
     */
    public function getBanner($id) {
        (new IDMustBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerById($id);
        if($banner->isEmpty()){
            throw new BannerMissException();
        }
        return $banner;
    }
}