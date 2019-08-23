<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/6/6
 * Time: 0:50
 */

namespace app\api\validate;

use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

/**
 * Class BaseValidate
 * 验证类的基类
 */
class BaseValidate extends Validate
{
    /**
     * 检测所有客户端发来的参数是否符合验证类规则
     * 基类定义了很多自定义验证方法
     * 这些自定义验证方法其实，也可以直接调用
     * @throws ParameterException
     * @return true
     */
    public function goCheck()
    {
        $params = Request::instance()->param();
        $result = $this->batch()->check($params); // 批量验证处理
        if( !$result ){
            $e = new ParameterException([
                'msg' => $this->error
            ]);
//            $e->msg = $this->error;
            throw $e;
        }else{
            return true;
        }

    }
}