<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/29
 * Time: 23:38
 */

namespace app\home\controller;

use app\home\controller\Permit0;
use think\Db;

class Personal extends Permit0
{
    function getDeliver(){
        return $this->fetch('/personal/deliver');
    }
    function getInterview(){
        return $this->fetch('/personal/interview');
    }
    function getInterest(){
        return $this->fetch('/personal/interest');
    }
    function postInterestRemove(){
    
    }
    function replaceRecord($jid,$status){
    
    }
}