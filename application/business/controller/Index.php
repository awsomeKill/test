<?php
/**
 * Created by PhpStorm.
 * User: xuwen
 * Date: 2019/1/11
 * Time: 11:27
 */

namespace app\business\controller;


use app\business\model\ProductMain;

class Index
{

    public function index(){
       $product=new ProductMain(1);
       dump($product);die;
       $data=$product->scope('散称')->select();
       dump($data);die;
    }
   public function test($id=0){
        dump($id);die;
   }
}