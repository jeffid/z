<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/18
 * Time: 20:45
 */


namespace app\home\controller;
use think\Controller;
use think\Db;
class Companyjob extends Controller
{
    function getIndex()
    {
        $request = request();
        $id = $request->param('25');
        $id=25; //todo  公司id
        $row=Db::table('company')->where('id',$id)->find();
        $list=count(DB::table("company_admin")->where('co_id',$id)->select());
        $lists=DB::table("company_admin")->where('co_id',$id)->select();
        $info= count(DB::table("job")->where('co_id',$id)->select());
        $job=Db::table('job')->alias('j')->join('user ca',"j.co_id = ca.co_id and j.co_id={$id} " )->paginate(5);
        $rew=Db::table('company_admin')->where('id',$id)->find();
     
        $a=[
            '1~3k',
            '3~5k',
            '5~7k',
            '7~9k',
            '9~11k',
            '11~13k',
            '13~15k',
            '15~17k',
            '17~19k',
            '19~21k',
            '21~23k',
            '23~25k',
            '25~27k',
            '27~29k',
            '29~31k',
            '31~33k',
            '33~35k',
            '35~37k',
            '37~39k',
            '39~41k',
            '41~43k',
            '43~45k',
            '45~47k',
            '47~49k',
        ];
//        $job['salary']=$a[$job['salary']];
//        var_dump($job);
    
        return $this->fetch("/company_job",['row'=>$row,'info'=>$info,'a'=>$a,'list'=>$list,'job'=>$job,'rew'=>$rew,'data' => $request->param(),'lists'=>$lists]);
    }
}