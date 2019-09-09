<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/6/11
 * Time: 11:24
 */

namespace app\api\model;

use think\Db;
use think\Exception;

class Banner
{
    public static function getBannerById($id) {
        // return  Db::query('select * from banner_item where banner_id =?', [$id]);   // 原生的SQL语句
        // 闭包
//        $result = Db::table('banner_item')
//            ->where(function ($query) use ($id){
//                $query->where('banner_id', $id);
//            })
//            ->select();
        return Db::table('banner_item')->where('banner_id', $id)->select();

    }
}