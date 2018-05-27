<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume\education_show.html";i:1524748248;}*/ ?>
<h3 class="title">教育经历
    <div class="op">
        <a href="javascript:;" data-url= ka="user-resume-add-eduexp" class="link-add" data-action="/employee/resumeEducationAdd" data-func="func-add">
            <i class="fz-resume fz-add"></i>添加
        </a>
    </div>
</h3>
<div class="history-education">
    <?php if(is_array($edu) || $edu instanceof \think\Collection || $edu instanceof \think\Paginator): $i = 0; $__LIST__ = $edu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <div class="history-item" id="row-846a940cfc2fe5551nZ539u8EFs~">
        <div class="op">
            <a href="javascript:;" data-url=""
               ka="user-resume-edit-eduexp1" class="link-edit" data-action="/employee/resumeEducationEdit" data-func="func-edit" data-id="<?php echo $item['ed_id']; ?>">
                <i class="fz-resume fz-edit"  ></i>编辑
            </a>
            
            <em class="vline"></em>
            <a href="javascript:;" data-url=""
               ka="user-resume-del-eduexp1" class="link-delete" data-action="/employee/resumeEducationDelete" data-func="func-delete" data-id="<?php echo $item['ed_id']; ?>">
                <i class="fz-resume fz-delete" ></i>删除
            </a>
        
        </div>
        <span class="period"><?php echo $item['ed_startdate']; ?>-<?php echo $item['ed_enddate']; ?></span>
        <h4 class="name"><?php echo $item['ed_school']; ?></h4>
        <div class="text">
            <h4><?php echo $item['ed_subject']; ?><em class="vline"></em><?php echo $item['ed_degree']; ?></h4>
            <p><?php echo isset($item['ed_experience'])?$item['ed_experience']:''; ?></p>
        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
                