<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\widget\links.html";i:1525685174;}*/ ?>
<div class="links links-friends" style="height: 30px;">
    <dl class="links-item">
        <dt>友情链接：</dt>
        <dd>
            <?php if(is_array($row) || $row instanceof \think\Collection || $row instanceof \think\Paginator): $i = 0; $__LIST__ = $row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
            <a href="https://<?php echo $data['link']; ?>" target="_blank" ka="friendly-link-1"><?php echo $data['name']; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        
        </dd>
    </dl>
    <label><span>展开</span><i class="fz fz-slidedown"></i></label>
</div>