<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume\info_add.html";i:1524921472;}*/ ?>
<form data-action="/employee/resumeInfoAddExec" method="post" class="form-resume" data-form="form-info-add">
    <h3 class="title">个人信息</h3>
    <div class="form-row">
        <dl>
            <dt>姓名 <span class="gray"></span></dt>
            <dd>
                <input type="text" class="ipt required" placeholder="输入您的姓名" data-range="1,12" data-blank="请输入姓名" data-format="请填写真实姓名" maxlength="12" ka="et-uname" name="name"  minlength="2" required>
            </dd>
        </dl>
        <dl>
            <dt>当前的求职状态</dt>
            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input value="离职-随时到岗"  type="text" class="ipt" placeholder="请选择" readonly="" minlength="1" required>
                    <input value="0" type="hidden" class="required" data-blank="请选择求职状态" name="applyStatus"  minlength="1" required>
                </span>
                <div class="dropdown-menu">
                    <ul>
                        <li data-val="0" class="selected">离职-随时到岗</li>
                        <li data-val="1" >在职-暂不考虑</li>
                        <li data-val="2">在职-考虑机会</li>
                        <li data-val="3">在职-月内到岗</li>
                    </ul>
                </div>
            </dd>
        </dl>
    </div>
    
    <div class="form-row">
    
        <dl>
            <dt>性别</dt>
            <dd>
                <div class="radio-list">
                    <label class="radio-square radio-checked" data-val="1">男</label>
                    <label class="radio-square " data-val="0">女</label>
                    <input value="1" type="hidden" name="gender" class="required" data-blank="请选择性别"  minlength="1" required>
                </div>
            </dd>
        </dl>

        <dl>
            <dt>开始工作年份</dt>
            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input value="2018" type="text"   class="ipt ipt-range" data-range="start" data-type="y" placeholder="选择年份" readonly="" minlength="4" required>
                    <input value="2018" type="hidden" name="startWorkYear"  class="required" minlength="4" required>
                </span>
                <div class="dropdown-menu">
                    <ul>
                        <li data-val="2018">2018</li>
                        <li data-val="2017">2017</li>
                        <li data-val="2016">2016</li>
                        <li data-val="2015">2015</li>
                        <li data-val="2014">2014</li>
                        <li data-val="2013">2013</li>
                        <li data-val="2012">2012</li>
                        <li data-val="2011">2011</li>
                        <li data-val="2010">2010</li>
                        <li data-val="2009">2009</li>
                        <li data-val="2008">2008</li>
                        <li data-val="2007">2007</li>
                        <li data-val="2006">2006</li>
                        <li data-val="2005">2005</li>
                        <li data-val="2004">2004</li>
                        <li data-val="2003">2003</li>
                        <li data-val="2002">2002</li>
                        <li data-val="2001">2001</li>
                        <li data-val="2000">2000</li>
                        <li data-val="1999">1999</li>
                        <li data-val="1998">1998</li>
                        <li data-val="1997">1997</li>
                        <li data-val="1996">1996</li>
                        <li data-val="1995">1995</li>
                        <li data-val="1994">1994</li>
                        <li data-val="1993">1993</li>
                        <li data-val="1992">1992</li>
                        <li data-val="1991">1991</li>
                        <li data-val="1990">1990</li>
                        <li data-val="1989">1990年以前</li>
                    </ul>
                </div>
            </dd>
        </dl>

    </div>
    <div class="form-row">
        <dl>
            <dt>出生年份</dt>
            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input value="1990" type="text"   class="ipt ipt-range" data-range="start" data-type="y" placeholder="选择年份" readonly="" minlength="4" required>
                    <input value="1990" type="hidden" name="birthday" minlength="4" class="required" required>
                </span>
                <div class="dropdown-menu">
                    <ul>
                        <?php $__FOR_START_9480__=1950;$__FOR_END_9480__=2019;for($i=$__FOR_START_9480__;$i < $__FOR_END_9480__;$i+=1){ ?>
                        <li data-val="<?php echo $i; ?>"><?php echo $i; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </dd>
        </dl>
    
        <dl>
            <dt>微信号</dt>
            <dd>
                <input name="weixin"  type="text" class="ipt" placeholder="输入微信号" data-range="0,50" data-blank="请填写微信号" data-format="请填写真实的微信号" maxlength="50">
            </dd>
        </dl>
    </div>
    <div class="form-row">
        <dl>
            <dt>邮箱</dt>
            <dd><input name="email" ka="email_edit"  type="text" class="ipt" placeholder="请输入您的邮箱" data-range="0,40" data-blank="请填写邮箱" data-format="请填写真实的邮箱" maxlength="40" ></dd>
        </dl>
    </div>
    <div class="form-btns">
        <input name="id" type="hidden" value="">
        <button class="btn btn-back" type="button" ka="user-resume-user-info-cancel" data-func="func-cancel">取消</button>
        <button class="btn" type="submit" data-btn="submit">完成</button>
    </div>
</form>
