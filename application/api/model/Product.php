<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/10/18
 * Time: 18:31
 */

namespace app\api\model;

use think\Model;

class Product extends BaseModel
{
    protected $hidden = ['create_time', 'update_time', 'delete_time', 'from' , 'pivot', 'category_id'];
}