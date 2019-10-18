<?php

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{
    // url 读取器
    protected function prefixImgUrl($value, $data) {
        return $data['from'] == 1 ? config('setting.img_prefix'). '/images' . $value : $value;
    }
}
