<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume\adventage_show.html";i:1524686261;}*/ ?>
<?php if(!(empty($adv) || (($adv instanceof \think\Collection || $adv instanceof \think\Paginator ) && $adv->isEmpty()))): ?>
<h3 class="title">我的优势
    <div class="op">
        <a data-url="" href="javascript:;" ka="user-resume-edit-desc" class="link-edit" data-action="/employee/resumeAdventageEdit" data-func="func-edit" data-id="<?php echo $adv['ad_id']; ?>">
            <i class="fz-resume fz-edit"></i>编辑
        </a>
    </div>
</h3>
<div class="text">
    <p><?php echo $adv['ad_text']; ?></p>
</div>

<?php else: ?>

<h3 class="title">我的优势
    <div class="op">
        <a data-url="" href="javascript:;" ka="user-resume-edit-desc" class="link-edit" data-action="/employee/resumeAdventageAdd" data-func="func-add">
            <i class="fz-resume fz-add"></i>添加
        </a>
    </div>
</h3>
<div class="text">
    <p></p>
</div>
<?php endif; ?>