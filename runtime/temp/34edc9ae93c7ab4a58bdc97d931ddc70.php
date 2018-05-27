<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume\history_show.html";i:1524724601;}*/ ?>
<h3 class="title">
    工作经历
    <div class="op">
        <a data-url="" href="javascript:;" ka="user-resume-add-workexp"
           class="link-add" data-action="/employee/resumeHistoryAdd" data-func="func-add">
            <i class="fz-resume fz-add"></i>添加
        </a>
    </div>
</h3>
<div class="history-project">
    
    <?php if(is_array($his) || $his instanceof \think\Collection || $his instanceof \think\Paginator): $i = 0; $__LIST__ = $his;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <div class="history-item" >
        <div class="op">
            <a href="javascript:;" data-url=""
               ka="user-resume-edit-workexp1" class="link-edit" data-action="/employee/resumeHistoryEdit" data-func="func-edit" data-id="<?php echo $item['hi_id']; ?>">
                <i class="fz-resume fz-edit"></i>编辑
            </a>
            
            <em class="vline"></em>
            <a href="javascript:;" data-url=""
               ka="user-resume-del-workexp1" class="link-delete" data-action="/employee/resumeHistoryDelete" data-func="func-delete" data-id="<?php echo $item['hi_id']; ?>">
                <i class="fz-resume fz-delete"></i>删除
            </a>
        </div>
        <span class="period"><?php echo $item['hi_startdate']; ?>-<?php echo $item['hi_enddate']; ?></span>
        
        <h4 class="name"><?php echo $item['hi_company']; ?></h4>
        <div class="text">
            
            <h4><?php echo $item['hi_position']; ?></h4>
            <div class="text">
                
                <h4><?php echo $item['hi_work']; ?></h4>
                
                <p><?php echo $item['hi_results']; ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>

