<?php


namespace App\Http\Repositories\Impl;


use App\Http\Repositories\Eloquent\ProductEloquent;
use App\Http\Repositories\ProductInterface;
use App\Product;

class ProductImpl extends  ProductEloquent implements ProductInterface
{
    public function  getModel(){
        $model = Product::class;
        return $model;
    }

}
