<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume\info_show.html";i:1525421935;}*/ ?>
<form upload-base64-url="/employee/avatarupdate" upload="" action="/employee/avatarupdate" method="post" >
    <div class="profile_form zw_form figure">
        <dl class="clearfix avatar_line">
            <dd class="txt Rcheck avatar_box">
                <img src="<?php echo (\think\Session::get('user.avatar')) ? \think\Session::get('user.avatar') :  \think\Session::get('default.avatar'); ?>" class="avatar">
                <div class="sel_avatar">
                    <a ka="choose-avatar" data-title="头像设置" class="upload-layer"></a>
                </div>
                <input name="large"
                       value=""
                       type="hidden" class="kz_input required avatar_url" datatype="z" nullmsg="请上传头像！">
                <input name="tiny"
                       value=""
                       type="hidden" class="kz_input required avatar_url" datatype="z" nullmsg="请上传头像！">
            </dd>
        </dl>
    </div>
</form>

<?php if(isset($info['in_name'])): ?>
<h2 class="name"><?php echo isset($info['in_name'])?$info['in_name']:'未填写资料'; ?> <i class="fz-resume <?php echo $info['in_sex']==1?'fz-male':'fz-female'; ?>"></i>
    <div class="op">
        <a data-url="" href="javascript:;" ka="user-resume-edit-userinfo" class="link-edit" data-func="func-edit"
           data-action="/employee/ResumeInfoEdit" data-id="<?php echo $info['in_id']; ?>"><i class="fz-resume fz-edit"></i>编辑</a>
    </div>
</h2>
<div class="info-labels">
    <p class="row-base">
        <span class="label-text">
            <i class="fz-resume fz-experience"></i><?php echo $info['years']; ?>年以内经验
        </span>
        <em class="vline"></em>
        <span class="label-text">
            <i class="fz-resume fz-status"></i><?php echo $info['applyStatus']; ?>
        </span>
    </p>
    
    <p class="row-contact">
        <span class="label-text"><i class="fz-resume fz-tel"></i><?php echo $info['phone']; ?></span>
        
        <?php if(!(empty($info['in_wx']) || (($info['in_wx'] instanceof \think\Collection || $info['in_wx'] instanceof \think\Paginator ) && $info['in_wx']->isEmpty()))): ?>
        <em class="vline"></em>
        <span class="label-text span-wechat"><i class="fz-resume fz-weixin"></i><?php echo $info['in_wx']; ?></span>
        <?php endif; if(!(empty($info['in_email']) || (($info['in_email'] instanceof \think\Collection || $info['in_email'] instanceof \think\Paginator ) && $info['in_email']->isEmpty()))): ?>
        <em class="vline"></em>
        <span class="label-text span-email"><i class="fz-resume fz-mail"></i><?php echo $info['in_email']; ?></span>
        <?php endif; ?>
    </p>
</div>

<?php else: ?>

<h2 class="name">个人信息
    <div class="op">
        <a data-url="" href="javascript:;" class="link-edit" data-func="func-edit" data-action="/employee/ResumeInfoAdd" data-id=""><i class="fz-resume fz-add"></i>添加</a>
    </div>
    <div style="height: 60px;font-size: 14px;">请添加个人信息</div>
</h2>
<?php endif; ?>