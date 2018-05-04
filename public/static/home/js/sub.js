window.onload = function () {
    $('.test').click(function (e) {
        $.get('/employee/t', function (res) {
            console.log(typeof res, res['html']);
            document.querySelector('.update-time').innerHTML = res['html'];
        })
    });
    
    /* 重新插入js */
    function refreshjs() {
        $('.refreshjs').remove(); // 移除旧的js引入标签
        $('<script class="refreshjs" src="/static/home/js/main.js" ></script>').appendTo(document.body); // 重新引入相应的js文件，js重新执行，使事件监听也重新添加一遍
    }
    
    /* 自定义选择框 */
    (function () {
        $('.sub-select > .dropdown-select').click(function (e) {
            e.stopImmediatePropagation();
            /*下拉列表，切换*/
            $(this).nextAll('.dropdown-menu').toggle();
        });
        
        $('.sub-select .regionCodeOptions').click(function (e) {
            var val = $(this).data('val'),
                $form = $(this).parents('form');
            /*更新值到表单字段*/
            $('.text-select', $form).html(val);
            $('[name="regionCode"]', $form).attr('value', val);
        });
        /*任意点击隐藏下拉框*/
        document.addEventListener('click', function (e) {
            $('.sub-select > .dropdown-menu').hide();
        });
    })();
    
    
    /* 发送短信验证码,监听 */
    $('[data-btn="sms"]').click(function (e) {
        e.stopImmediatePropagation();
        
        // console.log(e.currentTarget, 'sms');
        var $btn = $(e.target),
            form = $btn.parents('form').get(0),
            $tip = $(form).prevAll('.tiperror'),
            url = $btn.data('action'),
            timer = null,
            time = 60,
            d = {
                regionCode: form['regionCode'].value,
                phone: form['phone'].value
            };
        
        if (form['phone'].value.length < 1) {
            // console.log('short',$tip,$tip.length);
            $tip.length ? $tip.html('请填写手机号') : alert('请填写手机号');
            return;
        }
        /*{ code: "100008", count: "0", create_date: "", mobile: "", msg: "手机号码不能为空", smsid: "", uid: "" }*/
        $.post(url, d, function (res) {
            if (res.code == '000000') {
                /* 短信发送成功后,进入这里 */
                $btn.attr('disabled', true);
                $btn.html(time + ' 秒后重发')
                timer = setInterval(function () {
                    $btn.html(--time + ' 秒后重发')
                    if (time === 0) {
                        clearInterval(timer);
                        $btn.html('发送验证码');
                        $btn.attr('disabled', false);
                    }
                }, 1000)
            }
            else {
                /* 短信发送失败 */
                $tip.length ? $tip.html(res.msg) : alert(res.msg);
            }
        }, 'json');
    });
    
    
    /**
     * 简历表更新 添加时调用
     * */
    function resumeFormPost(form, data) {
        console.log(form, data);
        for (var p in data) {
            /*过滤掉空字符属性*/
            if (data.hasOwnProperty(p) && data[p].length < 1) {
                delete data[p];
            }
        }
        console.log('submit data: ', data);
        $.post(form.dataset.action, data, function (res) {
            /*数据成功写入数据库后移除form表单,重新加载展示部分*/
            if (res.msg == 'ok') {
                $(form).parents('.resume-item').find('.item-primary').html(res.html);
                $(form).remove();
                refreshjs();
            }
            else {
                alert(res.msg);
                // console.log(res);
            }
        })
    }
    
    /*
    * 登录注册统一ajax处理
    * */
    function signFormPost(form, data) {
        var $captchaImg = $(form).find('.captcha'),
            $tip = $(form).prevAll('.tiperror');
        
        // console.log('post', data, form.dataset.action);
        $.post(form.dataset.action, data, function (res) {
            // console.log('post in', data);
            
            /*返回的信息写到提示栏*/
            if (res.msg == 'ok') {
                location.href = res.redirect;
            }
            else {
                /*注册不成功,刷新图形验证码*/
                $captchaImg.attr('src', $captchaImg.attr('src') + '?1');
            }
            $tip.length ? $tip.html(res.msg) : alert(res.msg);
        });
    }
    
    // $(document.body).click(function (e) {
    //     e.stopImmediatePropagation();
    //     // e.preventDefault();
    //
    // })
    /**
     *  统一表单提交监听
     *  注册,登录
     *  简历项编辑更新、添加
     *  */
    $(document.body).on('submit', '[data-form]', function (e) {
        e.stopImmediatePropagation();
        e.preventDefault();
        // console.log('form submit');
        
        var form = e.currentTarget;
        
        switch (form.dataset.form) {
            /* 注册 */
            case 'form-register' : {
                // var $tip = $(form).prevAll('.tiperror');
                // if (form['phone'].value.length < 1) {
                //     /* 电话为空不许提交 */
                //     $tip.html('请填写手机号');
                //     return;
                // }
                var d = {
                    regionCode: form['regionCode'].value,
                    phone: form['phone'].value,
                    captcha: form['captcha'].value,
                    phoneCode: form['phoneCode'].value,
                    purpose: form['purpose'].value,
                }
                signFormPost(form, d);
                break;
            }
            
            /* 短信登录 */
            case 'form-sms' : {
                var d = {
                    regionCode: form['regionCode'].value,
                    phone: form['phone'].value,
                    captcha: form['captcha'].value,
                    phoneCode: form['phoneCode'].value,
                }
                signFormPost(form, d);
                break;
            }
            
            /* 密码登录 */
            case 'form-pwd' : {
                var d = {
                    regionCode: form['regionCode'].value,
                    phone: form['phone'].value,
                    captcha: form['captcha'].value,
                    password: form['password'].value,
                }
                signFormPost(form, d);
                break;
            }
            
            /*修改信息表*/
            case 'form-info-edit':
            case 'form-info-add': {
                var d = {
                    in_id: form['id'].value,
                    in_name: form['name'].value,
                    in_sex: form['gender'].value,
                    in_status: form['applyStatus'].value,
                    in_start_work_year: form['startWorkYear'].value,
                    in_wx: form['weixin'].value,
                    in_email: form['email'].value,
                    in_birthday: form['birthday'].value
                };
                
                resumeFormPost(form, d);
            }
            
            /*简历,个人优势,表单提交*/
            case 'form-adv-add':
            case 'form-adv-edit': {
                var d = {
                    ad_id: form['id'].value,
                    ad_text: form['adventage'].value
                };
                resumeFormPost(form, d);
            }
            
            
            /*简历,工作经历,表单提交*/
            case 'form-history-add':
            case 'form-history-edit': {
                var d = {
                    hi_id: form['id'].value,
                    hi_company: form['company'].value,
                    hi_type: form['positionType'].value,
                    hi_position: form['positionName'].value,
                    hi_industry: form['industryCategory'].value,
                    hi_startdate: form['startDateName'].value,
                    hi_enddate: form['endDateName'].value,
                    hi_department: form['department'].value,
                    hi_work: form['responsibility'].value,
                    hi_results: form['workPerformance'].value
                };
                resumeFormPost(form, d);
                break;
            }
            
            /*简历,教育背景,表单提交*/
            case 'form-education-add':
            case 'form-education-edit': {
                var d = {
                    id: form['id'].value,
                    ed_id: form['id'].value,
                    ed_school: form['school'].value,
                    ed_subject: form['major'].value,
                    ed_degree: form['degreeName'].value,
                    ed_startdate: form['startDateName'].value,
                    ed_enddate: form['endDateName'].value,
                    ed_experience: form['eduDescription'].value
                };
                resumeFormPost(form, d);
                break;
            }
            
            /*+++++++++++++++++++++++++++++++++++++++*/
            //账号管理密码修改
            case 'form-employee-pwd-add' : {
                var d = {
                    password: form['password'].value,
                    repassword: form['repassword'].value,
                }
                if (d.password !== d.repassword) {
                    alert("两次密码不一致");
                    return;
                }
                signFormPost(form, d);
                break;
            }
            
            //账号管理手机号修改
            case 'form-employee-phone-edit' : {
                var d = {
                    regionCode: form['regionCode'].value,
                    phone: form['phone'].value,
                    phoneCode: form['phoneCode'].value,
                    captcha: form['captcha'].value,
                };
                
                signFormPost(form, d);
                break;
            }
            
            //招聘信息的添加
            case 'form-addjob' : {
                var d = {
                    job: form['job'].value,
                    experience: form['experience'].value,
                    degree: form['degree'].value,
                    job_descr: form['job_descr'].value,
                    team_descr: form['team_descr'].value,
                    address: form['address'].value,
                    tags: form['tags'].value,
                    salary: form['salary'].value,
                    industry_code: form['industry'].value,
                    industry: form['industry'].options[form['industry'].selectedIndex].text,
                    location_code: form['scity'].value,
                    location: $(form['scity']).prevAll('.search-form-con').find('.scityText').text(),
                    position_code: form['position'].value,
                    position: $(form['position']).prevAll('.position-sel').find('b').text(),
                }
                
                $.post(form.action, d, function (res) {
                    if (res == 'ok') {
                        
                        location.href = "/employer/index";
                    } else {
                        alert("失败");
                    }
                });
                break;
            }
            
            //招聘信息修改
            case 'form-editjob' : {
                var d = {
                    id: form['id'].value,
                    job: form['job'].value,
                    location: form['location'].value,
                    experience: form['experience'].value,
                    degree: form['degree'].value,
                    job_descr: form['job_descr'].value,
                    team_descr: form['team_descr'].value,
                    address: form['address'].value,
                    tags: form['tags'].value,
                    
                }
                $.post(form.action, d, function (res) {
                    if (res == 'ok') {
                        alert("修改成功");
                        location.href = "/employer/index";
                    } else {
                        alert("失败");
                    }
                    // todo 跳转
                });
                break;
            }
            //账号管理密码修改
            case 'form-editpwd' : {
                var d = {
                    password: form['password'].value,
                    repassword: form['repassword'].value,
                }
                
                if (d.password !== d.repassword) {
                    alert("两次密码不一致");
                    return;
                }
//                    console.log(d);
                $.post(form.action, d, function (res) {
                    if (res == 'ok') {
                        alert("修改成功");
                        location.href = "/employer/index";
                    } else {
                        alert("失败");
                    }
                    // todo 跳转
                });
                break;
            }
            //账号管理手机号修改
            case 'form-phone' : {
                var d = {
                    regionCode: form['regionCode'].value,
                    phone: form['phone'].value,
                    phoneCode: form['phoneCode'].value,
                    captcha: form['captcha'].value,
                }
                
                console.log(d);
                $.post(form.action, d, function (res) {
                    if (res == 'ok') {
                        alert("修改成功");
                        location.href = "/employer/index";
                    } else {
                        alert("失败", res);
                    }
                    // todo 跳转
                });
                break;
            }
        }
    }); // 表单提交处理
    
    
    /************************************************/
    /**
     *  简历页, 编辑项 添加项 监听操作
     *  */
    $(document.body).on('click', '[data-func]', function (e) {
        e.stopImmediatePropagation();
        e.preventDefault();
        
        var $it = $(this);
        
        switch ($it.data('func')) {
            
            /*获取html放置到form表单位置*/
            case 'func-edit':
            case 'func-add': {
                var action = $it.data('action'),
                    id = $it.data('id');//仅在编辑记录时有效,添加记录时无用
                $.post(action, {id: id}, function (res) {
                    if (res.msg == 'ok') {
                        $it.parents('.resume-item').find('.item-form').html(res.html);
                        refreshjs();
                    }
                    else {
                        console.log(res);
                    }
                });
                
                break;
            }
            
            /*移除编辑表单*/
            case 'func-cancel': {
                $it.parents('.item-form').empty();
                // console.log('cancel');
                break;
            }
            
            
            /*删除指定项*/
            case 'func-delete': {
                $.post($it.data('action'), {id: $it.data('id')}, function (res) {
                    if (res.msg == 'ok') {
                        $it.parents('.resume-item').find('.item-primary').html(res.html);
                        refreshjs();
                    }
                    else {
                        console.log(res);
                    }
                });
                
                break;
            }
        }
    })
    
    /*简历投递状态选择事件*/
    $('[data-btn="select"]').change(function (e) {
        var $it = $(this),
            action = $it.data('action'),
            d = {
                optionIndex: $it.val()
            };
        
        // console.log('ssssss', action);
        
        $.post(action, d, function (res) {
            if (res.msg == 'ok') {
                console.log('offer 状态修改成功');
            } else {
                alert('offer 状态修改失败');
            }
        }, 'json')
        
    });
    
    //发面的职位状态
    $('[data-btn="changestatus"]').click(function (e) {
        e.preventDefault();
        var $btn = $(this),
            action = $btn.attr('href'),
            status = $btn.data('status');
        // console.log('change');
        $.post(action, {status: status}, function (res) {
            if (res.msg == 'ok') {
                if (res.status == 1) {
                    $btn.html('可用');
                    $btn.data('status', res.status);
                } else {
                    $btn.html('禁用');
                    $btn.data('status', res.status);
                }
            }
        }, 'json')
    })
    
    /*
    * 取消原版表单提交
    * */
    // $('[data-btn="submit"]').click(function (e) {
    //     e.stopImmediatePropagation();
    //     console.log('stopImmediatePropagation');
    // })
    /*搜索模块,职位选项结果处理*/
    $('.sub .category-3 > li, .sub .category-1 > li:first').click(function (e) {
       var  $li=$(this),
       $searchBox=$li.parents('.search-box');
       /*利用类切换选择框显隐状态*/
       $searchBox.toggleClass('show-position');
       /*显示选择结果文本*/
       $searchBox.find('.position-sel b').text($li.data('position'));
       /*写入选择结果编号*/
        if ($li.data('positioncode') == '0') {
            /*不限类型时清空值*/
            $searchBox.find('[name="position"]').val('');
        }
        else {
       $searchBox.find('[name="position"]').val($li.data('positioncode'));
        }
       
    });
    
    /*HR添加工作,工作类型选择处理*/
    $('.pos .position-sel').click(function () {
        $(this).nextAll('.positionBox').toggle();
    })
    $('.pos .category-3 > li, .pos .category-1 > li:first').click(function (e) {
        var  $li=$(this),
            $searchBox=$li.parents('dd');

        $li.parents('.positionBox').hide();
        /*显示选择结果文本*/
        $searchBox.find('.position-sel b').text($li.data('position'));
        /*写入选择结果编号*/
        if ($li.data('positioncode') == '0') {
            /*不限类型时清空值*/
            $searchBox.find('[name="position"]').val('');
        }
        else {
            $searchBox.find('[name="position"]').val($li.data('positioncode'));
        }
        
    });
    
    /*自定义轮播*/
    var _crs = [].slice.call(document.querySelectorAll('.m-carousel'));
    _crs.forEach(function (_item) {
        var _dotBox = _item.querySelector('.carousel-dot'),
            _li = _item.querySelectorAll('li'),
            llen = _li.length,
            idx = 0,
            lastIdx = -1,
            html = '',
            w = _item.offsetWidth,
            timer = null,
            duration = 3000;

//                console.log(_li);
        
        for (var i = 0; i < llen; i++) {
//            _li[i].style.display = 'none';
            _li[i].style.opacity = 0;
            _li[i].style.zIndex = -1;
            html += '<i data-index="' + i + '" class="dot"></i>';
        }
        
        _dotBox.innerHTML = html;
        var _dots = _dotBox.querySelectorAll('.dot');
        
        /*初始化*/
        shift();
        /*开始循环*/
        next();
        /*监听点击事件*/
        _item.addEventListener('click', function (e) {
            var it = e.target;
            if (it.classList.contains('dot')) {
                next(it.dataset.index);
            }
            if (it.classList.contains('next')) {
                next();
            }
            if (it.classList.contains('prev')) {
                prev();
            }
        });
        
        function next(newIdx) {
            clearTimeout(timer);
            lastIdx = idx;
            idx = newIdx || ++idx % llen;
            shift();
            
            timer = setTimeout(function () {
                next();
            }, duration)
        }
        
        function prev() {
            clearTimeout(timer);
            lastIdx = idx;
            idx = (--idx < 0 ? llen - 1 : idx) % llen;
            shift();
            
            timer = setTimeout(function () {
                next();
            }, duration)
        }
        
        function shift() {
            if (_li[lastIdx]) {
//                _li[lastIdx].style.display = 'none';
                _li[lastIdx].style.opacity = 0;
                _li[lastIdx].style.zIndex = -1;
                _li[lastIdx].classList.remove('cur');
            }
            _dots[lastIdx] && _dots[lastIdx].classList.remove('cur');

//            _li[idx].style.display = 'block';
            _li[idx].style.opacity = 1;
            _li[idx].style.zIndex = 1;
            _li[idx].classList.add('cur');
            _dots[idx].classList.add('cur');
        }
        
    })
    
};