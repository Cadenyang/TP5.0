<?php
/**
 * Created by PhpStorm.
 * User: Caden
 * Date: 2019/11/13
 * Time: 16:03
 */

namespace app\api\controller\v1;

use  app\api\model\Product as ProductModel;
use app\api\validate\Count;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ProductException;

class Product
{
    public function getRecent($count = 15) {
        (new Count())->goCheck();
        $products = ProductModel::getMostRecent($count);
        if($products->isEmpty()) {
            throw new ProductException();
        }
        // 暂时隐藏字段
        $products = $products->hidden(['summary']);
        return $products;
    }

    // 商品分类数据
    public function getAllInCategory($id) {
        (new IDMustBePositiveInt())->goCheck();
        $products = ProductModel::getProductByCategory($id);
        if ($products->isEmpty()) {
            throw new ProductException();
        }
        $products = $products->hidden(['summary']);
        return $products;
    }
}