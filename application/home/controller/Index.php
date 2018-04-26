<?php
namespace app\home\controller;
use think\Controller;

class Index extends Controller
{
    public function getIndex()
    {
        return $this->fetch('/index/index');
    }
}
