<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/8/23
 * Time: 18:08
 */

namespace app\lib\exception;


class ParameterException  extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 100000;
}