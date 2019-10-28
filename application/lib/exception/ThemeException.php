<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/10/22
 * Time: 16:21
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '请求的专题详情不存在';
    public $errorCode = 400000;
}