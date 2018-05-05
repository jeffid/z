<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/19
 * Time: 2:14
 */
namespace app\home\widget;
use think\Controller;
use think\Db;

class Wd extends Controller{

    function links(){
        $row=Db::table('links')->limit(20)->select();
    
        return $this->fetch('widget:links',['row'=>$row]);
    }
}