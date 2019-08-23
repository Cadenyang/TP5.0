<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/6/11
 * Time: 18:40
 */

namespace app\lib\exception;

use exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {
        if($e instanceof BaseException) {
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else{
            if(config('app_debug')) {
                return parent::render($e);
            }else{
                $this->code = 500;
                $this->msg = '服务器错误';
                $this->errorCode = 999;
                $this->recordErrorLog($e);
            }
        }
        $result = array(
            'msg' => $this->msg,
            'code' => $this->errorCode,
            'url' => Request::instance()->url()
        );
        return json($result, $this->code);
    }

    private function recordErrorLog(Exception $e) {
        Log::init([
            'type' => 'file',
            'path' => LOG_PATH,
            'level' => ['error']
        ]);
        Log::record($e->getMessage(), 'error');
    }
}