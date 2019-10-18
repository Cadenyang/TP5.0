<?php

namespace app\api\model;

use think\Model;

class Image extends BaseModel
{
    //设置字段隐藏
    protected $hidden = ['id', 'from', 'update_time', 'delete_time'];

    public function getUrlAttr($value, $data) {
        return $this->prefixImgUrl($value, $data);
    }
}
