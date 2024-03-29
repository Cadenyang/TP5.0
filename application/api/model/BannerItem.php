<?php

namespace app\api\model;

use think\Model;

class BannerItem extends BaseModel
{
    //设置字段隐藏
    protected $hidden = ['id', 'img_id', 'banner_id', 'update_time', 'delete_time'];
    public function img() {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}
