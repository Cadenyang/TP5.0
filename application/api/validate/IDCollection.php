<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/10/22
 * Time: 15:23
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];
    protected $message = [
        'ids' => 'ids参数必须是以逗号分隔的多个正整数'
    ];

    protected function checkIDs($value) {
        $values = explode(',', $value);
        if(empty($values)) return false;
        foreach ($values as $id) {
            if(!$this->isPositiveInteger($id)){
                return false;
            }
        }
        return true;
    }

}