<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/11/13
 * Time: 16:22
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code = 400;   // HTTP 状态码
    public $msg = '指定商品不存在';    // 错误具体信息
    public $errorCode = 20000;    // 自定义错误码
}