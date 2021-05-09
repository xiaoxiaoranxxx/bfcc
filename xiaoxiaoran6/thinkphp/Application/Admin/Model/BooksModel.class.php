<?php

namespace Admin\Model;

use Think\Model;

class BooksModel extends Model
{
    protected $patchValidate = true;  //开启批量验证
    protected $_validate   = array(
        array('name', 'require', '不能空..'),
        array('name', '不能重复', 0, 'unique'),
        array('sort', 'number', '必须是数字'),
        array('sort', 'is_numeric', '必须是数字', 0, 'function'),
    );  //自动验证
    // $model=D('Books');
    // $data=$model->create();
    // $model->getError();

    protected $_map      = array(
        'abc' => 'name',
        'sort' => 'asdw',
        'ewe' => 'password'
    );  //字段映射

    protected $trueTableName = 'xiao';  //没有前缀
}
