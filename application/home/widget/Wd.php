<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/19
 * Time: 2:14
 */
namespace app\admin\widget;
use think\Controller;

class Wd extends Controller{
    function links(){
        return $this->fetch('user:1');
    }
}