<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/10/18
 * Time: 18:32
 */

namespace app\api\model;

use think\Model;

class Theme extends BaseModel
{
    // 隐藏不需要的字段
    protected $hidden = ['update_time', 'delete_time'];

    public function topicImg() {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function headImg() {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }

    public function products() {
        return $this->belongsToMany('Product', 'theme_product', 'product_id', 'theme_id');
    }

    public static function getThemeWithProducts($id) {
        $theme = self::with('Products,topicImg,headImg')->find($id);
        return $theme;
    }
}