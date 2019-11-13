<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/11/13
 * Time: 17:57
 */

namespace app\api\model;


class Category extends BaseModel
{
    //设置字段隐藏
    protected $hidden = ['update_time', 'delete_time'];

    public function img() {
        return $this->belongsTo('image', 'topic_img_id', 'id');
    }

}