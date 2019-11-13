<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/11/13
 * Time: 16:05
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15'
    ];
}