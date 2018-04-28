<?php

namespace app\home\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function getIndex()
    {
        /*
         * HR 顶头: 消息 下拉菜单链接换成指向HR控制器
         * 牛人 顶头: 消息 简历 下拉菜单链接指向雇员控制器
         * */
        
        $list = [
            'account' => []
        ];
        session('userName');
        var_dump($_SESSION);
        return $this->fetch('/index/index');
    }
    
    function getsearch(){
        return $this->fetch('/index/test');
    }
    
    
    function gettest()
    {
        $ct = \data\Category::getCATEGORY();
//        return $this->fetch('/index/test');
//    $this->setCategory($ct,'0');
        
        /*从数据库获取多维分类目录*/
        $data = Db::table('category')->select();
    echo '<pre>';
    print_r($this->getCategory($data));
    }
    
    function setCategory($data, $pid, $path = '')
    {
        foreach ($data as $item) {
            $field = [
                'name' => $item['name'],
                'pid' => $pid,
                'path' => trim($path . ',' . $pid, ',')
            ];
            $newPid = Db::table('category')->insertGetId($field);
            if (count($item['children']) > 0) {
                $this->category($item['children'], $newPid, $field['path']);
            }
        }
    }
    
    function getCategory($data, $pid=0)
    {
        $it = [];
        foreach ($data as $item) {
            if ($item['pid'] == $pid) {
                $item['children'] = $this->getCategory($data, $item['id']);
                $it[] = $item;
            }
        }
        return $it;
    }
}
