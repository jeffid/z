<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/19
 * Time: 9:03
 */

namespace app\home\controller;

use think\Controller;
use think\Db;
class Search extends Controller
{
    function getIndex(){
        /*
         * query=&scity=&industry=100003&position=
         * */
        
        /*
         *   `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hr_id` int(10) unsigned NOT NULL COMMENT 'HR_id',
  `co_id` int(10) unsigned NOT NULL COMMENT '公司id',
  `co_name` varchar(50) DEFAULT NULL COMMENT '公司名',
  `icinfo_id` int(10) unsigned DEFAULT NULL COMMENT '工商信息id',
  `job` varchar(30) NOT NULL COMMENT '工作名称',
  `experience` varchar(20) NOT NULL COMMENT '要求经验年限',
  `degree` varchar(20) NOT NULL COMMENT '要求学历',
  `job_descr` varchar(255) NOT NULL COMMENT '职位描述',
  `team_descr` varchar(255) NOT NULL COMMENT '团队介绍',
  `tags` varchar(255) NOT NULL COMMENT '职位标签',
  `address` varchar(100) NOT NULL COMMENT '工作地址',
  `timestamp` char(10) NOT NULL COMMENT '发布时间',
  `status` int(2) unsigned NOT NULL COMMENT '状态',
  `salary` tinyint(3) unsigned NOT NULL COMMENT '薪水',
  `location` varchar(20) CHARACTER SET utf16le NOT NULL COMMENT '所在地',
  `location_code` int(10) unsigned NOT NULL COMMENT '所在地编号',
  `industry` varchar(20) NOT NULL COMMENT '所在行业',
  `industry_code` int(10) unsigned NOT NULL COMMENT '所在行业编号',
  `position` varchar(20) NOT NULL COMMENT '工作类型',
  `position_code` int(10) unsigned NOT NULL COMMENT '工作类型编号',
         * */
        $rq=request();
        $where='1=1';
        $query=$rq->get('query');
        $locationCode=$rq->get('scity');
        $industryCode=$rq->get('industry');
        $positionCode=$rq->get('position');
    
        if (!empty($query)) {
            $where.=" AND job LIKE %{$query}%";
        }
        if (!empty($locationCode)) {
            $where.=" AND location_code = {$locationCode}";
        }
        if (!empty($industryCode)) {
            $where.=" AND industry_code = {$industryCode}";
        }
        if (!empty($positionCode)) {
           $ct=Db::query("select id from category WHERE `id` = {$positionCode} OR FIND_IN_SET({$positionCode},`path`)");
           $str_ct='';
            foreach ($ct as $item) {
                $str_ct.=$item['id'].',';
           }
           
           $str_ct=trim($str_ct,',');
           $where.=" AND `position_code` IN ({$str_ct})";
           echo $where;
        }
        
        $res=Db::query("SELECT * FROM `job` WHERE {$where}");
        
        var_dump($res);
        
        /*全部分类,平行数据*/
        $allCategory = Db::table('category')->select();
        /*分类目录,多维分类数据*/
        $category=getCategory($allCategory); //通用函数
        $d=[
            'category'=>$category??[], //采用静态目录时用后一值
        ];
        return $this->fetch('/search',$d);
    }
    
    /*
     *  if ($_GET['tid'] == 0) {
            $sql = "select * from goods";
        } else {
            //分类 以及 这个分类下面所有自分类包含的商品 且上架的
            $sql = "select * from goods where (tid={$_GET['tid']} or tid in(select id from type where path like '%,{$_GET['tid']},%')) and status=1";
        }
     * */
}