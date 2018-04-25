CREATE TABLE `resume_info` (
  `in_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '简历总览表id',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `in_name` varchar(20) NOT NULL COMMENT '用户真实姓名',
  `in_sex` tinyint(3) unsigned NOT NULL COMMENT '性别',
  `in_status` tinyint(3) NOT NULL COMMENT '找工作状态',
  `in_start_work_year` varchar(10) NOT NULL COMMENT '开始工作年份',
  `in_birthday` varchar(10) DEFAULT NULL COMMENT '生日',
  `in_wx` varchar(50) DEFAULT NULL COMMENT '微信号',
  `in_email` varchar(50) DEFAULT NULL COMMENT '电子邮箱',
  PRIMARY KEY (`in_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


CREATE TABLE `resume_adventage` (
  `uid` int(10) unsigned NOT NULL,
  `ad_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_text` varchar(150) DEFAULT NULL COMMENT '优势陈述',
  PRIMARY KEY (`ad_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `resume_education` (
  `uid` int(10) unsigned NOT NULL,
  `ed_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ed_school` varchar(20) NOT NULL COMMENT '学校名称',
  `ed_subject` varchar(20) NOT NULL COMMENT ' 专业名称',
  `ed_degree` varchar(10) NOT NULL COMMENT '学历',
  `ed_startdate` int(10) NOT NULL COMMENT '时间段前',
  `ed_enddate` int(10) NOT NULL COMMENT '时间段后',
  `ed_experience` varchar(300) DEFAULT NULL COMMENT '在校经历',
  PRIMARY KEY (`ed_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `resume_history` (
  `uid` int(10) unsigned NOT NULL,
  `hi_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hi_company` varchar(50) NOT NULL COMMENT '公司名称',
  `hi_type` varchar(50) NOT NULL COMMENT '职业类型',
  `hi_position` varchar(50) NOT NULL COMMENT '职业名称',
  `hi_industry` varchar(50) NOT NULL COMMENT '所属行业',
  `hi_startdate` varchar(10) NOT NULL COMMENT '在职时间前',
  `hi_enddate` varchar(10) NOT NULL COMMENT '在职时间后',
  `hi_department` varchar(10) NOT NULL COMMENT '所属部门',
  `hi_work` text COMMENT '工作内容',
  `hi_results` varchar(300) DEFAULT NULL COMMENT '工作业绩',
  PRIMARY KEY (`hi_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;