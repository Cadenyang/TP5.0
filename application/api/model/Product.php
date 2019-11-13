<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/10/18
 * Time: 18:31
 */

namespace app\api\model;

use think\Model;

class Product extends BaseModel
{
    protected $hidden = ['create_time', 'update_time', 'delete_time', 'from' , 'pivot', 'category_id'];

    public function getMainImgUrlAttr($value, $data) {
        return $this->prefixImgUrl($value, $data);
    }

    public static function getMostRecent($count) {
        $products = self::limit($count)->order('create_time desc')->select();
        return $products;
    }

    public static function getProductByCategory($id) {
        $products = self::where('category_id', '=', $id)->select();
        return $products;
    }
}