<?php
namespace app\index\controller;

use app\user\controller\User;

use test\My;
use think\Config;
class Index
{
    public function index()
    {
        echo Config::get('xw');
        dump(empty(Config::has('zyl')));
//        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
//        return xml(['data'=>$data,'code'=>1,'message'=>'操作完成']);
    }
}
