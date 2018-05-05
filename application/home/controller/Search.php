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
    function getIndex()
    {
        $rq = request();
        $query = $rq->param('query');
        $locationCode = $rq->param('scity');
        $industryCode = $rq->param('industry');
        $positionCode = $rq->param('position');
        $w=['status'=>'1']; // 状态为可用的职位
        if (!empty($query)) {
            $w['job|co_name']=['LIKE',"%{$query}%"]; //工作名、公司名模糊查询
        }
        if (!empty($locationCode)) {
            $w['location_code']=$locationCode; // 城市编号
        }
        if (!empty($industryCode)) {
            $w['industry_code']=$industryCode; // 行业编号
        }
        if (!empty($positionCode)) {
            $ct = Db::query("select id from category WHERE `id` = {$positionCode} OR FIND_IN_SET({$positionCode},`path`)"); //大类或其子类的类id集合
            $str_ct = '';
            foreach ($ct as $item) {
                $str_ct .= $item['id'] . ',';
            }
            $str_ct = trim($str_ct, ',');
            $w['position_code']=['IN',$str_ct]; //限定工作类型
        }
        /*查询符合条件的工作*/
        $jobs_id =Db::table('job')->field('id')->where($w)->paginate(30);
        $page=$jobs_id->appends($rq->param())->render(); // 分页
        
        $jobfield = [
            'hr_id',
            'co_id',
            'id' => 'j_id',
            'job' => 'j_name',
            'location' => 'j_location',
            'degree' => 'j_degree',
            'salary' => 'j_salary',
            'experience' => 'j_experience',
            'timestamp' => 'j_timestamp',
        ];
        $hrfield = [
            'username' => 'hr_name',
            'avatar' => 'hr_avatar',
            'position' => 'hr_position'
        ];
        $cofield = [
            'name' => 'co_name',
            'industry' => 'co_industry',
            'financing' => 'co_financing',
            'employees' => 'co_employees',
            'logo' => 'co_logo'
        ];
        
        $list = [];
        /*根据找到的每条工作id,组合列出页面所需的信息,信息不完整的整个跳过*/
        foreach ($jobs_id as $item) {
//            var_dump($item);
            $jid = $item['id'];
            /* 有其中一条执行不成功跳出*/
            if (!($job = Db::table('job')->where('id', $jid)->field($jobfield)->find())) {
                continue;
            }
            if (!($hr = Db::table('user')->where('id', $job['hr_id'])->field($hrfield)->find())) {
                continue;
            }
            if (!($company = Db::table('company')->where('id', $job['co_id'])->field($cofield)->find())) {
                continue;
            }
            $list[] = $job + $hr + $company;
        }
        
//        var_dump($w,$jobs_id, $list);
        
        /*全部分类,平行数据*/
//        $allCategory = Db::table('category')->select();
        /*分类目录,多维分类数据*/
//        $category=getCategory($allCategory); //通用函数
        $d = [
            'category' => $category ?? [], //采用静态目录时用后一值
            'list' => $list,
            'page' => $page,
        ];
        return $this->fetch('search/search', $d);
    }
    
}