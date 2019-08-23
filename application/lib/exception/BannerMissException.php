<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/6/11
 * Time: 18:44
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求Banner不存在';
    public $errorCode = 400000;
}