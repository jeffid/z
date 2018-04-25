<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/18
 * Time: 20:45
 */

namespace app\home\controller;
use think\Controller;

class Job extends Controller
{
    function getIndex(){
        return $this->fetch('/login');
    }
}