<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/6/11
 * Time: 18:39
 */

namespace app\lib\exception;


use think\Exception;
use Throwable;

class BaseException extends Exception
{
    public $code = 400;   // HTTP 状态码
    public $msg = 'Params error';    // 错误具体信息
    public $errorCode = 10000;    // 自定义错误码

    public function __construct($params = array()) {
        if(!is_array($params)) throw new Exception('参数必须是数组');
        if(array_key_exists('code', $params)) $this->code = $params['code'];
        if(array_key_exists('msg', $params)) $this->msg = $params['msg'];
        if(array_key_exists('errorCode', $params)) $this->errorCode = $params['errorCode'];
    }

}