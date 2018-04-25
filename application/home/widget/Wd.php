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
    function header(){
        return $this->fetch('user:1');
    }
    function footer(){
        return $this->fetch('user:1');
    }
    function carousel(){
        return $this->fetch('user:1');
    }
    function activity(){
        return $this->fetch('user:1');
    }
    function ad(){
        return $this->fetch('user:1');
    }
    function links(){
        return $this->fetch('user:1');
    }
}