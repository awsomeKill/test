<?php
/**
 * Created by PhpStorm.
 * User: xuwen
 * Date: 2019/1/15
 * Time: 16:01
 */

namespace app\business\model;


use think\Model;

class ProductMain extends Model
{
    protected $table;
    protected $resultSetType = 'collection';
//    protected function initialize() //调用父级初始化
//    {
//        parent::initialize();
//       //TODO:自定义的初始化
//        $this->table='wwj_product_main_1';
//    }

    public function __construct($company_id)
    {
        parent::_construct();
        $name = 'wwj_product_main_';
        $this->setTable($name);
        if (empty($table)) {
           $this->table = $name. substr($company_id, -1, 1);
        }
        // 当前类名
        $this->class = get_called_class();
//        $class=get_class();
//        if (!isset(static::$initialized[$class])) {
//            dump('aaa');die;
//            static::$initialized[$class] = true;
//            static::init();
//        }
        //$this->table = 'wwj_product_main_'. substr($company_id, -1, 1);
    }

    public function setName($name)
    {
        $this->getQuery()->name($name);
        return $this;
    }

    protected function scopeType($query)
    {
        $query->where('type','散称')->field('name');
    }
}