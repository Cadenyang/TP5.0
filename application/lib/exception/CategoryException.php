<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/11/13
 * Time: 18:02
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 400;   // HTTP 状态码
    public $msg = '指定类型目录不存在';    // 错误具体信息
    public $errorCode = 50000;    // 自定义错误码
}