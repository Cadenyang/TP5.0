<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/6/6
 * Time: 0:48
 */
namespace app\api\validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];
}
