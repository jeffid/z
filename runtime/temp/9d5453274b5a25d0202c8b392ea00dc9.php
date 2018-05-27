<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume\education_edit.html";i:1525658826;}*/ ?>
<form data-action="/employee/resumeEducationEditExec" data-form="form-education-edit" method="post" class="form-resume">
    <h3 class="title">添加教育经历</h3>
    <div class="form-row">
        <dl>
            <dt>学校名称</dt>
            <dd>
                <input type="text" ka="edu-school" name="school" value="<?php echo $ed_school; ?>" class="ipt ipt-autocomplete required"
                       data-url="" autocomplete="off" placeholder="例如：北京大学" data-range="1,20"
                       data-blank="必填" data-format="请输入 20 字以内的学校名称" maxlength="20" required>
                <div class="suggest-complete">
                
                </div>
            </dd>
        </dl>
        <dl>
            <dt>专业名称</dt>
            <dd>
                <input type="text" ka="edu-major" name="major" value="<?php echo $ed_subject; ?>" class="ipt ipt-autocomplete required"
                       data-url="" autocomplete="off" placeholder="例如：计算机科学与技术"
                       data-range="1,20" data-blank="必填" data-format="请输入 20 字以内的专业名称" maxlength="20" required>
                <div class="suggest-complete"></div>
            </dd>
        </dl>
    </div>
    <div class="form-row">
        <dl>
            <dt>学历</dt>
            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" name="degreeName" ka="edu-degree" value="<?php echo $ed_degree; ?>" class="ipt" placeholder="选择学历" readonly="" required>
                    <input type="hidden" name="degree" value="" class="required" data-blank="请选择学历">
                </span>
                <div class="dropdown-menu">
                    <ul>
                        <li data-val="207">中专及以下</li>
                        <li data-val="206">高中</li>
                        <li data-val="202">大专</li>
                        <li data-val="203">本科</li>
                        <li data-val="204">硕士</li>
                        <li data-val="205">博士</li>
                    </ul>
                </div>
            </dd>
        </dl>
    </div>
    <div class="form-row">
        <dl>
            <dt>时间段</dt>
            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" name="startDateName" ka="edu-start-date" value="<?php echo $ed_startdate; ?>" class="ipt ipt-range" data-range="start"
                           data-type="y" placeholder="选择年份" readonly="" required>
                    <input type="hidden" name="startDateCode" value="<?php echo $ed_startdate; ?>" class="required" data-blank="请选择时间段">
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
        <dl>
            <dt>&nbsp;</dt>
            <dd>
                <span class="prefix-day">至</span>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" name="endDateName" ka="edu-end-date" value="<?php echo $ed_enddate; ?>" class="ipt ipt-range" data-range="end" data-type="y"
                           placeholder="选择年份" readonly="" required>
                    <input type="hidden" name="endDateCode" value="<?php echo $ed_enddate; ?>" class="required" data-blank="请选择时间段">
                </span>
                <div class="dropdown-menu">
                    <ul>
                        <li data-val="-1">至今</li>
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
                    </ul>
                </div>
            </dd>
        </dl>
    </div>
    <div class="form-row row-area item-form-through">
        <dl>
            <dt>在校经历</dt>
            <dd>
                <textarea placeholder="选填" ka="edu-description" name="eduDescription" class="ipt ipt-area"
                          data-range="0,300" data-blank="必填" data-format="请输入 300 个以内的文字"
                          maxlength="300" value="<?php echo $ed_experience; ?>"><?php echo $ed_experience; ?></textarea>
                <span class="count-num"><em>0</em>/300</span>
            </dd>
        </dl>
    </div>
    <div class="form-btns">
        <input type="hidden" name="id" value="<?php echo $ed_id; ?>">
        <button class="btn btn-back" ka="edu-cancel" type="button"  data-func="func-cancel">取消</button>
        <button class="btn" ka="edu-save" type="submit">完成</button>
    </div>
</form>
