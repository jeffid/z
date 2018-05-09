/*
 Navicat Premium Data Transfer

 Source Server         : wamp
 Source Server Type    : MySQL
 Source Server Version : 50711
 Source Host           : localhost:3306
 Source Schema         : zhipin

 Target Server Type    : MySQL
 Target Server Version : 50711
 File Encoding         : 65001

 Date: 09/05/2018 10:36:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT '手机号',
  `password` char(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` tinyint(3) NOT NULL DEFAULT 1,
  `createtime` int(10) UNSIGNED NOT NULL COMMENT '创建该管理员时间',
  `count` int(10) UNSIGNED NULL DEFAULT 1 COMMENT '登录次数',
  `last_ip` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '上次登录ip',
  `last_time` int(10) UNSIGNED NULL DEFAULT NULL COMMENT '上次登录时间',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, '13011112222', '4297f44b13955235245b2497399d7a93', 1, 0, 1, NULL, NULL);
INSERT INTO `admin` VALUES (12, '13640129335', '4297f44b13955235245b2497399d7a93', 1, 0, 1, NULL, NULL);
INSERT INTO `admin` VALUES (11, '17665311971', '4297f44b13955235245b2497399d7a93', 1, 0, 1, NULL, NULL);
INSERT INTO `admin` VALUES (21, '17600000000', '4297f44b13955235245b2497399d7a93', 1, 0, 8, '127.0.0.1', 1525764816);
INSERT INTO `admin` VALUES (22, '17600000001', '4297f44b13955235245b2497399d7a93', 1, 1525635959, 8, '127.0.0.1', 1525684467);

-- ----------------------------
-- Table structure for advertising
-- ----------------------------
DROP TABLE IF EXISTS `advertising`;
CREATE TABLE `advertising`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bgs` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `co_id` int(10) NOT NULL,
  `bg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `homepage` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 32 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of advertising
-- ----------------------------
INSERT INTO `advertising` VALUES (28, '万寿谷集团', '/uploads/thumbs/1525666462.jpg', 58, '/uploads/20180507\\cfdc5f5fa222e1d7a42ce904f6dc7fcd.jpg', 'www.wsgjt.com');
INSERT INTO `advertising` VALUES (31, '饿了么', NULL, 60, '/uploads/thumbhome/1525674445.jpg', 'www.ele.me');

-- ----------------------------
-- Table structure for carousel
-- ----------------------------
DROP TABLE IF EXISTS `carousel`;
CREATE TABLE `carousel`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `co_id` int(10) NOT NULL,
  `bgs` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `homepage` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carousel
-- ----------------------------
INSERT INTO `carousel` VALUES (21, '宜信公司', '/uploads/20180507\\3a98d158b4151c976bf42dabe24b89f5.png', 59, '/uploads/thumbs/1525661871.png', 'www.creditease.cn');
INSERT INTO `carousel` VALUES (25, '嘟嘟', '/uploads/20180507\\46ef1241100b22eca5bcaf1832b0fcee.jpg', 56, '/uploads/thumbs/1525665707.jpg', 'www.szqicai.com');
INSERT INTO `carousel` VALUES (18, '伊步科技', '/uploads/20180507\\e03616f33c5ba5b6cc64dd81913d2de3.png', 57, '/uploads/thumbs/1525665589.png', 'ebunet.net');
INSERT INTO `carousel` VALUES (24, '万寿谷集团', '/uploads/20180507\\757ce461041622e6040400362baea076.jpg', 58, '/uploads/thumbs/1525666827.jpg', 'www.wsgjt.com');
INSERT INTO `carousel` VALUES (26, '饿了么', '/uploads/20180507\\d3f8dd64511e6c023c5e86960fcaba01.png', 60, '/uploads/thumbs/1525675116.png', 'www.ele.me');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL,
  `path` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 887 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, '技术', 0, '0');
INSERT INTO `category` VALUES (2, '后端开发', 1, '0,1');
INSERT INTO `category` VALUES (3, 'Java', 2, '0,1,2');
INSERT INTO `category` VALUES (4, 'C++', 2, '0,1,2');
INSERT INTO `category` VALUES (5, 'PHP', 2, '0,1,2');
INSERT INTO `category` VALUES (6, '数据挖掘', 2, '0,1,2');
INSERT INTO `category` VALUES (7, 'C', 2, '0,1,2');
INSERT INTO `category` VALUES (8, 'C#', 2, '0,1,2');
INSERT INTO `category` VALUES (9, '.NET', 2, '0,1,2');
INSERT INTO `category` VALUES (10, 'Hadoop', 2, '0,1,2');
INSERT INTO `category` VALUES (11, 'Python', 2, '0,1,2');
INSERT INTO `category` VALUES (12, 'Delphi', 2, '0,1,2');
INSERT INTO `category` VALUES (13, 'VB', 2, '0,1,2');
INSERT INTO `category` VALUES (14, 'Perl', 2, '0,1,2');
INSERT INTO `category` VALUES (15, 'Ruby', 2, '0,1,2');
INSERT INTO `category` VALUES (16, 'Node.js', 2, '0,1,2');
INSERT INTO `category` VALUES (17, '搜索算法', 2, '0,1,2');
INSERT INTO `category` VALUES (18, 'Golang', 2, '0,1,2');
INSERT INTO `category` VALUES (19, '自然语言处理', 2, '0,1,2');
INSERT INTO `category` VALUES (20, '推荐算法', 2, '0,1,2');
INSERT INTO `category` VALUES (21, 'Erlang', 2, '0,1,2');
INSERT INTO `category` VALUES (22, '算法工程师', 2, '0,1,2');
INSERT INTO `category` VALUES (23, '语音/视频/图形开发', 2, '0,1,2');
INSERT INTO `category` VALUES (24, '数据采集', 2, '0,1,2');
INSERT INTO `category` VALUES (25, '移动开发', 1, '0,1');
INSERT INTO `category` VALUES (26, 'HTML5', 25, '0,1,25');
INSERT INTO `category` VALUES (27, 'Android', 25, '0,1,25');
INSERT INTO `category` VALUES (28, 'iOS', 25, '0,1,25');
INSERT INTO `category` VALUES (29, 'WP', 25, '0,1,25');
INSERT INTO `category` VALUES (30, 'web前端', 25, '0,1,25');
INSERT INTO `category` VALUES (31, 'Flash', 25, '0,1,25');
INSERT INTO `category` VALUES (32, 'JavaScript', 25, '0,1,25');
INSERT INTO `category` VALUES (33, 'U3D', 25, '0,1,25');
INSERT INTO `category` VALUES (34, 'COCOS2DX', 25, '0,1,25');
INSERT INTO `category` VALUES (35, '测试', 1, '0,1');
INSERT INTO `category` VALUES (36, '测试工程师', 35, '0,1,35');
INSERT INTO `category` VALUES (37, '自动化测试', 35, '0,1,35');
INSERT INTO `category` VALUES (38, '功能测试', 35, '0,1,35');
INSERT INTO `category` VALUES (39, '性能测试', 35, '0,1,35');
INSERT INTO `category` VALUES (40, '测试开发', 35, '0,1,35');
INSERT INTO `category` VALUES (41, '移动端测试', 35, '0,1,35');
INSERT INTO `category` VALUES (42, '游戏测试', 35, '0,1,35');
INSERT INTO `category` VALUES (43, '硬件测试', 35, '0,1,35');
INSERT INTO `category` VALUES (44, '软件测试', 35, '0,1,35');
INSERT INTO `category` VALUES (45, '运维/技术支持', 1, '0,1');
INSERT INTO `category` VALUES (46, '运维工程师', 45, '0,1,45');
INSERT INTO `category` VALUES (47, '运维开发工程师', 45, '0,1,45');
INSERT INTO `category` VALUES (48, '网络工程师', 45, '0,1,45');
INSERT INTO `category` VALUES (49, '系统工程师', 45, '0,1,45');
INSERT INTO `category` VALUES (50, 'IT技术支持', 45, '0,1,45');
INSERT INTO `category` VALUES (51, '系统管理员', 45, '0,1,45');
INSERT INTO `category` VALUES (52, '网络安全', 45, '0,1,45');
INSERT INTO `category` VALUES (53, '系统安全', 45, '0,1,45');
INSERT INTO `category` VALUES (54, 'DBA', 45, '0,1,45');
INSERT INTO `category` VALUES (55, '数据', 1, '0,1');
INSERT INTO `category` VALUES (56, 'ETL工程师', 55, '0,1,55');
INSERT INTO `category` VALUES (57, '数据仓库', 55, '0,1,55');
INSERT INTO `category` VALUES (58, '数据开发', 55, '0,1,55');
INSERT INTO `category` VALUES (59, '数据挖掘', 55, '0,1,55');
INSERT INTO `category` VALUES (60, '数据分析师', 55, '0,1,55');
INSERT INTO `category` VALUES (61, '数据架构师', 55, '0,1,55');
INSERT INTO `category` VALUES (62, '算法研究员', 55, '0,1,55');
INSERT INTO `category` VALUES (63, '项目管理', 1, '0,1');
INSERT INTO `category` VALUES (64, '项目经理', 63, '0,1,63');
INSERT INTO `category` VALUES (65, '项目主管', 63, '0,1,63');
INSERT INTO `category` VALUES (66, '项目助理', 63, '0,1,63');
INSERT INTO `category` VALUES (67, '项目专员', 63, '0,1,63');
INSERT INTO `category` VALUES (68, '实施顾问', 63, '0,1,63');
INSERT INTO `category` VALUES (69, '实施工程师', 63, '0,1,63');
INSERT INTO `category` VALUES (70, '需求分析工程师', 63, '0,1,63');
INSERT INTO `category` VALUES (71, '硬件开发', 1, '0,1');
INSERT INTO `category` VALUES (72, '硬件', 71, '0,1,71');
INSERT INTO `category` VALUES (73, '嵌入式', 71, '0,1,71');
INSERT INTO `category` VALUES (74, '自动化', 71, '0,1,71');
INSERT INTO `category` VALUES (75, '单片机', 71, '0,1,71');
INSERT INTO `category` VALUES (76, '电路设计', 71, '0,1,71');
INSERT INTO `category` VALUES (77, '驱动开发', 71, '0,1,71');
INSERT INTO `category` VALUES (78, '系统集成', 71, '0,1,71');
INSERT INTO `category` VALUES (79, 'FPGA开发', 71, '0,1,71');
INSERT INTO `category` VALUES (80, 'DSP开发', 71, '0,1,71');
INSERT INTO `category` VALUES (81, 'ARM开发', 71, '0,1,71');
INSERT INTO `category` VALUES (82, 'PCB工艺', 71, '0,1,71');
INSERT INTO `category` VALUES (83, '模具设计', 71, '0,1,71');
INSERT INTO `category` VALUES (84, '热传导', 71, '0,1,71');
INSERT INTO `category` VALUES (85, '材料工程师', 71, '0,1,71');
INSERT INTO `category` VALUES (86, '精益工程师', 71, '0,1,71');
INSERT INTO `category` VALUES (87, '射频工程师', 71, '0,1,71');
INSERT INTO `category` VALUES (88, '前端开发', 1, '0,1');
INSERT INTO `category` VALUES (89, 'web前端', 88, '0,1,88');
INSERT INTO `category` VALUES (90, 'Javascript', 88, '0,1,88');
INSERT INTO `category` VALUES (91, 'Flash', 88, '0,1,88');
INSERT INTO `category` VALUES (92, 'HTML5', 88, '0,1,88');
INSERT INTO `category` VALUES (93, '通信', 1, '0,1');
INSERT INTO `category` VALUES (94, '通信技术工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (95, '通信研发工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (96, '数据通信工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (97, '移动通信工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (98, '电信网络工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (99, '电信交换工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (100, '有线传输工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (101, '无线射频工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (102, '通信电源工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (103, '通信标准化工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (104, '通信项目专员', 93, '0,1,93');
INSERT INTO `category` VALUES (105, '通信项目经理', 93, '0,1,93');
INSERT INTO `category` VALUES (106, '核心网工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (107, '通信测试工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (108, '通信设备工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (109, '光通信工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (110, '光传输工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (111, '光网络工程师', 93, '0,1,93');
INSERT INTO `category` VALUES (112, '电子/半导体', 1, '0,1');
INSERT INTO `category` VALUES (113, '电子工程师', 112, '0,1,112');
INSERT INTO `category` VALUES (114, '电气工程师', 112, '0,1,112');
INSERT INTO `category` VALUES (115, 'FAE', 112, '0,1,112');
INSERT INTO `category` VALUES (116, '电气设计工程师', 112, '0,1,112');
INSERT INTO `category` VALUES (117, '高端技术职位', 1, '0,1');
INSERT INTO `category` VALUES (118, '技术经理', 117, '0,1,117');
INSERT INTO `category` VALUES (119, '技术总监', 117, '0,1,117');
INSERT INTO `category` VALUES (120, '测试经理', 117, '0,1,117');
INSERT INTO `category` VALUES (121, '架构师', 117, '0,1,117');
INSERT INTO `category` VALUES (122, 'CTO', 117, '0,1,117');
INSERT INTO `category` VALUES (123, '运维总监', 117, '0,1,117');
INSERT INTO `category` VALUES (124, '技术合伙人', 117, '0,1,117');
INSERT INTO `category` VALUES (125, '人工智能', 1, '0,1');
INSERT INTO `category` VALUES (126, '机器学习', 125, '0,1,125');
INSERT INTO `category` VALUES (127, '深度学习', 125, '0,1,125');
INSERT INTO `category` VALUES (128, '图像算法', 125, '0,1,125');
INSERT INTO `category` VALUES (129, '图像处理', 125, '0,1,125');
INSERT INTO `category` VALUES (130, '语音识别', 125, '0,1,125');
INSERT INTO `category` VALUES (131, '图像识别', 125, '0,1,125');
INSERT INTO `category` VALUES (132, '算法研究员', 125, '0,1,125');
INSERT INTO `category` VALUES (133, '软件销售支持', 1, '0,1');
INSERT INTO `category` VALUES (134, '售前工程师', 133, '0,1,133');
INSERT INTO `category` VALUES (135, '售后工程师', 133, '0,1,133');
INSERT INTO `category` VALUES (136, '其他技术职位', 1, '0,1');
INSERT INTO `category` VALUES (137, '其他技术职位', 136, '0,1,136');
INSERT INTO `category` VALUES (138, '产品', 0, '0');
INSERT INTO `category` VALUES (139, '产品经理', 138, '0,138');
INSERT INTO `category` VALUES (140, '产品经理', 139, '0,138,139');
INSERT INTO `category` VALUES (141, '网页产品经理', 139, '0,138,139');
INSERT INTO `category` VALUES (142, '移动产品经理', 139, '0,138,139');
INSERT INTO `category` VALUES (143, '产品助理', 139, '0,138,139');
INSERT INTO `category` VALUES (144, '数据产品经理', 139, '0,138,139');
INSERT INTO `category` VALUES (145, '电商产品经理', 139, '0,138,139');
INSERT INTO `category` VALUES (146, '游戏策划', 139, '0,138,139');
INSERT INTO `category` VALUES (147, '产品专员', 139, '0,138,139');
INSERT INTO `category` VALUES (148, '高端产品职位', 138, '0,138');
INSERT INTO `category` VALUES (149, '产品总监', 148, '0,138,148');
INSERT INTO `category` VALUES (150, '游戏制作人', 148, '0,138,148');
INSERT INTO `category` VALUES (151, '产品VP', 148, '0,138,148');
INSERT INTO `category` VALUES (152, '其他产品职位', 138, '0,138');
INSERT INTO `category` VALUES (153, '其他产品职位', 152, '0,138,152');
INSERT INTO `category` VALUES (154, '设计', 0, '0');
INSERT INTO `category` VALUES (155, '视觉设计', 154, '0,154');
INSERT INTO `category` VALUES (156, '视觉设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (157, '网页设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (158, 'Flash设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (159, 'APP设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (160, 'UI设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (161, '平面设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (162, '美术设计师（2D/3D）', 155, '0,154,155');
INSERT INTO `category` VALUES (163, '广告设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (164, '多媒体设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (165, '原画师', 155, '0,154,155');
INSERT INTO `category` VALUES (166, '游戏特效', 155, '0,154,155');
INSERT INTO `category` VALUES (167, '游戏界面设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (168, '游戏场景', 155, '0,154,155');
INSERT INTO `category` VALUES (169, '游戏角色', 155, '0,154,155');
INSERT INTO `category` VALUES (170, '游戏动作', 155, '0,154,155');
INSERT INTO `category` VALUES (171, '三维/CAD/制图', 155, '0,154,155');
INSERT INTO `category` VALUES (172, '美工', 155, '0,154,155');
INSERT INTO `category` VALUES (173, '包装设计', 155, '0,154,155');
INSERT INTO `category` VALUES (174, '设计师助理', 155, '0,154,155');
INSERT INTO `category` VALUES (175, '动画设计师', 155, '0,154,155');
INSERT INTO `category` VALUES (176, '插画师', 155, '0,154,155');
INSERT INTO `category` VALUES (177, '交互设计', 154, '0,154');
INSERT INTO `category` VALUES (178, '交互设计师', 177, '0,154,177');
INSERT INTO `category` VALUES (179, '无线交互设计师', 177, '0,154,177');
INSERT INTO `category` VALUES (180, '网页交互设计师', 177, '0,154,177');
INSERT INTO `category` VALUES (181, '硬件交互设计师', 177, '0,154,177');
INSERT INTO `category` VALUES (182, '用户研究', 154, '0,154');
INSERT INTO `category` VALUES (183, '数据分析师', 182, '0,154,182');
INSERT INTO `category` VALUES (184, '用户研究员', 182, '0,154,182');
INSERT INTO `category` VALUES (185, '游戏数值策划', 182, '0,154,182');
INSERT INTO `category` VALUES (186, 'UX设计师', 182, '0,154,182');
INSERT INTO `category` VALUES (187, '用户研究经理', 182, '0,154,182');
INSERT INTO `category` VALUES (188, '用户研究总监', 182, '0,154,182');
INSERT INTO `category` VALUES (189, '高端设计职位', 154, '0,154');
INSERT INTO `category` VALUES (190, '设计经理/主管', 189, '0,154,189');
INSERT INTO `category` VALUES (191, '设计总监', 189, '0,154,189');
INSERT INTO `category` VALUES (192, '视觉设计经理', 189, '0,154,189');
INSERT INTO `category` VALUES (193, '视觉设计总监', 189, '0,154,189');
INSERT INTO `category` VALUES (194, '交互设计经理/主管', 189, '0,154,189');
INSERT INTO `category` VALUES (195, '交互设计总监', 189, '0,154,189');
INSERT INTO `category` VALUES (196, '非视觉设计', 154, '0,154');
INSERT INTO `category` VALUES (197, '服装设计', 196, '0,154,196');
INSERT INTO `category` VALUES (198, '工业设计', 196, '0,154,196');
INSERT INTO `category` VALUES (199, '橱柜设计', 196, '0,154,196');
INSERT INTO `category` VALUES (200, '家具设计', 196, '0,154,196');
INSERT INTO `category` VALUES (201, '家居设计', 196, '0,154,196');
INSERT INTO `category` VALUES (202, '珠宝设计', 196, '0,154,196');
INSERT INTO `category` VALUES (203, '室内设计', 196, '0,154,196');
INSERT INTO `category` VALUES (204, '陈列设计', 196, '0,154,196');
INSERT INTO `category` VALUES (205, '景观设计', 196, '0,154,196');
INSERT INTO `category` VALUES (206, '其他设计职位', 154, '0,154');
INSERT INTO `category` VALUES (207, '其他设计职位', 206, '0,154,206');
INSERT INTO `category` VALUES (208, '运营', 0, '0');
INSERT INTO `category` VALUES (209, '运营', 208, '0,208');
INSERT INTO `category` VALUES (210, '用户运营', 209, '0,208,209');
INSERT INTO `category` VALUES (211, '产品运营', 209, '0,208,209');
INSERT INTO `category` VALUES (212, '数据运营', 209, '0,208,209');
INSERT INTO `category` VALUES (213, '内容运营', 209, '0,208,209');
INSERT INTO `category` VALUES (214, '活动运营', 209, '0,208,209');
INSERT INTO `category` VALUES (215, '商家运营', 209, '0,208,209');
INSERT INTO `category` VALUES (216, '品类运营', 209, '0,208,209');
INSERT INTO `category` VALUES (217, '游戏运营', 209, '0,208,209');
INSERT INTO `category` VALUES (218, '网络推广', 209, '0,208,209');
INSERT INTO `category` VALUES (219, '网站运营', 209, '0,208,209');
INSERT INTO `category` VALUES (220, '新媒体运营', 209, '0,208,209');
INSERT INTO `category` VALUES (221, '社区运营', 209, '0,208,209');
INSERT INTO `category` VALUES (222, '微信运营', 209, '0,208,209');
INSERT INTO `category` VALUES (223, '微博运营', 209, '0,208,209');
INSERT INTO `category` VALUES (224, '策略运营', 209, '0,208,209');
INSERT INTO `category` VALUES (225, '线下拓展运营', 209, '0,208,209');
INSERT INTO `category` VALUES (226, '电商运营', 209, '0,208,209');
INSERT INTO `category` VALUES (227, '运营助理/专员', 209, '0,208,209');
INSERT INTO `category` VALUES (228, '内容审核', 209, '0,208,209');
INSERT INTO `category` VALUES (229, '销售运营', 209, '0,208,209');
INSERT INTO `category` VALUES (230, '编辑', 208, '0,208');
INSERT INTO `category` VALUES (231, '副主编', 230, '0,208,230');
INSERT INTO `category` VALUES (232, '内容编辑', 230, '0,208,230');
INSERT INTO `category` VALUES (233, '文案策划', 230, '0,208,230');
INSERT INTO `category` VALUES (234, '网站编辑', 230, '0,208,230');
INSERT INTO `category` VALUES (235, '记者', 230, '0,208,230');
INSERT INTO `category` VALUES (236, '采编', 230, '0,208,230');
INSERT INTO `category` VALUES (237, '客服', 208, '0,208');
INSERT INTO `category` VALUES (238, '售前咨询', 237, '0,208,237');
INSERT INTO `category` VALUES (239, '售后咨询', 237, '0,208,237');
INSERT INTO `category` VALUES (240, '网络客服', 237, '0,208,237');
INSERT INTO `category` VALUES (241, '客服经理', 237, '0,208,237');
INSERT INTO `category` VALUES (242, '客服专员/助理', 237, '0,208,237');
INSERT INTO `category` VALUES (243, '客服主管', 237, '0,208,237');
INSERT INTO `category` VALUES (244, '客服总监', 237, '0,208,237');
INSERT INTO `category` VALUES (245, '电话客服', 237, '0,208,237');
INSERT INTO `category` VALUES (246, '咨询热线/呼叫中心客服', 237, '0,208,237');
INSERT INTO `category` VALUES (247, '高端运营职位', 208, '0,208');
INSERT INTO `category` VALUES (248, '主编', 247, '0,208,247');
INSERT INTO `category` VALUES (249, '运营总监', 247, '0,208,247');
INSERT INTO `category` VALUES (250, 'COO', 247, '0,208,247');
INSERT INTO `category` VALUES (251, '客服总监', 247, '0,208,247');
INSERT INTO `category` VALUES (252, '运营经理/主管', 247, '0,208,247');
INSERT INTO `category` VALUES (253, '其他运营职位', 208, '0,208');
INSERT INTO `category` VALUES (254, '其他运营职位', 253, '0,208,253');
INSERT INTO `category` VALUES (255, '市场', 0, '0');
INSERT INTO `category` VALUES (256, '市场/营销', 255, '0,255');
INSERT INTO `category` VALUES (257, '市场营销', 256, '0,255,256');
INSERT INTO `category` VALUES (258, '市场策划', 256, '0,255,256');
INSERT INTO `category` VALUES (259, '市场顾问', 256, '0,255,256');
INSERT INTO `category` VALUES (260, '市场推广', 256, '0,255,256');
INSERT INTO `category` VALUES (261, 'SEO', 256, '0,255,256');
INSERT INTO `category` VALUES (262, 'SEM', 256, '0,255,256');
INSERT INTO `category` VALUES (263, '商务渠道', 256, '0,255,256');
INSERT INTO `category` VALUES (264, '商业数据分析', 256, '0,255,256');
INSERT INTO `category` VALUES (265, '活动策划', 256, '0,255,256');
INSERT INTO `category` VALUES (266, '网络营销', 256, '0,255,256');
INSERT INTO `category` VALUES (267, '海外市场', 256, '0,255,256');
INSERT INTO `category` VALUES (268, '政府关系', 256, '0,255,256');
INSERT INTO `category` VALUES (269, 'APP推广', 256, '0,255,256');
INSERT INTO `category` VALUES (270, '公关媒介', 255, '0,255');
INSERT INTO `category` VALUES (271, '媒介经理', 270, '0,255,270');
INSERT INTO `category` VALUES (272, '广告协调', 270, '0,255,270');
INSERT INTO `category` VALUES (273, '品牌公关', 270, '0,255,270');
INSERT INTO `category` VALUES (274, '媒介专员', 270, '0,255,270');
INSERT INTO `category` VALUES (275, '活动策划执行', 270, '0,255,270');
INSERT INTO `category` VALUES (276, '媒介策划', 270, '0,255,270');
INSERT INTO `category` VALUES (277, '会务会展', 255, '0,255');
INSERT INTO `category` VALUES (278, '会议活动销售', 277, '0,255,277');
INSERT INTO `category` VALUES (279, '会议活动策划', 277, '0,255,277');
INSERT INTO `category` VALUES (280, '会议活动执行', 277, '0,255,277');
INSERT INTO `category` VALUES (281, '会展活动销售', 277, '0,255,277');
INSERT INTO `category` VALUES (282, '会展活动策划', 277, '0,255,277');
INSERT INTO `category` VALUES (283, '会展活动执行', 277, '0,255,277');
INSERT INTO `category` VALUES (284, '广告', 255, '0,255');
INSERT INTO `category` VALUES (285, '广告创意', 284, '0,255,284');
INSERT INTO `category` VALUES (286, '美术指导', 284, '0,255,284');
INSERT INTO `category` VALUES (287, '广告设计师', 284, '0,255,284');
INSERT INTO `category` VALUES (288, '策划经理', 284, '0,255,284');
INSERT INTO `category` VALUES (289, '文案', 284, '0,255,284');
INSERT INTO `category` VALUES (290, '广告制作', 284, '0,255,284');
INSERT INTO `category` VALUES (291, '媒介投放', 284, '0,255,284');
INSERT INTO `category` VALUES (292, '媒介合作', 284, '0,255,284');
INSERT INTO `category` VALUES (293, '媒介顾问', 284, '0,255,284');
INSERT INTO `category` VALUES (294, '广告审核', 284, '0,255,284');
INSERT INTO `category` VALUES (295, '高端市场职位', 255, '0,255');
INSERT INTO `category` VALUES (296, '市场总监', 295, '0,255,295');
INSERT INTO `category` VALUES (297, 'CMO', 295, '0,255,295');
INSERT INTO `category` VALUES (298, '公关总监', 295, '0,255,295');
INSERT INTO `category` VALUES (299, '媒介总监', 295, '0,255,295');
INSERT INTO `category` VALUES (300, '创意总监', 295, '0,255,295');
INSERT INTO `category` VALUES (301, '其他市场职位', 255, '0,255');
INSERT INTO `category` VALUES (302, '其他市场职位', 301, '0,255,301');
INSERT INTO `category` VALUES (303, '职能/高级管理', 0, '0');
INSERT INTO `category` VALUES (304, '人力资源', 303, '0,303');
INSERT INTO `category` VALUES (305, '人力资源主管', 304, '0,303,304');
INSERT INTO `category` VALUES (306, '招聘', 304, '0,303,304');
INSERT INTO `category` VALUES (307, 'HRBP', 304, '0,303,304');
INSERT INTO `category` VALUES (308, '人力资源专员/助理', 304, '0,303,304');
INSERT INTO `category` VALUES (309, '培训', 304, '0,303,304');
INSERT INTO `category` VALUES (310, '薪资福利', 304, '0,303,304');
INSERT INTO `category` VALUES (311, '绩效考核', 304, '0,303,304');
INSERT INTO `category` VALUES (312, '人力资源经理', 304, '0,303,304');
INSERT INTO `category` VALUES (313, '人力资源VP/CHO', 304, '0,303,304');
INSERT INTO `category` VALUES (314, '人力资源总监', 304, '0,303,304');
INSERT INTO `category` VALUES (315, '员工关系', 304, '0,303,304');
INSERT INTO `category` VALUES (316, '组织发展', 304, '0,303,304');
INSERT INTO `category` VALUES (317, '行政', 303, '0,303');
INSERT INTO `category` VALUES (318, '行政专员/助理', 317, '0,303,317');
INSERT INTO `category` VALUES (319, '前台', 317, '0,303,317');
INSERT INTO `category` VALUES (320, '行政主管', 317, '0,303,317');
INSERT INTO `category` VALUES (321, '经理助理', 317, '0,303,317');
INSERT INTO `category` VALUES (322, '后勤', 317, '0,303,317');
INSERT INTO `category` VALUES (323, '商务司机', 317, '0,303,317');
INSERT INTO `category` VALUES (324, '行政经理', 317, '0,303,317');
INSERT INTO `category` VALUES (325, '行政总监', 317, '0,303,317');
INSERT INTO `category` VALUES (326, '财务', 303, '0,303');
INSERT INTO `category` VALUES (327, '会计', 326, '0,303,326');
INSERT INTO `category` VALUES (328, '出纳', 326, '0,303,326');
INSERT INTO `category` VALUES (329, '财务顾问', 326, '0,303,326');
INSERT INTO `category` VALUES (330, '结算', 326, '0,303,326');
INSERT INTO `category` VALUES (331, '税务', 326, '0,303,326');
INSERT INTO `category` VALUES (332, '审计', 326, '0,303,326');
INSERT INTO `category` VALUES (333, '风控', 326, '0,303,326');
INSERT INTO `category` VALUES (334, '财务经理', 326, '0,303,326');
INSERT INTO `category` VALUES (335, 'CFO', 326, '0,303,326');
INSERT INTO `category` VALUES (336, '财务总监', 326, '0,303,326');
INSERT INTO `category` VALUES (337, '财务主管', 326, '0,303,326');
INSERT INTO `category` VALUES (338, '法务', 303, '0,303');
INSERT INTO `category` VALUES (339, '法务专员/助理', 338, '0,303,338');
INSERT INTO `category` VALUES (340, '律师', 338, '0,303,338');
INSERT INTO `category` VALUES (341, '专利', 338, '0,303,338');
INSERT INTO `category` VALUES (342, '法律顾问', 338, '0,303,338');
INSERT INTO `category` VALUES (343, '法务主管', 338, '0,303,338');
INSERT INTO `category` VALUES (344, '法务经理', 338, '0,303,338');
INSERT INTO `category` VALUES (345, '法务总监', 338, '0,303,338');
INSERT INTO `category` VALUES (346, '高级管理职位', 303, '0,303');
INSERT INTO `category` VALUES (347, 'CEO/总裁/总经理', 346, '0,303,346');
INSERT INTO `category` VALUES (348, '副总裁/副总经理', 346, '0,303,346');
INSERT INTO `category` VALUES (349, '事业部负责人', 346, '0,303,346');
INSERT INTO `category` VALUES (350, '区域/分公司/代表处负责人', 346, '0,303,346');
INSERT INTO `category` VALUES (351, '总裁/总经理/董事长助理', 346, '0,303,346');
INSERT INTO `category` VALUES (352, '合伙人', 346, '0,303,346');
INSERT INTO `category` VALUES (353, '创始人', 346, '0,303,346');
INSERT INTO `category` VALUES (354, '董事会秘书', 346, '0,303,346');
INSERT INTO `category` VALUES (355, '其他职能职位', 303, '0,303');
INSERT INTO `category` VALUES (356, '其他职能职位', 355, '0,303,355');
INSERT INTO `category` VALUES (357, '销售', 0, '0');
INSERT INTO `category` VALUES (358, '销售', 357, '0,357');
INSERT INTO `category` VALUES (359, '销售专员', 358, '0,357,358');
INSERT INTO `category` VALUES (360, '销售经理', 358, '0,357,358');
INSERT INTO `category` VALUES (361, '客户代表', 358, '0,357,358');
INSERT INTO `category` VALUES (362, '大客户代表', 358, '0,357,358');
INSERT INTO `category` VALUES (363, 'BD经理', 358, '0,357,358');
INSERT INTO `category` VALUES (364, '商务渠道', 358, '0,357,358');
INSERT INTO `category` VALUES (365, '渠道销售', 358, '0,357,358');
INSERT INTO `category` VALUES (366, '代理商销售', 358, '0,357,358');
INSERT INTO `category` VALUES (367, '销售助理', 358, '0,357,358');
INSERT INTO `category` VALUES (368, '电话销售', 358, '0,357,358');
INSERT INTO `category` VALUES (369, '销售顾问', 358, '0,357,358');
INSERT INTO `category` VALUES (370, '商品经理', 358, '0,357,358');
INSERT INTO `category` VALUES (371, '广告销售', 358, '0,357,358');
INSERT INTO `category` VALUES (372, '网络营销', 358, '0,357,358');
INSERT INTO `category` VALUES (373, '营销主管', 358, '0,357,358');
INSERT INTO `category` VALUES (374, '销售工程师', 358, '0,357,358');
INSERT INTO `category` VALUES (375, '客户经理', 358, '0,357,358');
INSERT INTO `category` VALUES (376, '销售管理', 357, '0,357');
INSERT INTO `category` VALUES (377, '销售总监', 376, '0,357,376');
INSERT INTO `category` VALUES (378, '商务总监', 376, '0,357,376');
INSERT INTO `category` VALUES (379, '区域总监', 376, '0,357,376');
INSERT INTO `category` VALUES (380, '城市经理', 376, '0,357,376');
INSERT INTO `category` VALUES (381, '销售VP', 376, '0,357,376');
INSERT INTO `category` VALUES (382, '团队经理', 376, '0,357,376');
INSERT INTO `category` VALUES (383, '其他销售职位', 357, '0,357');
INSERT INTO `category` VALUES (384, '其他销售职位', 383, '0,357,383');
INSERT INTO `category` VALUES (385, '传媒', 0, '0');
INSERT INTO `category` VALUES (386, '采编/写作/出版', 385, '0,385');
INSERT INTO `category` VALUES (387, '记者', 386, '0,385,386');
INSERT INTO `category` VALUES (388, '编辑', 386, '0,385,386');
INSERT INTO `category` VALUES (389, '采编', 386, '0,385,386');
INSERT INTO `category` VALUES (390, '撰稿人', 386, '0,385,386');
INSERT INTO `category` VALUES (391, '出版发行', 386, '0,385,386');
INSERT INTO `category` VALUES (392, '校对录入', 386, '0,385,386');
INSERT INTO `category` VALUES (393, '总编', 386, '0,385,386');
INSERT INTO `category` VALUES (394, '自媒体', 386, '0,385,386');
INSERT INTO `category` VALUES (395, '公关媒介', 385, '0,385');
INSERT INTO `category` VALUES (396, '媒介经理', 395, '0,385,395');
INSERT INTO `category` VALUES (397, '媒介专员', 395, '0,385,395');
INSERT INTO `category` VALUES (398, '广告协调', 395, '0,385,395');
INSERT INTO `category` VALUES (399, '品牌公关', 395, '0,385,395');
INSERT INTO `category` VALUES (400, '活动策划执行', 395, '0,385,395');
INSERT INTO `category` VALUES (401, '媒介策划', 395, '0,385,395');
INSERT INTO `category` VALUES (402, '会务会展', 385, '0,385');
INSERT INTO `category` VALUES (403, '会议活动销售', 402, '0,385,402');
INSERT INTO `category` VALUES (404, '会议活动策划', 402, '0,385,402');
INSERT INTO `category` VALUES (405, '会议活动执行', 402, '0,385,402');
INSERT INTO `category` VALUES (406, '会展活动销售', 402, '0,385,402');
INSERT INTO `category` VALUES (407, '会展活动策划', 402, '0,385,402');
INSERT INTO `category` VALUES (408, '会展活动执行', 402, '0,385,402');
INSERT INTO `category` VALUES (409, '广告', 385, '0,385');
INSERT INTO `category` VALUES (410, '广告创意', 409, '0,385,409');
INSERT INTO `category` VALUES (411, '美术指导', 409, '0,385,409');
INSERT INTO `category` VALUES (412, '广告设计师', 409, '0,385,409');
INSERT INTO `category` VALUES (413, '策划经理', 409, '0,385,409');
INSERT INTO `category` VALUES (414, '文案', 409, '0,385,409');
INSERT INTO `category` VALUES (415, '广告制作', 409, '0,385,409');
INSERT INTO `category` VALUES (416, '媒介投放', 409, '0,385,409');
INSERT INTO `category` VALUES (417, '媒介合作', 409, '0,385,409');
INSERT INTO `category` VALUES (418, '媒介顾问', 409, '0,385,409');
INSERT INTO `category` VALUES (419, '广告审核', 409, '0,385,409');
INSERT INTO `category` VALUES (420, '影视媒体', 385, '0,385');
INSERT INTO `category` VALUES (421, '助理', 420, '0,385,420');
INSERT INTO `category` VALUES (422, '统筹制片人', 420, '0,385,420');
INSERT INTO `category` VALUES (423, '执行制片人', 420, '0,385,420');
INSERT INTO `category` VALUES (424, '导演/编导', 420, '0,385,420');
INSERT INTO `category` VALUES (425, '摄影/影像师', 420, '0,385,420');
INSERT INTO `category` VALUES (426, '视频编辑', 420, '0,385,420');
INSERT INTO `category` VALUES (427, '音频编辑', 420, '0,385,420');
INSERT INTO `category` VALUES (428, '经纪人', 420, '0,385,420');
INSERT INTO `category` VALUES (429, '后期制作', 420, '0,385,420');
INSERT INTO `category` VALUES (430, '影视制作', 420, '0,385,420');
INSERT INTO `category` VALUES (431, '影视发行', 420, '0,385,420');
INSERT INTO `category` VALUES (432, '影视策划', 420, '0,385,420');
INSERT INTO `category` VALUES (433, '主持人/主播/DJ', 420, '0,385,420');
INSERT INTO `category` VALUES (434, '演员/配音/模特', 420, '0,385,420');
INSERT INTO `category` VALUES (435, '化妆/造型/服装', 420, '0,385,420');
INSERT INTO `category` VALUES (436, '放映管理', 420, '0,385,420');
INSERT INTO `category` VALUES (437, '录音/音效', 420, '0,385,420');
INSERT INTO `category` VALUES (438, '制片人', 420, '0,385,420');
INSERT INTO `category` VALUES (439, '编剧', 420, '0,385,420');
INSERT INTO `category` VALUES (440, '其他传媒职位', 385, '0,385');
INSERT INTO `category` VALUES (441, '其他传媒职位', 440, '0,385,440');
INSERT INTO `category` VALUES (442, '金融', 0, '0');
INSERT INTO `category` VALUES (443, '投融资', 442, '0,442');
INSERT INTO `category` VALUES (444, '投资经理', 443, '0,442,443');
INSERT INTO `category` VALUES (445, '行业研究', 443, '0,442,443');
INSERT INTO `category` VALUES (446, '资产管理', 443, '0,442,443');
INSERT INTO `category` VALUES (447, '投资总监', 443, '0,442,443');
INSERT INTO `category` VALUES (448, '投资VP', 443, '0,442,443');
INSERT INTO `category` VALUES (449, '投资合伙人', 443, '0,442,443');
INSERT INTO `category` VALUES (450, '融资', 443, '0,442,443');
INSERT INTO `category` VALUES (451, '并购', 443, '0,442,443');
INSERT INTO `category` VALUES (452, '投后管理', 443, '0,442,443');
INSERT INTO `category` VALUES (453, '投资助理', 443, '0,442,443');
INSERT INTO `category` VALUES (454, '其他投融资职位', 443, '0,442,443');
INSERT INTO `category` VALUES (455, '投资顾问', 443, '0,442,443');
INSERT INTO `category` VALUES (456, '风控', 442, '0,442');
INSERT INTO `category` VALUES (457, '风控', 456, '0,442,456');
INSERT INTO `category` VALUES (458, '律师', 456, '0,442,456');
INSERT INTO `category` VALUES (459, '资信评估', 456, '0,442,456');
INSERT INTO `category` VALUES (460, '合规稽查', 456, '0,442,456');
INSERT INTO `category` VALUES (461, '税务审计', 442, '0,442');
INSERT INTO `category` VALUES (462, '审计', 461, '0,442,461');
INSERT INTO `category` VALUES (463, '法务', 461, '0,442,461');
INSERT INTO `category` VALUES (464, '会计', 461, '0,442,461');
INSERT INTO `category` VALUES (465, '清算', 461, '0,442,461');
INSERT INTO `category` VALUES (466, '银行', 442, '0,442');
INSERT INTO `category` VALUES (467, '信用卡销售', 466, '0,442,466');
INSERT INTO `category` VALUES (468, '分析师', 466, '0,442,466');
INSERT INTO `category` VALUES (469, '柜员', 466, '0,442,466');
INSERT INTO `category` VALUES (470, '商务渠道', 466, '0,442,466');
INSERT INTO `category` VALUES (471, '大堂经理', 466, '0,442,466');
INSERT INTO `category` VALUES (472, '理财顾问', 466, '0,442,466');
INSERT INTO `category` VALUES (473, '客户经理', 466, '0,442,466');
INSERT INTO `category` VALUES (474, '信贷管理', 466, '0,442,466');
INSERT INTO `category` VALUES (475, '风控', 466, '0,442,466');
INSERT INTO `category` VALUES (476, '互联网金融', 442, '0,442');
INSERT INTO `category` VALUES (477, '金融产品经理', 476, '0,442,476');
INSERT INTO `category` VALUES (478, '风控', 476, '0,442,476');
INSERT INTO `category` VALUES (479, '催收员', 476, '0,442,476');
INSERT INTO `category` VALUES (480, '分析师', 476, '0,442,476');
INSERT INTO `category` VALUES (481, '投资经理', 476, '0,442,476');
INSERT INTO `category` VALUES (482, '交易员', 476, '0,442,476');
INSERT INTO `category` VALUES (483, '理财顾问', 476, '0,442,476');
INSERT INTO `category` VALUES (484, '合规稽查', 476, '0,442,476');
INSERT INTO `category` VALUES (485, '审计', 476, '0,442,476');
INSERT INTO `category` VALUES (486, '清算', 476, '0,442,476');
INSERT INTO `category` VALUES (487, '保险', 442, '0,442');
INSERT INTO `category` VALUES (488, '保险业务', 487, '0,442,487');
INSERT INTO `category` VALUES (489, '精算师', 487, '0,442,487');
INSERT INTO `category` VALUES (490, '保险理赔', 487, '0,442,487');
INSERT INTO `category` VALUES (491, '其他金融职位', 442, '0,442');
INSERT INTO `category` VALUES (492, '其他金融职位', 491, '0,442,491');
INSERT INTO `category` VALUES (493, '证券', 442, '0,442');
INSERT INTO `category` VALUES (494, '证券经纪人', 493, '0,442,493');
INSERT INTO `category` VALUES (495, '证券分析师', 493, '0,442,493');
INSERT INTO `category` VALUES (496, '汽车', 0, '0');
INSERT INTO `category` VALUES (497, '汽车设计与研发', 496, '0,496');
INSERT INTO `category` VALUES (498, '汽车设计', 497, '0,496,497');
INSERT INTO `category` VALUES (499, '车身设计', 497, '0,496,497');
INSERT INTO `category` VALUES (500, '底盘设计', 497, '0,496,497');
INSERT INTO `category` VALUES (501, '机械设计', 497, '0,496,497');
INSERT INTO `category` VALUES (502, '动力系统设计', 497, '0,496,497');
INSERT INTO `category` VALUES (503, '电子工程设计', 497, '0,496,497');
INSERT INTO `category` VALUES (504, '零部件设计', 497, '0,496,497');
INSERT INTO `category` VALUES (505, '汽车工程项目管理', 497, '0,496,497');
INSERT INTO `category` VALUES (506, '内外饰设计工程师', 497, '0,496,497');
INSERT INTO `category` VALUES (507, '汽车生产与制造', 496, '0,496');
INSERT INTO `category` VALUES (508, '总装工程师', 507, '0,496,507');
INSERT INTO `category` VALUES (509, '焊接工程师', 507, '0,496,507');
INSERT INTO `category` VALUES (510, '冲压工程师', 507, '0,496,507');
INSERT INTO `category` VALUES (511, '质量工程师', 507, '0,496,507');
INSERT INTO `category` VALUES (512, '汽车销售与服务', 496, '0,496');
INSERT INTO `category` VALUES (513, '汽车销售', 512, '0,496,512');
INSERT INTO `category` VALUES (514, '汽车配件销售', 512, '0,496,512');
INSERT INTO `category` VALUES (515, '汽车售后服务', 512, '0,496,512');
INSERT INTO `category` VALUES (516, '汽车维修', 512, '0,496,512');
INSERT INTO `category` VALUES (517, '汽车美容', 512, '0,496,512');
INSERT INTO `category` VALUES (518, '汽车定损理赔', 512, '0,496,512');
INSERT INTO `category` VALUES (519, '二手车评估师', 512, '0,496,512');
INSERT INTO `category` VALUES (520, '4S店管理', 512, '0,496,512');
INSERT INTO `category` VALUES (521, '汽车改装工程师', 512, '0,496,512');
INSERT INTO `category` VALUES (522, '其他汽车职位', 496, '0,496');
INSERT INTO `category` VALUES (523, '其他汽车职位', 522, '0,496,522');
INSERT INTO `category` VALUES (524, '教育培训', 0, '0');
INSERT INTO `category` VALUES (525, '教育产品研发', 524, '0,524');
INSERT INTO `category` VALUES (526, '课程设计', 525, '0,524,525');
INSERT INTO `category` VALUES (527, '课程编辑', 525, '0,524,525');
INSERT INTO `category` VALUES (528, '教师', 525, '0,524,525');
INSERT INTO `category` VALUES (529, '培训研究', 525, '0,524,525');
INSERT INTO `category` VALUES (530, '培训师', 525, '0,524,525');
INSERT INTO `category` VALUES (531, '培训策划', 525, '0,524,525');
INSERT INTO `category` VALUES (532, '其他教育产品研发职位', 525, '0,524,525');
INSERT INTO `category` VALUES (533, '教育行政', 524, '0,524');
INSERT INTO `category` VALUES (534, '校长', 533, '0,524,533');
INSERT INTO `category` VALUES (535, '教务管理', 533, '0,524,533');
INSERT INTO `category` VALUES (536, '教学管理', 533, '0,524,533');
INSERT INTO `category` VALUES (537, '班主任/辅导员', 533, '0,524,533');
INSERT INTO `category` VALUES (538, '教师', 524, '0,524');
INSERT INTO `category` VALUES (539, '教师', 538, '0,524,538');
INSERT INTO `category` VALUES (540, '助教', 538, '0,524,538');
INSERT INTO `category` VALUES (541, '高中教师', 538, '0,524,538');
INSERT INTO `category` VALUES (542, '初中教师', 538, '0,524,538');
INSERT INTO `category` VALUES (543, '小学教师', 538, '0,524,538');
INSERT INTO `category` VALUES (544, '幼教', 538, '0,524,538');
INSERT INTO `category` VALUES (545, '理科教师', 538, '0,524,538');
INSERT INTO `category` VALUES (546, '文科教师', 538, '0,524,538');
INSERT INTO `category` VALUES (547, '外语教师', 538, '0,524,538');
INSERT INTO `category` VALUES (548, '音乐教师', 538, '0,524,538');
INSERT INTO `category` VALUES (549, '美术教师', 538, '0,524,538');
INSERT INTO `category` VALUES (550, '体育教师', 538, '0,524,538');
INSERT INTO `category` VALUES (551, '就业老师', 538, '0,524,538');
INSERT INTO `category` VALUES (552, 'IT培训', 524, '0,524');
INSERT INTO `category` VALUES (553, 'JAVA培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (554, 'Android培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (555, 'ios培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (556, 'PHP培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (557, '.NET培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (558, 'C++培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (559, 'Unity 3D培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (560, 'Web前端培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (561, '软件测试培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (562, '动漫培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (563, 'UI设计培训讲师', 552, '0,524,552');
INSERT INTO `category` VALUES (564, '职业培训', 524, '0,524');
INSERT INTO `category` VALUES (565, '财会培训讲师', 564, '0,524,564');
INSERT INTO `category` VALUES (566, 'HR培训讲师', 564, '0,524,564');
INSERT INTO `category` VALUES (567, '培训师', 564, '0,524,564');
INSERT INTO `category` VALUES (568, '拓展培训', 564, '0,524,564');
INSERT INTO `category` VALUES (569, '招生', 524, '0,524');
INSERT INTO `category` VALUES (570, '课程顾问', 569, '0,524,569');
INSERT INTO `category` VALUES (571, '招生顾问', 569, '0,524,569');
INSERT INTO `category` VALUES (572, '留学顾问', 569, '0,524,569');
INSERT INTO `category` VALUES (573, '教练', 524, '0,524');
INSERT INTO `category` VALUES (574, '舞蹈教练', 573, '0,524,573');
INSERT INTO `category` VALUES (575, '瑜伽教练', 573, '0,524,573');
INSERT INTO `category` VALUES (576, '瘦身顾问', 573, '0,524,573');
INSERT INTO `category` VALUES (577, '游泳教练', 573, '0,524,573');
INSERT INTO `category` VALUES (578, '健身教练', 573, '0,524,573');
INSERT INTO `category` VALUES (579, '篮球/羽毛球教练', 573, '0,524,573');
INSERT INTO `category` VALUES (580, '跆拳道教练', 573, '0,524,573');
INSERT INTO `category` VALUES (581, '其他教育培训职位', 524, '0,524');
INSERT INTO `category` VALUES (582, '其他教育培训职位', 581, '0,524,581');
INSERT INTO `category` VALUES (583, '医疗健康', 0, '0');
INSERT INTO `category` VALUES (584, '药店', 583, '0,583');
INSERT INTO `category` VALUES (585, '店长', 584, '0,583,584');
INSERT INTO `category` VALUES (586, '执业药师/驻店药师', 584, '0,583,584');
INSERT INTO `category` VALUES (587, '店员/营业员', 584, '0,583,584');
INSERT INTO `category` VALUES (588, '医疗技术', 583, '0,583');
INSERT INTO `category` VALUES (589, '医生助理', 588, '0,583,588');
INSERT INTO `category` VALUES (590, '医学影像', 588, '0,583,588');
INSERT INTO `category` VALUES (591, 'B超医生', 588, '0,583,588');
INSERT INTO `category` VALUES (592, '生物制药', 588, '0,583,588');
INSERT INTO `category` VALUES (593, '药品注册', 588, '0,583,588');
INSERT INTO `category` VALUES (594, '药品生产', 588, '0,583,588');
INSERT INTO `category` VALUES (595, '临床研究', 588, '0,583,588');
INSERT INTO `category` VALUES (596, '临床协调', 588, '0,583,588');
INSERT INTO `category` VALUES (597, '临床数据分析', 588, '0,583,588');
INSERT INTO `category` VALUES (598, '医疗器械注册', 588, '0,583,588');
INSERT INTO `category` VALUES (599, '医疗器械生产/质量管理', 588, '0,583,588');
INSERT INTO `category` VALUES (600, '医学编辑', 588, '0,583,588');
INSERT INTO `category` VALUES (601, '药学编辑', 588, '0,583,588');
INSERT INTO `category` VALUES (602, '医师', 588, '0,583,588');
INSERT INTO `category` VALUES (603, '药剂师', 588, '0,583,588');
INSERT INTO `category` VALUES (604, '医疗器械研究', 588, '0,583,588');
INSERT INTO `category` VALUES (605, '医学总监', 588, '0,583,588');
INSERT INTO `category` VALUES (606, '医药研发', 588, '0,583,588');
INSERT INTO `category` VALUES (607, '验光师', 588, '0,583,588');
INSERT INTO `category` VALUES (608, '放射科医师', 588, '0,583,588');
INSERT INTO `category` VALUES (609, '检验科医师', 588, '0,583,588');
INSERT INTO `category` VALUES (610, '其他医疗技术职位', 588, '0,583,588');
INSERT INTO `category` VALUES (611, '护士/护理', 583, '0,583');
INSERT INTO `category` VALUES (612, '护士长', 611, '0,583,611');
INSERT INTO `category` VALUES (613, '护士/护理', 611, '0,583,611');
INSERT INTO `category` VALUES (614, '医师/医生', 583, '0,583');
INSERT INTO `category` VALUES (615, '医师', 614, '0,583,614');
INSERT INTO `category` VALUES (616, '中医', 614, '0,583,614');
INSERT INTO `category` VALUES (617, '心理医生', 614, '0,583,614');
INSERT INTO `category` VALUES (618, '牙科医生', 614, '0,583,614');
INSERT INTO `category` VALUES (619, '康复治疗师', 614, '0,583,614');
INSERT INTO `category` VALUES (620, '健康整形', 583, '0,583');
INSERT INTO `category` VALUES (621, '营养师', 620, '0,583,620');
INSERT INTO `category` VALUES (622, '整形师', 620, '0,583,620');
INSERT INTO `category` VALUES (623, '理疗师', 620, '0,583,620');
INSERT INTO `category` VALUES (624, '针灸推拿', 620, '0,583,620');
INSERT INTO `category` VALUES (625, '美容师/顾问', 620, '0,583,620');
INSERT INTO `category` VALUES (626, '市场销售', 583, '0,583');
INSERT INTO `category` VALUES (627, '医疗器械销售', 626, '0,583,626');
INSERT INTO `category` VALUES (628, '医学总监', 626, '0,583,626');
INSERT INTO `category` VALUES (629, '医药代表', 626, '0,583,626');
INSERT INTO `category` VALUES (630, '导医', 626, '0,583,626');
INSERT INTO `category` VALUES (631, '健康顾问', 626, '0,583,626');
INSERT INTO `category` VALUES (632, '医美咨询', 626, '0,583,626');
INSERT INTO `category` VALUES (633, '健身', 583, '0,583');
INSERT INTO `category` VALUES (634, '瑜伽教练', 633, '0,583,633');
INSERT INTO `category` VALUES (635, '瘦身顾问', 633, '0,583,633');
INSERT INTO `category` VALUES (636, '游泳教练', 633, '0,583,633');
INSERT INTO `category` VALUES (637, '美体教练', 633, '0,583,633');
INSERT INTO `category` VALUES (638, '舞蹈教练', 633, '0,583,633');
INSERT INTO `category` VALUES (639, '健身教练', 633, '0,583,633');
INSERT INTO `category` VALUES (640, '其他医疗健康类职位', 583, '0,583');
INSERT INTO `category` VALUES (641, '其他医疗健康类职位', 640, '0,583,640');
INSERT INTO `category` VALUES (642, '采购/贸易', 0, '0');
INSERT INTO `category` VALUES (643, '采购', 642, '0,642');
INSERT INTO `category` VALUES (644, '采购总监', 643, '0,642,643');
INSERT INTO `category` VALUES (645, '采购经理', 643, '0,642,643');
INSERT INTO `category` VALUES (646, '采购专员', 643, '0,642,643');
INSERT INTO `category` VALUES (647, '买手', 643, '0,642,643');
INSERT INTO `category` VALUES (648, '采购工程师', 643, '0,642,643');
INSERT INTO `category` VALUES (649, '采购主管', 643, '0,642,643');
INSERT INTO `category` VALUES (650, '采购助理', 643, '0,642,643');
INSERT INTO `category` VALUES (651, '进出口贸易', 642, '0,642');
INSERT INTO `category` VALUES (652, '外贸经理', 651, '0,642,651');
INSERT INTO `category` VALUES (653, '外贸专员', 651, '0,642,651');
INSERT INTO `category` VALUES (654, '外贸业务员', 651, '0,642,651');
INSERT INTO `category` VALUES (655, '贸易跟单', 651, '0,642,651');
INSERT INTO `category` VALUES (656, '其他采购/贸易职位', 642, '0,642');
INSERT INTO `category` VALUES (657, '其他采购/贸易类职位', 656, '0,642,656');
INSERT INTO `category` VALUES (658, '供应链/物流', 0, '0');
INSERT INTO `category` VALUES (659, '物流', 658, '0,658');
INSERT INTO `category` VALUES (660, '供应链专员', 659, '0,658,659');
INSERT INTO `category` VALUES (661, '供应链经理', 659, '0,658,659');
INSERT INTO `category` VALUES (662, '物流专员', 659, '0,658,659');
INSERT INTO `category` VALUES (663, '物流经理', 659, '0,658,659');
INSERT INTO `category` VALUES (664, '物流运营', 659, '0,658,659');
INSERT INTO `category` VALUES (665, '物流跟单', 659, '0,658,659');
INSERT INTO `category` VALUES (666, '贸易跟单', 659, '0,658,659');
INSERT INTO `category` VALUES (667, '物仓调度', 659, '0,658,659');
INSERT INTO `category` VALUES (668, '物仓项目', 659, '0,658,659');
INSERT INTO `category` VALUES (669, '运输经理/主管', 659, '0,658,659');
INSERT INTO `category` VALUES (670, '货运代理专员', 659, '0,658,659');
INSERT INTO `category` VALUES (671, '货运代理经理', 659, '0,658,659');
INSERT INTO `category` VALUES (672, '水/空/陆运操作', 659, '0,658,659');
INSERT INTO `category` VALUES (673, '报关员', 659, '0,658,659');
INSERT INTO `category` VALUES (674, '报检员', 659, '0,658,659');
INSERT INTO `category` VALUES (675, '核销员', 659, '0,658,659');
INSERT INTO `category` VALUES (676, '单证员', 659, '0,658,659');
INSERT INTO `category` VALUES (677, '仓储', 658, '0,658');
INSERT INTO `category` VALUES (678, '仓储物料经理', 677, '0,658,677');
INSERT INTO `category` VALUES (679, '仓储物料专员', 677, '0,658,677');
INSERT INTO `category` VALUES (680, '仓储物料项目', 677, '0,658,677');
INSERT INTO `category` VALUES (681, '仓储管理', 677, '0,658,677');
INSERT INTO `category` VALUES (682, '仓库文员', 677, '0,658,677');
INSERT INTO `category` VALUES (683, '配/理/拣/发货', 677, '0,658,677');
INSERT INTO `category` VALUES (684, '运输', 658, '0,658');
INSERT INTO `category` VALUES (685, '货运司机', 684, '0,658,684');
INSERT INTO `category` VALUES (686, '集装箱管理', 684, '0,658,684');
INSERT INTO `category` VALUES (687, '配送', 684, '0,658,684');
INSERT INTO `category` VALUES (688, '快递', 684, '0,658,684');
INSERT INTO `category` VALUES (689, '高端供应链职位', 658, '0,658');
INSERT INTO `category` VALUES (690, '供应链总监', 689, '0,658,689');
INSERT INTO `category` VALUES (691, '物流总监', 689, '0,658,689');
INSERT INTO `category` VALUES (692, '其他供应链职位', 658, '0,658');
INSERT INTO `category` VALUES (693, '其他供应链职位', 692, '0,658,692');
INSERT INTO `category` VALUES (694, '房地产/建筑', 0, '0');
INSERT INTO `category` VALUES (695, '房地产规划开发', 694, '0,694');
INSERT INTO `category` VALUES (696, '房产策划', 695, '0,694,695');
INSERT INTO `category` VALUES (697, '地产项目管理', 695, '0,694,695');
INSERT INTO `category` VALUES (698, '地产招投标', 695, '0,694,695');
INSERT INTO `category` VALUES (699, '设计装修与市政建设', 694, '0,694');
INSERT INTO `category` VALUES (700, '高级建筑工程师', 699, '0,694,699');
INSERT INTO `category` VALUES (701, '建筑工程师', 699, '0,694,699');
INSERT INTO `category` VALUES (702, '建筑设计师', 699, '0,694,699');
INSERT INTO `category` VALUES (703, '土木/土建/结构工程师', 699, '0,694,699');
INSERT INTO `category` VALUES (704, '室内设计', 699, '0,694,699');
INSERT INTO `category` VALUES (705, '园林设计', 699, '0,694,699');
INSERT INTO `category` VALUES (706, '城市规划设计', 699, '0,694,699');
INSERT INTO `category` VALUES (707, '工程监理', 699, '0,694,699');
INSERT INTO `category` VALUES (708, '工程造价', 699, '0,694,699');
INSERT INTO `category` VALUES (709, '预结算', 699, '0,694,699');
INSERT INTO `category` VALUES (710, '工程资料管理', 699, '0,694,699');
INSERT INTO `category` VALUES (711, '建筑施工现场管理', 699, '0,694,699');
INSERT INTO `category` VALUES (712, '房地产经纪', 694, '0,694');
INSERT INTO `category` VALUES (713, '地产置业顾问', 712, '0,694,712');
INSERT INTO `category` VALUES (714, '地产评估', 712, '0,694,712');
INSERT INTO `category` VALUES (715, '地产中介', 712, '0,694,712');
INSERT INTO `category` VALUES (716, '物业管理', 694, '0,694');
INSERT INTO `category` VALUES (717, '物业管理', 716, '0,694,716');
INSERT INTO `category` VALUES (718, '物业租赁销售 ', 716, '0,694,716');
INSERT INTO `category` VALUES (719, '物业招商管理', 716, '0,694,716');
INSERT INTO `category` VALUES (720, '高端房地产职位', 694, '0,694');
INSERT INTO `category` VALUES (721, '地产项目总监', 720, '0,694,720');
INSERT INTO `category` VALUES (722, '地产策划总监', 720, '0,694,720');
INSERT INTO `category` VALUES (723, '地产招投标总监', 720, '0,694,720');
INSERT INTO `category` VALUES (724, '物业总监', 720, '0,694,720');
INSERT INTO `category` VALUES (725, '房地产销售总监', 720, '0,694,720');
INSERT INTO `category` VALUES (726, '其他房地产职位', 694, '0,694');
INSERT INTO `category` VALUES (727, '其他房地产职位', 726, '0,694,726');
INSERT INTO `category` VALUES (728, '咨询/翻译/法律', 0, '0');
INSERT INTO `category` VALUES (729, '咨询/调研', 728, '0,728');
INSERT INTO `category` VALUES (730, '企业管理咨询', 729, '0,728,729');
INSERT INTO `category` VALUES (731, '数据分析师', 729, '0,728,729');
INSERT INTO `category` VALUES (732, '财务咨询顾问', 729, '0,728,729');
INSERT INTO `category` VALUES (733, 'IT咨询顾问', 729, '0,728,729');
INSERT INTO `category` VALUES (734, '人力资源顾问', 729, '0,728,729');
INSERT INTO `category` VALUES (735, '咨询项目管理', 729, '0,728,729');
INSERT INTO `category` VALUES (736, '战略咨询', 729, '0,728,729');
INSERT INTO `category` VALUES (737, '猎头顾问', 729, '0,728,729');
INSERT INTO `category` VALUES (738, '市场调研', 729, '0,728,729');
INSERT INTO `category` VALUES (739, '其他咨询顾问', 729, '0,728,729');
INSERT INTO `category` VALUES (740, '律师', 728, '0,728');
INSERT INTO `category` VALUES (741, '事务所律师', 740, '0,728,740');
INSERT INTO `category` VALUES (742, '公司法务', 740, '0,728,740');
INSERT INTO `category` VALUES (743, '翻译', 728, '0,728');
INSERT INTO `category` VALUES (744, '英语翻译', 743, '0,728,743');
INSERT INTO `category` VALUES (745, '日语翻译', 743, '0,728,743');
INSERT INTO `category` VALUES (746, '韩语/朝鲜语翻译', 743, '0,728,743');
INSERT INTO `category` VALUES (747, '法语翻译', 743, '0,728,743');
INSERT INTO `category` VALUES (748, '德语翻译', 743, '0,728,743');
INSERT INTO `category` VALUES (749, '俄语翻译', 743, '0,728,743');
INSERT INTO `category` VALUES (750, '西班牙语翻译', 743, '0,728,743');
INSERT INTO `category` VALUES (751, '其他语种翻译', 743, '0,728,743');
INSERT INTO `category` VALUES (752, '高端咨询类职位', 728, '0,728');
INSERT INTO `category` VALUES (753, '咨询总监', 752, '0,728,752');
INSERT INTO `category` VALUES (754, '咨询经理', 752, '0,728,752');
INSERT INTO `category` VALUES (755, '高级翻译', 752, '0,728,752');
INSERT INTO `category` VALUES (756, '同声传译  ', 752, '0,728,752');
INSERT INTO `category` VALUES (757, '其他咨询类职位', 728, '0,728');
INSERT INTO `category` VALUES (758, '其他咨询/翻译类职位', 757, '0,728,757');
INSERT INTO `category` VALUES (759, '实习生/管培生', 0, '0');
INSERT INTO `category` VALUES (760, '实习生/培训生/储备干部', 759, '0,759');
INSERT INTO `category` VALUES (761, '实习生', 760, '0,759,760');
INSERT INTO `category` VALUES (762, '管理培训生', 760, '0,759,760');
INSERT INTO `category` VALUES (763, '储备干部', 760, '0,759,760');
INSERT INTO `category` VALUES (764, '其他实习/培训/储备职位', 759, '0,759');
INSERT INTO `category` VALUES (765, '其他实习/培训/储备职位', 764, '0,759,764');
INSERT INTO `category` VALUES (766, '旅游', 0, '0');
INSERT INTO `category` VALUES (767, '旅游服务', 766, '0,766');
INSERT INTO `category` VALUES (768, '计调', 767, '0,766,767');
INSERT INTO `category` VALUES (769, '签证', 767, '0,766,767');
INSERT INTO `category` VALUES (770, '旅游顾问', 767, '0,766,767');
INSERT INTO `category` VALUES (771, '导游', 767, '0,766,767');
INSERT INTO `category` VALUES (772, '预定票务', 767, '0,766,767');
INSERT INTO `category` VALUES (773, '旅游产品开发/策划', 766, '0,766');
INSERT INTO `category` VALUES (774, '旅游产品经理', 773, '0,766,773');
INSERT INTO `category` VALUES (775, '旅游策划师', 773, '0,766,773');
INSERT INTO `category` VALUES (776, '其他旅游职位', 766, '0,766');
INSERT INTO `category` VALUES (777, '其他旅游职位', 776, '0,766,776');
INSERT INTO `category` VALUES (778, '酒店/餐饮/零售', 0, '0');
INSERT INTO `category` VALUES (779, '酒店', 778, '0,778');
INSERT INTO `category` VALUES (780, '收银', 779, '0,778,779');
INSERT INTO `category` VALUES (781, '酒店前台', 779, '0,778,779');
INSERT INTO `category` VALUES (782, '客房服务员', 779, '0,778,779');
INSERT INTO `category` VALUES (783, '酒店经理', 779, '0,778,779');
INSERT INTO `category` VALUES (784, '餐饮', 778, '0,778');
INSERT INTO `category` VALUES (785, '收银', 784, '0,778,784');
INSERT INTO `category` VALUES (786, '服务员', 784, '0,778,784');
INSERT INTO `category` VALUES (787, '厨师', 784, '0,778,784');
INSERT INTO `category` VALUES (788, '咖啡师', 784, '0,778,784');
INSERT INTO `category` VALUES (789, '送餐员', 784, '0,778,784');
INSERT INTO `category` VALUES (790, '餐饮店长', 784, '0,778,784');
INSERT INTO `category` VALUES (791, '领班', 784, '0,778,784');
INSERT INTO `category` VALUES (792, '零售', 778, '0,778');
INSERT INTO `category` VALUES (793, '收银', 792, '0,778,792');
INSERT INTO `category` VALUES (794, '导购', 792, '0,778,792');
INSERT INTO `category` VALUES (795, '店员/营业员', 792, '0,778,792');
INSERT INTO `category` VALUES (796, '门店店长', 792, '0,778,792');
INSERT INTO `category` VALUES (797, '其他酒店/餐饮/零售职位', 778, '0,778');
INSERT INTO `category` VALUES (798, '其他酒店/餐饮/零售职位', 797, '0,778,797');
INSERT INTO `category` VALUES (799, '生产制造', 0, '0');
INSERT INTO `category` VALUES (800, '生产营运', 799, '0,799');
INSERT INTO `category` VALUES (801, '厂长/工厂经理', 800, '0,799,800');
INSERT INTO `category` VALUES (802, '生产总监', 800, '0,799,800');
INSERT INTO `category` VALUES (803, '生产经理/车间主任', 800, '0,799,800');
INSERT INTO `category` VALUES (804, '生产组长/拉长', 800, '0,799,800');
INSERT INTO `category` VALUES (805, '生产员', 800, '0,799,800');
INSERT INTO `category` VALUES (806, '生产设备管理', 800, '0,799,800');
INSERT INTO `category` VALUES (807, '生产计划/物料控制', 800, '0,799,800');
INSERT INTO `category` VALUES (808, '生产跟单', 800, '0,799,800');
INSERT INTO `category` VALUES (809, '质量安全', 799, '0,799');
INSERT INTO `category` VALUES (810, '质量管理/测试', 809, '0,799,809');
INSERT INTO `category` VALUES (811, '可靠度工程师', 809, '0,799,809');
INSERT INTO `category` VALUES (812, '故障分析师', 809, '0,799,809');
INSERT INTO `category` VALUES (813, '认证工程师', 809, '0,799,809');
INSERT INTO `category` VALUES (814, '体系工程师', 809, '0,799,809');
INSERT INTO `category` VALUES (815, '审核员', 809, '0,799,809');
INSERT INTO `category` VALUES (816, '安全员', 809, '0,799,809');
INSERT INTO `category` VALUES (817, '机械设计/制造', 799, '0,799');
INSERT INTO `category` VALUES (818, '机械工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (819, '机械设计师', 817, '0,799,817');
INSERT INTO `category` VALUES (820, '机械设备工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (821, '机械维修/保养', 817, '0,799,817');
INSERT INTO `category` VALUES (822, '机械制图', 817, '0,799,817');
INSERT INTO `category` VALUES (823, '机械结构工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (824, '工业工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (825, '工艺/制程工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (826, '材料工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (827, '机电工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (828, 'CNC/数控', 817, '0,799,817');
INSERT INTO `category` VALUES (829, '冲压工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (830, '夹具工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (831, '模具工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (832, '焊接工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (833, '注塑工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (834, '铸造/锻造工程师', 817, '0,799,817');
INSERT INTO `category` VALUES (835, '化工', 799, '0,799');
INSERT INTO `category` VALUES (836, '化工工程师', 835, '0,799,835');
INSERT INTO `category` VALUES (837, '实验室技术员', 835, '0,799,835');
INSERT INTO `category` VALUES (838, '化学分析', 835, '0,799,835');
INSERT INTO `category` VALUES (839, '涂料研发', 835, '0,799,835');
INSERT INTO `category` VALUES (840, '化妆品研发', 835, '0,799,835');
INSERT INTO `category` VALUES (841, '食品/饮料研发', 835, '0,799,835');
INSERT INTO `category` VALUES (842, '服装/纺织/皮革', 799, '0,799');
INSERT INTO `category` VALUES (843, '服装设计', 842, '0,799,842');
INSERT INTO `category` VALUES (844, '女装设计', 842, '0,799,842');
INSERT INTO `category` VALUES (845, '男装设计', 842, '0,799,842');
INSERT INTO `category` VALUES (846, '童装设计', 842, '0,799,842');
INSERT INTO `category` VALUES (847, '内衣设计', 842, '0,799,842');
INSERT INTO `category` VALUES (848, '面料设计', 842, '0,799,842');
INSERT INTO `category` VALUES (849, '面料辅料开发', 842, '0,799,842');
INSERT INTO `category` VALUES (850, '面料辅料采购', 842, '0,799,842');
INSERT INTO `category` VALUES (851, '打样/制版', 842, '0,799,842');
INSERT INTO `category` VALUES (852, '服装/纺织/皮革跟单', 842, '0,799,842');
INSERT INTO `category` VALUES (853, '技工/普工', 799, '0,799');
INSERT INTO `category` VALUES (854, '普工/操作工', 853, '0,799,853');
INSERT INTO `category` VALUES (855, '叉车', 853, '0,799,853');
INSERT INTO `category` VALUES (856, '铲车', 853, '0,799,853');
INSERT INTO `category` VALUES (857, '焊工', 853, '0,799,853');
INSERT INTO `category` VALUES (858, '氩弧焊工', 853, '0,799,853');
INSERT INTO `category` VALUES (859, '电工', 853, '0,799,853');
INSERT INTO `category` VALUES (860, '木工', 853, '0,799,853');
INSERT INTO `category` VALUES (861, '漆工', 853, '0,799,853');
INSERT INTO `category` VALUES (862, '车工', 853, '0,799,853');
INSERT INTO `category` VALUES (863, '磨工', 853, '0,799,853');
INSERT INTO `category` VALUES (864, '铣工', 853, '0,799,853');
INSERT INTO `category` VALUES (865, '钳工', 853, '0,799,853');
INSERT INTO `category` VALUES (866, '钻工', 853, '0,799,853');
INSERT INTO `category` VALUES (867, '铆工', 853, '0,799,853');
INSERT INTO `category` VALUES (868, '钣金', 853, '0,799,853');
INSERT INTO `category` VALUES (869, '抛光', 853, '0,799,853');
INSERT INTO `category` VALUES (870, '机修工', 853, '0,799,853');
INSERT INTO `category` VALUES (871, '折弯工', 853, '0,799,853');
INSERT INTO `category` VALUES (872, '电镀工', 853, '0,799,853');
INSERT INTO `category` VALUES (873, '喷塑工', 853, '0,799,853');
INSERT INTO `category` VALUES (874, '注塑工', 853, '0,799,853');
INSERT INTO `category` VALUES (875, '组装工', 853, '0,799,853');
INSERT INTO `category` VALUES (876, '包装工', 853, '0,799,853');
INSERT INTO `category` VALUES (877, '空调工', 853, '0,799,853');
INSERT INTO `category` VALUES (878, '电梯工', 853, '0,799,853');
INSERT INTO `category` VALUES (879, '锅炉工', 853, '0,799,853');
INSERT INTO `category` VALUES (880, '学徒工', 853, '0,799,853');
INSERT INTO `category` VALUES (881, '其他生产制造职位', 799, '0,799');
INSERT INTO `category` VALUES (882, '其他生产制造职位', 881, '0,799,881');
INSERT INTO `category` VALUES (883, '其他', 0, '0');
INSERT INTO `category` VALUES (884, '其他职位类别', 883, '0,883');
INSERT INTO `category` VALUES (885, '其他职位', 884, '0,883,884');

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '简称(品牌)',
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '品牌全称',
  `bg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '主体背景图',
  `bgs` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '主题背景缩略图',
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '品牌logo',
  `logos` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '品牌logo缩略图',
  `financing` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '融资情况',
  `employees` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '供职人数',
  `industry` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '所在行业',
  `profile` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '简介',
  `homepage` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '官网',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 62 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES (56, '嘟嘟', '嘟嘟蕾丝教育', NULL, NULL, '/uploads/20180506\\0575885bde650f4b32178055e65fa43e.jpg', '/uploads/thumbhome/1525618898.jpg', '未融资', '500', '学前教育', '七彩嘟嘟珠心算成立于2012年，原名“七彩教育”，2016年独立商标认证“七彩嘟嘟”，2017年2月20日正式改名为“七彩嘟嘟珠心算”。2017年10月七彩嘟嘟教育集团成立后，正式隶属于七彩嘟嘟教育集团。是一家专注于4-12岁少儿左右脑开发珠心算课程的培训企业。多年来秉承“启发孩童智慧，激发孩童潜能”的教育使命，培育出数千名优秀学子，赢得了社会各界良好的教学口碑及品牌赞誉。\r\n2015年 研发出属于七彩珠心算独有的教学体系。', 'www.szqicai.com');
INSERT INTO `company` VALUES (57, '伊步科技', '广东伊步网络科技有限公司伊品科技', '', '', '/uploads/20180507\\7f3fc2a4703c66ad5da542931ba31a79.jpg', '/uploads/thumbhome/1525658485.jpg', '未融资', '50', 'IT', '广东伊步网络科技有限公司，是一家集系统软件开发、APP推广运营、广告营销策划、线上线下渠道分发、用户及产品大数据系统开发运营为主的移动互联网公司。伊步有着丰富的渠道推广资源、强硬的系统开发技术实力、长期的广告营销和平台运营经验。结合前期多年基础沉淀，2017年逐步发展共享健康理念，利用自身系统软件开发技术、线上广告分发、线下渠道多端入口，形成一个完整的闭环系统。并于2018年开始逐步落实具体项目：共享按摩椅、共享摇摇椅、共享街机游戏机等。\r\n未来，伊步将致力于互联网产业的持续发展，同时也在努力促进共享经济多元化服务。依托强大的技术实力和市场资源优势实现大共享时代，为用户提供更好的服务，为合作商创造更庞大的利润空间。', 'ebunet.net');
INSERT INTO `company` VALUES (58, '万寿谷集团', '广西万寿谷投资集团股份有限公司南宁分公司', NULL, NULL, '/uploads/20180507\\b4656bce56c300e4ccb48ad2353b4a34.jpg', '/uploads/thumbhome/1525660001.jpg', '不需要融资', '500', '餐饮', '广西万寿谷投资集团，总注册资金1.68亿元，是国内原生态养生鸡规模化生态养殖循环经济为主的全产业链集团企业，是国家一二三产业示范企业，是国家“十三五”重点培育示范企业，目前集团下辖13家全资子公司及2家控股公司，产业包含：生态饲料、育种育雏、养殖调理、产品研发、精深加工、全域销售、餐饮体验及出口海外的全产业链。\r\n    万寿谷集团是全国生态肉鸡养殖行业第一家获得国家质检总局颁发的“生态原产地产品保护认证”企业，万寿谷鸡系列产品荣膺第14届中国-东盟博览会指定产品称号，万寿谷凤山养殖基地通过自治区“广西畜禽现代生态养殖场”五星级认证。\r\n     万寿谷投资集团创建了凤山县、东兰县、福建南方水产城三大养殖加工示范基地，进一步完善了集团从养殖到生产、精加工，再到出口海外的产业链。集团聚揽高级专家和精英人才，成立国家认定的企业技术中心，广泛携手业界精英团队和知名院校，对新技术、新原料、新设备等进行了深入研究。钻研食补调理类鸡肉产品，自创自加热肉鸡罐头，秘制休闲鸡肉食品等新产品系列，并自建全国冷链物流及全程追溯体系，真正打造“中国高端土鸡”全产业链领导品牌。\r\n    万寿谷集团在打造“绿色、生态、安全、营养”的核心产品的同时，致力于精准扶贫，以帮扶农民利益为核心，推动地方经济发展，为百姓带来福祉', 'www.wsgjt.com');
INSERT INTO `company` VALUES (59, '宜信公司', '宜信普惠信息咨询（北京）有限公司', NULL, NULL, '/uploads/20180507\\6061d59d5d308f5deea9cdddee0c5e08.jpg', '/uploads/thumbhome/1525660959.jpg', '以上市', '999', '互联网金融', '宜信创立于2006年，是一家从事普惠金融和财富管理事业的金融科技企业，在支付、网贷、众筹、机器人投顾、智能保险、区块链等前沿领域积极布局，通过业务孵化和产业投资参与全球金融科技创新。\r\n总部位于北京，目前已经在255个城市（含香港）和20个省（直辖市）的农村地区建立起强大的全国协同服务网络，通过大数据金融云、物联网和其他金融创新科技，为客户提供全方位、个性化的普惠金融与财富管理服务。\r\n宜信财富是宜信旗下独立财富管理业务品牌，为中国高净值提供专业的全球资产配置服务。涉及领域包含国内外固定收益、私募股权、资本市场、对冲基金、房地产、保险保障、投资移民、游学教育等全方位产品与服务，覆盖人民币、美元、欧元等多个币种。', 'www.creditease.cn');
INSERT INTO `company` VALUES (60, '饿了么', '拉扎斯网络科技（上海）有限公司', NULL, NULL, '/uploads/20180507\\e57701216212f35347a09e97d68d7608.jpg', '/uploads/thumbhome/1525674445.jpg', 'D轮', '1000', 'O2O', '“饿了么”是2008年创立的本地生活平台，主营在线外卖、新零售、即时配送和餐饮供应链等业务。隶属于上海拉扎斯信息科技有限公司，由张旭豪、康嘉等人于2009年4月在上海创立。\r\n起源于上海交通大学闵行校区。截至2014年10月，公司业务覆盖全国近200个城市，加盟餐厅数共计18万家，日均订单超过100万单，团队规模超过2000人。\r\n2018年4月2日，阿里巴巴集团、蚂蚁金服集团与饿了么联合宣布，阿里巴巴已经签订收购协议，将联合蚂蚁金服以95亿美元对饿了么完成全资收购，张旭豪出任饿了么董事长，阿里巴巴集团副总裁吴函涛出任饿了么CEO。', 'www.ele.me');
INSERT INTO `company` VALUES (61, '代工', '代工工', NULL, NULL, '/uploads/20180507\\0254ee09da3a7d1fca7abceca497a184.png', '/uploads/thumbhome/1525682391.png', '森森', '1111', 'it', '132123123', '123.com');

-- ----------------------------
-- Table structure for company_addr
-- ----------------------------
DROP TABLE IF EXISTS `company_addr`;
CREATE TABLE `company_addr`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_id` int(10) UNSIGNED NOT NULL,
  `addr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company_addr
-- ----------------------------
INSERT INTO `company_addr` VALUES (45, 56, '深圳南山区海德三道天利名城B座13楼1303');
INSERT INTO `company_addr` VALUES (46, 57, '北京昌平区上田大厦12层');
INSERT INTO `company_addr` VALUES (47, 58, '广西南宁青秀区利海·亚洲国际领峰A座21楼');
INSERT INTO `company_addr` VALUES (48, 59, '济南市中区祥泰广场英雄山路129号祥泰广场1号楼3层');
INSERT INTO `company_addr` VALUES (49, 60, '上海普陀区近铁城市广场');
INSERT INTO `company_addr` VALUES (50, 61, 'skskskks');

-- ----------------------------
-- Table structure for company_admin
-- ----------------------------
DROP TABLE IF EXISTS `company_admin`;
CREATE TABLE `company_admin`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_id` int(10) UNSIGNED NOT NULL,
  `ce_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company_admin
-- ----------------------------
INSERT INTO `company_admin` VALUES (14, 56, '邓华杰', '教育主任');
INSERT INTO `company_admin` VALUES (15, 57, '邓华杰', 'CEO');
INSERT INTO `company_admin` VALUES (16, 58, '梁宋琪', '总经理');
INSERT INTO `company_admin` VALUES (17, 59, '陈锋', '创始人、CEO');
INSERT INTO `company_admin` VALUES (18, 60, '吴函涛', '现任副总CEO');
INSERT INTO `company_admin` VALUES (19, 61, '禁区', '工要');

-- ----------------------------
-- Table structure for company_env
-- ----------------------------
DROP TABLE IF EXISTS `company_env`;
CREATE TABLE `company_env`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_id` int(10) UNSIGNED NOT NULL,
  `src` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `srcs` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company_env
-- ----------------------------
INSERT INTO `company_env` VALUES (30, 56, '/uploads/20180506\\c4627fe7e5760a4d544cf76e75cc0b8a.jpg', '/uploads/thumbhome/1525616603.jpg');
INSERT INTO `company_env` VALUES (31, 57, '/uploads/20180507\\badb9182343c4acc0d6c77dd788d3bfd.jpg', '/uploads/thumbhome/1525656999.jpg');
INSERT INTO `company_env` VALUES (32, 58, '/uploads/20180507\\5672c7ed5629fc17444a3fdff4ed077f.jpg', '/uploads/thumbhome/1525657808.jpg');
INSERT INTO `company_env` VALUES (33, 59, '/uploads/20180507\\d84fe8859f872cfd1ce86a9bb0f67915.jpg', '/uploads/thumbhome/1525664079.jpg');
INSERT INTO `company_env` VALUES (34, 60, '/uploads/20180507\\95c6888eadede5363bf6b7cab4ad4b73.jpg', '/uploads/thumbhome/1525666091.jpg');
INSERT INTO `company_env` VALUES (35, 61, '/uploads/20180507\\3c00eb2bf3f6fbbbc9f81da2eb6f283b.jpg', '/uploads/thumbhome/1525674996.jpg');

-- ----------------------------
-- Table structure for job
-- ----------------------------
DROP TABLE IF EXISTS `job`;
CREATE TABLE `job`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hr_id` int(10) UNSIGNED NOT NULL COMMENT 'HR_id',
  `co_id` int(10) UNSIGNED NOT NULL COMMENT '公司id',
  `co_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司名',
  `icinfo_id` int(10) UNSIGNED NULL DEFAULT NULL COMMENT '工商信息id',
  `job` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作名称',
  `experience` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '要求经验年限',
  `degree` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '要求学历',
  `job_descr` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '职位描述',
  `team_descr` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '团队介绍',
  `tags` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '职位标签',
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作地址',
  `timestamp` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '发布时间',
  `status` int(2) UNSIGNED NOT NULL COMMENT '状态',
  `salary` tinyint(3) UNSIGNED NOT NULL COMMENT '薪水',
  `location` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '所在地',
  `location_code` int(10) UNSIGNED NOT NULL COMMENT '所在地编号',
  `industry` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '所在行业',
  `industry_code` int(10) UNSIGNED NOT NULL COMMENT '所在行业编号',
  `position` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作类型',
  `position_code` int(10) UNSIGNED NOT NULL COMMENT '工作类型编号',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 26 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of job
-- ----------------------------
INSERT INTO `job` VALUES (10, 10, 56, '嘟嘟蕾丝教育', NULL, '行政专员', '1', '本科', '行政岗位职责：1、负责校区客户接待、电话接听及转接，及时反馈客户问题。2、负责校区各项数据的整理。3、负责校区卫生等后勤支持工作。4、负责公司相关制度、政策和的维护和监管。5、积极参加团队活动，能活跃校区团队氛围。 任职要求： 1、20--25岁，大专及以上学历。形象气质佳。 2、熟练使用各种办公软件和办公设备3、责任心强，工作细致，有团队合作精神。', '七彩嘟嘟艺术中心以音乐教育为优势，钢琴教学为主要力量，专注专业钢琴一对一上门教学及特色一对多幼儿音乐启蒙课，同时开设订制成人课程，秉承“快乐学琴”的教育理念，为不同年龄，不同需求的音乐爱好者，订制最适', '教育', '深圳南山区海德三道天利名城B座13楼1303', '1525611904', 1, 5, '深圳', 101280600, '在线教育', 100012, '行政专员/助理', 318);
INSERT INTO `job` VALUES (11, 10, 56, '嘟嘟蕾丝教育', NULL, '钢琴教师', '1', '本科', '岗位职责：1.制定教学计划，准备教案，保证教学质量。2.协助教学主管处理各类教学事务。 3.帮助学生制定合适的教学计划。 4.对学生的学习进行持续跟进 职位要求： 1.音乐学院或师范类院校钢琴相关专业毕业（钢琴/音乐教育/作曲/钢琴表演等）2/语言表达能力强，善于与孩子以及家长沟通。3. 具有爱心、责任心、团队合作意识和吃苦耐劳精神。4、具有一定的教学研究能力', '七彩嘟嘟艺术中心以音乐教育为优势，钢琴教学为主要力量，专注专业钢琴一对一上门教学及特色一对多幼儿音乐启蒙课，同时开设订制成人课程，秉承“快乐学琴”的教育理念，为不同年龄，不同需求的音乐爱好者，订制最适', '教育', '深圳南山区海德三道天利名城B座13楼1303', '1525612076', 1, 9, '深圳', 101280600, '在线教育', 100012, '教学管理', 536);
INSERT INTO `job` VALUES (12, 10, 56, '嘟嘟蕾丝教育', NULL, '幼教老师', '1', '本科', '岗位职责：\n1.负责4--8岁学生的教学工作。\n2.积极备课，高质量的完成教学任务。\n3.不定期参加公司专业的珠心算课程学习\n4.负责相关公开课的开展以及教研交流等工作\n公司有众多分店，目前以下上班可选择以下地址分店', '学习培训晋升空间：\n1、入职提供免费的专业化的带薪培训\n2、公司有多家分店，只要有你愿意进步，公司有宽广的发展空间以及晋升空间\n总部地址：深圳市南山中心区海德三道粤海街道天利名城B座4楼\n前海分店：南', '教育', '深圳南山区海德三道天利名城B座13楼1303', '1525612201', 1, 0, '深圳', 101280600, '在线教育', 100012, '幼教', 544);
INSERT INTO `job` VALUES (13, 10, 56, '嘟嘟蕾丝教育', NULL, '音乐教师', '1', '本科', '深圳七彩嘟嘟教育集团来到重庆啦！\n分为在店上课一对一及上门一对一钢琴课，\n需要有一定经验的钢琴老师，\n符合要求者一个月可拿一万以上的薪酬，\n具体面谈。', '七彩嘟嘟艺术中心以音乐教育为优势，钢琴教学为主要力量，专注专业钢琴一对一上门教学及特色一对多幼儿音乐启蒙课，同时开设订制成人课程，秉承“快乐学琴”的教育理念，为不同年龄，不同需求的音乐爱好者，订制最适', '教育', '深圳南山区海德三道天利名城B座13楼1303', '1525612333', 0, 16, '深圳', 101280600, '在线教育', 100012, '教师', 539);
INSERT INTO `job` VALUES (14, 10, 56, '嘟嘟蕾丝教育', NULL, '钢琴架子鼓老师（全职/兼职）', '1', '专科', '岗位职责：\n1、精心备课，精心设计、因材施教。\n2、保证学生的教学时间。寓教于乐、激发学生学习乐器的热情与兴趣。\n3、积极参与教学科研、不断提高教学水平。积极推荐学生参加考级和各种艺术活动、比赛。\n4、教师之间要相互学习、取长补短、形成融洽和谐的艺术氛围。\n5、认真填写好教学记录、以备总结、反思的提高教学水平。\n6、积极与陪练教师、学生家长沟通，发现问题及时解决。\n7、依法执教，保证学生的身心健康。\n8、准时到岗，有事提前请假。\n9 、学校有演出活动时，教师要积极参与，一切服从学校的安排。\n10、校区主要招聘钢琴、架子鼓老师（全职兼职都要）\n\n学员情况：主要针对4.5岁以上儿童及成人\n重庆 南', '我们主要是针对少儿3-8岁珠心算培训的，我们是深圳最大的一间珠心算培训机构，师资最硬，学员最多，参加过多次国外比赛的呢。而且我们还有钢琴乐器类培训学校，潜力开发早教学校，我们在深圳有7大校区', '教育', '深圳南山区海德三道天利名城B座13楼1303', '1525615065', 1, 5, '深圳', 101280600, '在线教育', 100012, '教师', 539);
INSERT INTO `job` VALUES (16, 10, 56, '嘟嘟蕾丝教育', NULL, '测试数据', '1', '本科', '1231231', '123123123', 'php', '深圳龙华市大地公园旁茅厕A巷20号', '1525620619', 0, 12, '深圳', 101280600, '游戏', 100002, '产品经理', 140);
INSERT INTO `job` VALUES (17, 11, 57, '广东伊步网络科技有限公司伊品科技', NULL, 'PHP开发工程师', '5', '本科', '【公司福利】\n1、提供员工宿舍\n2、包午餐、晚餐，阿姨在饭堂做饭给员工。\n\n【专业要求】\n1、熟悉PHP+MySQL程序设计及开发，了解ajax技术和常用的javascript库。\n2、熟悉html5、CSS、javascript、Ajax、Bootstrap等前端技术。\n3、精通使用Codeingiter等PHP开发框架，熟悉MVC设计模式。\n4、对Linux/FreeBSD等系统有一定了解。\n5、有团队协作精神,富有责任心和自我挑战精神。\n\n【工作职责】\n1）程序模块的设计、编码。\n2）撰写所属模块开发文档。\n3）对所属模块进行单元测试。 ', '伊品科技LinkDoc致力于打造全球最领先的医疗数据解决方案及肿瘤大数据平台,及人工智能解决方案。帮助中国医疗机构及临床专家提高诊断、随访、科研等各个环节的效率,更好的驾驭科技发展。\n核心技术团队来自', 'php', '北京昌平区上田大厦', '1525656558', 1, 20, '全国', 0, '互联网', 100020, 'PHP', 5);
INSERT INTO `job` VALUES (18, 11, 57, '广东伊步网络科技有限公司伊品科技', NULL, 'PHP高级开发工程师', '10', '本科', '【公司福利】\n1、提供员工宿舍\n2、包午餐、晚餐，阿姨在饭堂做饭给员工。\n\n【专业要求】\n1、熟悉PHP+MySQL程序设计及开发，了解ajax技术和常用的javascript库。\n2、熟悉html5、CSS、javascript、Ajax、Bootstrap等前端技术。\n3、精通使用Codeingiter等PHP开发框架，熟悉MVC设计模式。\n4、对Linux/FreeBSD等系统有一定了解。\n5、有团队协作精神,富有责任心和自我挑战精神。\n\n【工作职责】\n1）程序模块的设计、编码。\n2）撰写所属模块开发文档。\n3）对所属模块进行单元测试。 ', '伊品科技LinkDoc致力于打造全球最领先的医疗数据解决方案及肿瘤大数据平台,及人工智能解决方案。帮助中国医疗机构及临床专家提高诊断、随访、科研等各个环节的效率,更好的驾驭科技发展。\n核心技术团队来自', 'php', '北京昌平区上田大厦', '1525656728', 1, 30, '全国', 0, '互联网', 100020, 'PHP', 5);
INSERT INTO `job` VALUES (19, 11, 57, '广东伊步网络科技有限公司伊品科技', NULL, 'Android开发工程师 ', '3', '本科', '职位信息：\n1、根据需求文档进行结构和功能的设计；\n2、负责客户端的开发和维护；\n3、撰写开发文档和使用文档；\n任职要求：\n1.大专及以上学历，计算机、信息技术相关专业；\n2.有1年以上android开发工作经验，优秀应届生可以放宽标准；\n3.掌握面向对象技术和设计模式\n4.完整参与过一款以上android平台成功上线项目的研发的优先考虑；\n5.能独立开发高性能的android应用优先考虑；\n6.有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；\n7.有上架作品或相关作品优先； ', '伊品科技LinkDoc致力于打造全球最领先的医疗数据解决方案及肿瘤大数据平台,及人工智能解决方案。帮助中国医疗机构及临床专家提高诊断、随访、科研等各个环节的效率,更好的驾驭科技发展。\n核心技术团队来自', 'php', '北京昌平区上田大厦', '1525656856', 1, 9, '全国', 0, '互联网', 100020, 'Android', 27);
INSERT INTO `job` VALUES (20, 11, 57, '广东伊步网络科技有限公司伊品科技', NULL, 'iOS开发工程师', '1', '大专', '职位信息：\n1、根据需求文档进行结构和功能的设计；\n2、负责客户端的开发和维护；\n3、撰写开发文档和使用文档；\n任职要求：\n1、大专以上学历，2年以上iOS相关开发经验；\n2、熟悉iOS SDK，了解iPhone及iPad开发；\n3、扎实的Objective-c基础；\n4、熟悉MRC,熟悉各种可视控件的代码编写；\n5、熟悉算法思想，有较强的解决问题的能力，对OOD/OOP有深刻的理解；\n6、熟悉通过Web Service进行数据交互，熟悉JSON和XML格式的解析；\n7、了解Socket编程,有Socket相关开发经验者优先；\n8、具备其它开发经验者优先,如Android,J2EE,.Net等', '伊步科技LinkDoc致力于打造全球最领先的医疗数据解决方案及肿瘤大数据平台,及人工智能解决方案。帮助中国医疗机构及临床专家提高诊断、随访、科研等各个环节的效率,更好的驾驭科技发展。\n核心技术团队来自', 'ios', '北京昌平区上田大厦', '1525657144', 1, 10, '全国', 0, '互联网', 100020, 'iOS', 28);
INSERT INTO `job` VALUES (21, 12, 58, '广西万寿谷投资集团股份有限公司南宁分公司', NULL, '仓库管理', '1', '不限', '岗位职责：\n1．及时、准确维护库存管理系统，确保仓库物品的帐、卡、物三者一致，仓库区域划分明确，物料标识清楚，存卡记录连续、字迹清晰；\n2．做好仓库物料的收发存管理，严格按流程要求收发物料，并及时跟踪作业物料的发送，协助财务成本管理组对物料采购与车间生产成本的控制和监督；\n3．与领料人员密切配合，做好生产物料的调度工作，切实履行物料储备和配送的物流职能，并及时向部门反馈物料的短缺或过量等异常情况；\n4．对物料管理的有序性、安全性、完整性及有效性负责，对部品物料的实行分区存放管理，确保库容库貌；定期或不定期向财务部报告部品存货质量情况及呆滞积压物料的分布，按要求定期填制提交呆滞报废物料的处理申请', '工作认真，团队意识强，能吃苦耐劳！服从管理 ', '仓库料管理', '南宁青秀区利海·亚洲国际领峰A座21楼', '1525658083', 1, 4, '南宁', 101300100, '物流/仓储', 100502, '仓储管理', 681);
INSERT INTO `job` VALUES (22, 12, 58, '广西万寿谷投资集团股份有限公司南宁分公司', NULL, '培训经理/主管', '2', '不限', '工作职责：\n1、负责编制培训规划及培训执行计划；\n2、制定和实施专项培训计划；\n3、跟踪外部培训市场变化，发掘并利用外部培训资源；\n4、设计、开发、讲授培训课程；\n5、设计培训评估考核体系并协助评估各大区域培训效果；\n\n任职资格         \n1、人力资源管理类或相关专业专科以上学历；\n2、2年以上企业培训工作经验；\n3、熟练制定相关的培训课程及培训教案；\n4、较强的企业分析能力和课程开发能力； ', '工作认真，团队意识强，能吃苦耐劳！服从管理 ', '员工培训', '南宁青秀区利海·亚洲国际领峰A座21楼', '1525658276', 1, 7, '南宁', 101300100, '企业服务', 100015, '管理培训生', 762);
INSERT INTO `job` VALUES (23, 13, 59, '宜信普惠信息咨询（北京）有限公司', NULL, '团队经理', '1', '大专', '一直在招聘，从来不缺人。\n缺的是人才！缺的是一起奋斗的同事！\n不要求你有多优秀，但必须有追求、有目标、做事认真有责任心！不会可以教，只要你肯学，敢于挑战！\n来到公司你能获得：\n一、高昂的激情状态，优质的晋升制度，我们的目标——成为信贷行业普惠金融家！\n二、多面的社会阅历，和人际关系，行万里路，阅人无数！\n【薪资待遇】\n（底薪+提成+返佣+五险+工作时间自由+法定节假日）\n正常干5000---8000元/月\n努力干8000---10000元/月\n使劲干10000---15000元/月\n拼命干15000元/月以上（不封顶）\n1、双休，法定节假日，朝九晚六。\n2、单位签订正式劳动合同，缴纳五险一金。', '团队2017年6月成立，汇集了来自山东各个地区的优秀销售精英，我们在一起快乐工作，一起拼，一起玩，通过自己的努力，我们团队百分之五十的人在济南都买了房，80%的人都有车。月月收入过万是我们团队成员的底', '销售管理', '济南市中区祥泰广场英雄山路129号祥泰广场1号楼3层', '1525658961', 1, 10, '济南', 101120100, '互联网金融', 100206, '区域/分公司/代表处负责人', 350);
INSERT INTO `job` VALUES (24, 15, 60, '拉扎斯网络科技（上海）有限公司', NULL, 'Python', '3', '本科', '负责公司zstack相关系统开发\n参与公司虚拟化，容器化建设 ', '“饿了么”是2008年创立的本地生活平台，主营在线外卖、新零售、即时配送和餐饮供应链等业务。隶属于上海拉扎斯信息科技有限公司，由张旭豪、康嘉等人于2009年4月在上海创立。', 'Python', '上海普陀区近铁城市广场', '1525665365', 1, 15, '上海', 101020100, '互联网', 100020, 'Python', 11);
INSERT INTO `job` VALUES (25, 17, 61, '代工工', NULL, '森林', '2', '52', '123132', '132123', 'php', '123123', '1525673900', 0, 14, '全国', 0, '人力资源服务', 100014, '视觉设计师', 156);

-- ----------------------------
-- Table structure for links
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `link` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `referral` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of links
-- ----------------------------
INSERT INTO `links` VALUES (1, '慧聪网', 'www.hc360.com', '', '慧聪集团有限公司（「本公司」）及其附属公司（统称「本集团」）是中华人民共和国（「中国」）领先之产业互联网集团之一。本集团于一九九二年成立，于二零零三年在香港联合交易所有限公司（「联交所」）创业板上市及二零一四年十月十日成功转入联交所主板上市。二零一七年八月，本公司获恒生指数有限公司选为多个指数系列的成份股，同年九月被调入深港通名单。截至二零一七年十二月三十一日，本集团之业务范围已经拓展至全国上百城市，在9个城市拥有分支机构，服务团队约2,578人。');
INSERT INTO `links` VALUES (2, '天眼查', 'www.tianyancha.com', '', '天眼查网页版是北京金堤科技有限公司（以下简称“金堤科技”或“天眼查”）自主开发的产品，除此之外，金堤科技旗下还有“天眼查”APP、“天眼查”专业版等相关产品。');
INSERT INTO `links` VALUES (3, '新东方', 'www.koolearn.com', '', '新东方在线是新东方教育科技集团(NYSE:EDU)旗下专业的在线教育网站，是国内首批专业在线教育网站之一，依托新东方强大师资力量与教学资源，拥有中国先进的教学内容开发与制作团队，致力于为广大用户提供个性化、互动化、智能化的卓越在线学习体验。课程涵盖出国考试、国内考试、职业教育、英语学习、多种语言、K12教育等6大类，共计近3000门课程。目前，新东方在线网站个人注册用户已逾1500万，移动学习用户超过5280万');

-- ----------------------------
-- Table structure for msg
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sender_id` int(10) UNSIGNED NOT NULL COMMENT '发送者id',
  `scope` int(10) UNSIGNED NOT NULL COMMENT '消息发送范围 ,0 对普通用户, 1对HR, 3 全站消息 , 其它数字可为组id',
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '标题',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '消息正文',
  `addtime` int(10) UNSIGNED NOT NULL COMMENT '添加时间',
  `expiretime` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '过期时间, 0 永久有效, 有效时间戳',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of msg
-- ----------------------------
INSERT INTO `msg` VALUES (1, 21, 3, '第一条_2', '<p><span style=\"text-decoration: underline;\"><strong>777项目组</strong></span></p><ol style=\"list-style-type: decimal;\" class=\" list-paddingleft-2\"><li><p><span style=\"text-decoration: none;\">111</span></p></li><li><p><span style=\"text-decoration: none;\">222</span></p></li><li><p><span style=\"text-decoration: none;\">333</span></p></li></ol><p>今天好天心</p><p>天气真好999<br/></p>', 1525587529, 0);
INSERT INTO `msg` VALUES (2, 21, 3, 'NO.2', '<p>99999999999<br/></p>', 1525590983, 0);
INSERT INTO `msg` VALUES (3, 21, 3, '333', '<p>33333333</p><p><br/></p>', 1525591251, 0);
INSERT INTO `msg` VALUES (4, 21, 3, '444', '<p>444444444444444<br/></p>', 1525591263, 0);
INSERT INTO `msg` VALUES (5, 21, 3, '55555', '<p>5555555555555555555555<br/></p>', 1525591404, 0);
INSERT INTO `msg` VALUES (6, 21, 3, '666', '<p>66666666666666<br/></p>', 1525591424, 0);
INSERT INTO `msg` VALUES (7, 21, 3, '777', '<p>7777777777<br/></p>', 1525591441, 0);
INSERT INTO `msg` VALUES (8, 21, 3, '888', '<p>888888888<br/></p>', 1525591453, 0);
INSERT INTO `msg` VALUES (9, 21, 3, '999', '<p>99999999999<br/></p>', 1525591466, 1525591466);
INSERT INTO `msg` VALUES (10, 21, 3, '0505', '<p>6666<strong>6666</strong><br/></p>', 1525621991, 0);
INSERT INTO `msg` VALUES (11, 21, 3, '再一个头条', '<ol style=\"list-style-type: decimal;\" class=\" list-paddingleft-2\"><li><p>哈哈</p></li><li><p>好天气</p></li><li><p>3333<br/></p></li></ol>', 1525673464, 0);

-- ----------------------------
-- Table structure for msglog
-- ----------------------------
DROP TABLE IF EXISTS `msglog`;
CREATE TABLE `msglog`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `m_id` int(10) UNSIGNED NOT NULL COMMENT '消息内容表的id编号',
  `receiver_id` int(10) UNSIGNED NOT NULL COMMENT '接收者id',
  `scope` int(10) UNSIGNED NOT NULL COMMENT '消息发送范围 ,0 对普通用户, 1对HR, 3 全站消息 , 其它数字可为组id',
  `status` tinyint(3) NOT NULL DEFAULT 0 COMMENT '-1删除 , 0 未读 , 1 已读',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 96 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of msglog
-- ----------------------------
INSERT INTO `msglog` VALUES (1, 1, 5, 3, 1);
INSERT INTO `msglog` VALUES (2, 2, 5, 3, 0);
INSERT INTO `msglog` VALUES (3, 3, 5, 3, 1);
INSERT INTO `msglog` VALUES (4, 4, 5, 3, 1);
INSERT INTO `msglog` VALUES (5, 5, 5, 3, 0);
INSERT INTO `msglog` VALUES (6, 6, 5, 3, 1);
INSERT INTO `msglog` VALUES (7, 7, 5, 3, 1);
INSERT INTO `msglog` VALUES (8, 8, 5, 3, 0);
INSERT INTO `msglog` VALUES (9, 9, 5, 3, 0);
INSERT INTO `msglog` VALUES (10, 1, 1, 3, 0);
INSERT INTO `msglog` VALUES (11, 2, 1, 3, 0);
INSERT INTO `msglog` VALUES (12, 3, 1, 3, 0);
INSERT INTO `msglog` VALUES (13, 4, 1, 3, 0);
INSERT INTO `msglog` VALUES (14, 5, 1, 3, 0);
INSERT INTO `msglog` VALUES (15, 6, 1, 3, 0);
INSERT INTO `msglog` VALUES (16, 7, 1, 3, 0);
INSERT INTO `msglog` VALUES (17, 8, 1, 3, 0);
INSERT INTO `msglog` VALUES (19, 1, 10, 3, 0);
INSERT INTO `msglog` VALUES (20, 2, 10, 3, 0);
INSERT INTO `msglog` VALUES (21, 3, 10, 3, 0);
INSERT INTO `msglog` VALUES (22, 4, 10, 3, 0);
INSERT INTO `msglog` VALUES (23, 5, 10, 3, 0);
INSERT INTO `msglog` VALUES (24, 6, 10, 3, 0);
INSERT INTO `msglog` VALUES (25, 7, 10, 3, 0);
INSERT INTO `msglog` VALUES (26, 8, 10, 3, 0);
INSERT INTO `msglog` VALUES (27, 10, 10, 3, 0);
INSERT INTO `msglog` VALUES (28, 1, 11, 3, 0);
INSERT INTO `msglog` VALUES (29, 2, 11, 3, 0);
INSERT INTO `msglog` VALUES (30, 3, 11, 3, 0);
INSERT INTO `msglog` VALUES (31, 4, 11, 3, 0);
INSERT INTO `msglog` VALUES (32, 5, 11, 3, 0);
INSERT INTO `msglog` VALUES (33, 6, 11, 3, 0);
INSERT INTO `msglog` VALUES (34, 7, 11, 3, 0);
INSERT INTO `msglog` VALUES (35, 8, 11, 3, 0);
INSERT INTO `msglog` VALUES (36, 10, 11, 3, 0);
INSERT INTO `msglog` VALUES (37, 1, 12, 3, 0);
INSERT INTO `msglog` VALUES (38, 2, 12, 3, 0);
INSERT INTO `msglog` VALUES (39, 3, 12, 3, 0);
INSERT INTO `msglog` VALUES (40, 4, 12, 3, 0);
INSERT INTO `msglog` VALUES (41, 5, 12, 3, 0);
INSERT INTO `msglog` VALUES (42, 6, 12, 3, 0);
INSERT INTO `msglog` VALUES (43, 7, 12, 3, 0);
INSERT INTO `msglog` VALUES (44, 8, 12, 3, 0);
INSERT INTO `msglog` VALUES (45, 10, 12, 3, 0);
INSERT INTO `msglog` VALUES (46, 1, 13, 3, 0);
INSERT INTO `msglog` VALUES (47, 2, 13, 3, 0);
INSERT INTO `msglog` VALUES (48, 3, 13, 3, 0);
INSERT INTO `msglog` VALUES (49, 4, 13, 3, 0);
INSERT INTO `msglog` VALUES (50, 5, 13, 3, 0);
INSERT INTO `msglog` VALUES (51, 6, 13, 3, 0);
INSERT INTO `msglog` VALUES (52, 7, 13, 3, 0);
INSERT INTO `msglog` VALUES (53, 8, 13, 3, 0);
INSERT INTO `msglog` VALUES (54, 10, 13, 3, 0);
INSERT INTO `msglog` VALUES (55, 1, 14, 3, 1);
INSERT INTO `msglog` VALUES (56, 2, 14, 3, 1);
INSERT INTO `msglog` VALUES (57, 3, 14, 3, 0);
INSERT INTO `msglog` VALUES (58, 4, 14, 3, 0);
INSERT INTO `msglog` VALUES (59, 5, 14, 3, 0);
INSERT INTO `msglog` VALUES (60, 6, 14, 3, 0);
INSERT INTO `msglog` VALUES (61, 7, 14, 3, 0);
INSERT INTO `msglog` VALUES (62, 8, 14, 3, 0);
INSERT INTO `msglog` VALUES (63, 10, 14, 3, 0);
INSERT INTO `msglog` VALUES (64, 1, 15, 3, 0);
INSERT INTO `msglog` VALUES (65, 2, 15, 3, 0);
INSERT INTO `msglog` VALUES (66, 3, 15, 3, 0);
INSERT INTO `msglog` VALUES (67, 4, 15, 3, 0);
INSERT INTO `msglog` VALUES (68, 5, 15, 3, 0);
INSERT INTO `msglog` VALUES (69, 6, 15, 3, 0);
INSERT INTO `msglog` VALUES (70, 7, 15, 3, 0);
INSERT INTO `msglog` VALUES (71, 8, 15, 3, 0);
INSERT INTO `msglog` VALUES (72, 10, 15, 3, 0);
INSERT INTO `msglog` VALUES (73, 1, 16, 3, 0);
INSERT INTO `msglog` VALUES (74, 2, 16, 3, 0);
INSERT INTO `msglog` VALUES (75, 3, 16, 3, 0);
INSERT INTO `msglog` VALUES (76, 4, 16, 3, 0);
INSERT INTO `msglog` VALUES (77, 5, 16, 3, 0);
INSERT INTO `msglog` VALUES (78, 6, 16, 3, 0);
INSERT INTO `msglog` VALUES (79, 7, 16, 3, 0);
INSERT INTO `msglog` VALUES (80, 8, 16, 3, 0);
INSERT INTO `msglog` VALUES (81, 10, 16, 3, 0);
INSERT INTO `msglog` VALUES (82, 11, 16, 3, 1);
INSERT INTO `msglog` VALUES (83, 1, 17, 3, 0);
INSERT INTO `msglog` VALUES (84, 2, 17, 3, 0);
INSERT INTO `msglog` VALUES (85, 3, 17, 3, 0);
INSERT INTO `msglog` VALUES (86, 4, 17, 3, 0);
INSERT INTO `msglog` VALUES (87, 5, 17, 3, 0);
INSERT INTO `msglog` VALUES (88, 6, 17, 3, 0);
INSERT INTO `msglog` VALUES (89, 7, 17, 3, 0);
INSERT INTO `msglog` VALUES (90, 8, 17, 3, 0);
INSERT INTO `msglog` VALUES (91, 10, 17, 3, 0);
INSERT INTO `msglog` VALUES (92, 11, 17, 3, 0);
INSERT INTO `msglog` VALUES (93, 11, 13, 3, 0);
INSERT INTO `msglog` VALUES (94, 11, 12, 3, 0);
INSERT INTO `msglog` VALUES (95, 11, 10, 3, 0);

-- ----------------------------
-- Table structure for node
-- ----------------------------
DROP TABLE IF EXISTS `node`;
CREATE TABLE `node`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '节点名',
  `mname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT '控制器',
  `aname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT '方法',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 46 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of node
-- ----------------------------
INSERT INTO `node` VALUES (1, '浏览用户', 'user', 'getindex', 1);
INSERT INTO `node` VALUES (2, '添加用户', 'user', 'getadd', 1);
INSERT INTO `node` VALUES (3, '修改用户', 'user', 'getedit', 1);
INSERT INTO `node` VALUES (4, '删除用户', 'user', 'getdelete', 1);
INSERT INTO `node` VALUES (5, '简历信息', 'resume', 'getindex', 1);
INSERT INTO `node` VALUES (6, '管理员列表', 'permissions', 'getindex', 1);
INSERT INTO `node` VALUES (7, '管理员添加', 'permissions', 'getadminadd', 1);
INSERT INTO `node` VALUES (8, '管理员修改', 'permissions', 'getadd', 1);
INSERT INTO `node` VALUES (9, '管理员分配', 'permissions', 'getrolelist', 1);
INSERT INTO `node` VALUES (10, '权限列表', 'permissions', 'getpermissions', 1);
INSERT INTO `node` VALUES (11, '权限添加', 'permissions', 'getpermissionsadd', 1);
INSERT INTO `node` VALUES (12, '权限修改', 'permissions', 'getaddrole', 1);
INSERT INTO `node` VALUES (13, '权限点列表', 'permissions', 'getadminpermissions', 1);
INSERT INTO `node` VALUES (14, '权限点添加', 'permissions', 'getroleadd', 1);
INSERT INTO `node` VALUES (15, '权限点修改', 'permissions', 'getroleedit', 1);
INSERT INTO `node` VALUES (16, '分类列表', 'category', 'getindex', 1);
INSERT INTO `node` VALUES (17, '分类添加', 'category', 'getadd', 1);
INSERT INTO `node` VALUES (18, '分类修改', 'category', 'getedit', 1);
INSERT INTO `node` VALUES (19, '分类删除', 'category', 'geidelete', 1);
INSERT INTO `node` VALUES (20, '品牌列表', 'company', 'getindex', 1);
INSERT INTO `node` VALUES (21, '品牌添加', 'company', 'getadd', 1);
INSERT INTO `node` VALUES (22, '品牌修改', 'company', 'getedit', 1);
INSERT INTO `node` VALUES (23, '品牌删除', 'company', 'getdelete', 1);
INSERT INTO `node` VALUES (24, '广告候选列表', 'advertising', 'getadd', 1);
INSERT INTO `node` VALUES (27, '广告删除', 'advertising', 'getdelete', 1);
INSERT INTO `node` VALUES (28, '广告添加执行', 'advertising', 'getinsert', 1);
INSERT INTO `node` VALUES (30, '广告修改页', 'advertising', 'getedit', 1);
INSERT INTO `node` VALUES (31, '广告列表', 'advertising', 'getindex', 1);
INSERT INTO `node` VALUES (32, '轮播列表', 'carousel', 'getindex', 1);
INSERT INTO `node` VALUES (33, '轮播候选列表', 'carousel', 'getadd', 1);
INSERT INTO `node` VALUES (34, '轮播添加执行', 'carousel', 'getinsert', 1);
INSERT INTO `node` VALUES (35, '轮播修改页', 'carousel', 'getedit', 1);
INSERT INTO `node` VALUES (36, '友情链接列表', 'links', 'getindex', 1);
INSERT INTO `node` VALUES (37, '友情链接添加', 'links', 'getadd', 1);
INSERT INTO `node` VALUES (38, '友情链接修改', 'links', 'getedit', 1);
INSERT INTO `node` VALUES (39, '友情链接删除', 'links', 'getdelete', 1);
INSERT INTO `node` VALUES (40, '分类子列表', 'category', 'getseed', 1);
INSERT INTO `node` VALUES (41, '分类返回上一层', 'category', 'getback', 1);
INSERT INTO `node` VALUES (42, '站内信列表', 'message', 'getindex', 1);
INSERT INTO `node` VALUES (43, '站内信添加', 'message', 'getadd', 1);
INSERT INTO `node` VALUES (44, '站内信修改', 'message', 'getedit', 1);
INSERT INTO `node` VALUES (45, '站内信删除', 'message', 'getdelete', 1);

-- ----------------------------
-- Table structure for personal_deliver
-- ----------------------------
DROP TABLE IF EXISTS `personal_deliver`;
CREATE TABLE `personal_deliver`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(10) UNSIGNED NOT NULL COMMENT '用户id, 从session拿',
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '求职者姓名, 从session拿',
  `status` tinyint(1) NULL DEFAULT 0 COMMENT '0 未处理 1 邀约面试',
  `addtime` int(10) UNSIGNED NOT NULL COMMENT '添加时间',
  `j_id` int(10) UNSIGNED NOT NULL COMMENT '职位id',
  `hr_id` int(10) UNSIGNED NOT NULL COMMENT 'HR id, 查job表得出',
  `co_id` int(10) UNSIGNED NOT NULL COMMENT '公司id, 查job表得出',
  `hr_avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'hr头像',
  `hr_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'hr姓名',
  `hr_position` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'hr职位',
  `j_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '职位名',
  `j_location` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作城市',
  `j_experience` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作经验要求',
  `j_degree` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '学历要求',
  `j_salary` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '薪水',
  `co_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公司名',
  `co_industry` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司行业',
  `co_financing` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司融资',
  `co_employees` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司雇员人数',
  `co_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司logo',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `record`(`uid`, `j_id`) USING BTREE COMMENT 'uid与j_id合一起不能重复'
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_deliver
-- ----------------------------
INSERT INTO `personal_deliver` VALUES (4, 14, '苏积', 1, 1525661840, 17, 11, 57, NULL, '邓华杰', '伊步科技', 'PHP开发工程师', '北京', '5', '本科', '20', '伊步科技', 'IT', '未融资', '50', '/uploads/20180507\\7f3fc2a4703c66ad5da542931ba31a79.jpg');
INSERT INTO `personal_deliver` VALUES (5, 14, '苏积', 0, 1525668337, 22, 12, 58, NULL, '梁宋琪', '总经理', '培训经理/主管', '南宁', '2', '不限', '7', '万寿谷集团', '餐饮', '不需要融资', '500', '/uploads/thumbhome/1525660001.jpg');
INSERT INTO `personal_deliver` VALUES (6, 13, '陈锋', 1, 1525691512, 12, 10, 56, '/uploads/avatar/avatar_5aefd1ed1587b1.04254150.jpeg', '梁嘉伟', '嘟嘟蕾丝总经理', '幼教老师', '深圳', '1', '本科', '0', '嘟嘟', '学前教育', '未融资', '500', '/uploads/thumbhome/1525618898.jpg');

-- ----------------------------
-- Table structure for personal_interest
-- ----------------------------
DROP TABLE IF EXISTS `personal_interest`;
CREATE TABLE `personal_interest`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(10) UNSIGNED NOT NULL COMMENT '用户id, 从session拿',
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '求职者姓名, 从session拿',
  `status` tinyint(1) NULL DEFAULT 0 COMMENT '0 未处理 1 邀约面试',
  `addtime` int(10) UNSIGNED NOT NULL COMMENT '添加时间',
  `j_id` int(10) UNSIGNED NOT NULL COMMENT '职位id',
  `hr_id` int(10) UNSIGNED NOT NULL COMMENT 'HR id, 查job表得出',
  `co_id` int(10) UNSIGNED NOT NULL COMMENT '公司id, 查job表得出',
  `hr_avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'hr头像',
  `hr_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'hr姓名',
  `hr_position` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'hr职位',
  `j_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '职位名',
  `j_location` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作城市',
  `j_experience` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作经验要求',
  `j_degree` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '学历要求',
  `j_salary` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '薪水',
  `co_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公司名',
  `co_industry` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司行业',
  `co_financing` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司融资',
  `co_employees` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司雇员人数',
  `co_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司logo',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `record`(`uid`, `j_id`) USING BTREE COMMENT 'uid与j_id合一起不能重复'
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_interest
-- ----------------------------
INSERT INTO `personal_interest` VALUES (9, 14, '苏积', 0, 1525664029, 21, 12, 58, NULL, '梁宋琪', '总经理', '仓库管理', '南宁', '1', '不限', '4', '万寿谷集团', '餐饮', '不需要融资', '500', '/uploads/20180507\\b4656bce56c300e4ccb48ad2353b4a34.jpg');
INSERT INTO `personal_interest` VALUES (10, 14, '苏积', 0, 1525672605, 23, 13, 59, NULL, '陈锋', '总经理', '团队经理', '济南', '1', '大专', '10', '宜信公司', '互联网金融', '以上市', '999', '/uploads/thumbhome/1525660959.jpg');

-- ----------------------------
-- Table structure for resume_adventage
-- ----------------------------
DROP TABLE IF EXISTS `resume_adventage`;
CREATE TABLE `resume_adventage`  (
  `uid` int(10) UNSIGNED NOT NULL,
  `ad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ad_text` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '优势陈述',
  PRIMARY KEY (`ad_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resume_adventage
-- ----------------------------
INSERT INTO `resume_adventage` VALUES (14, 2, '两年的PHP开发,熟悉各种框架,2017年获得php进步奖奖状.');
INSERT INTO `resume_adventage` VALUES (16, 3, '88888888');

-- ----------------------------
-- Table structure for resume_education
-- ----------------------------
DROP TABLE IF EXISTS `resume_education`;
CREATE TABLE `resume_education`  (
  `uid` int(10) UNSIGNED NOT NULL,
  `ed_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ed_school` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '学校名称',
  `ed_subject` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT ' 专业名称',
  `ed_degree` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '学历',
  `ed_startdate` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '时间段前',
  `ed_enddate` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '时间段后',
  `ed_experience` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '在校经历',
  PRIMARY KEY (`ed_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resume_education
-- ----------------------------
INSERT INTO `resume_education` VALUES (14, 2, '广西大学', 'php', '本科', '2009', '2013', '参加过php开发无获奖');

-- ----------------------------
-- Table structure for resume_history
-- ----------------------------
DROP TABLE IF EXISTS `resume_history`;
CREATE TABLE `resume_history`  (
  `uid` int(10) UNSIGNED NOT NULL,
  `hi_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hi_company` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公司名称',
  `hi_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '职业类型',
  `hi_position` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '职业名称',
  `hi_industry` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '所属行业',
  `hi_startdate` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '在职时间前',
  `hi_enddate` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '在职时间后',
  `hi_department` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '所属部门',
  `hi_work` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '工作内容',
  `hi_results` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '工作业绩',
  PRIMARY KEY (`hi_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resume_history
-- ----------------------------
INSERT INTO `resume_history` VALUES (14, 4, '伊步科技', 'PHP', 'php', '互联网', '2018', '至今', 'php开发部门', '主要是敲代码', '2017年无业绩');
INSERT INTO `resume_history` VALUES (14, 5, '8888', '游戏制作人', '5555', '人力资源服务', '2016', '至今', '5555', '55', NULL);
INSERT INTO `resume_history` VALUES (16, 6, '88888999', '游戏制作人', '88888', '移动互联网', '2011', '2015', '88888', '8', NULL);

-- ----------------------------
-- Table structure for resume_info
-- ----------------------------
DROP TABLE IF EXISTS `resume_info`;
CREATE TABLE `resume_info`  (
  `in_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '简历总览表id',
  `uid` int(10) UNSIGNED NOT NULL COMMENT '用户id',
  `in_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户真实姓名',
  `in_sex` tinyint(3) UNSIGNED NOT NULL COMMENT '性别',
  `in_status` tinyint(3) NULL DEFAULT NULL COMMENT '找工作状态',
  `in_start_work_year` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '开始工作年份',
  `in_birthday` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '生日',
  `in_wx` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '微信号',
  `in_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '电子邮箱',
  PRIMARY KEY (`in_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resume_info
-- ----------------------------
INSERT INTO `resume_info` VALUES (2, 14, '苏积88', 1, 0, '2016', '1995', 'sj123456', '1628506685@qq.com');
INSERT INTO `resume_info` VALUES (3, 16, '888', 1, 2, '2016', '1990', 'wiexin', 'qq@qq.com');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '角色名字',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '负责模块',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, '普通管理员', 1, '浏览用户');
INSERT INTO `role` VALUES (2, '超级管理员', 1, '浏览用户 添加用户 修改用户 删除用户 文章管理');
INSERT INTO `role` VALUES (3, '一级会员', 1, NULL);

-- ----------------------------
-- Table structure for role_node
-- ----------------------------
DROP TABLE IF EXISTS `role_node`;
CREATE TABLE `role_node`  (
  `rid` int(10) NOT NULL,
  `nid` int(10) NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of role_node
-- ----------------------------
INSERT INTO `role_node` VALUES (2, 45);
INSERT INTO `role_node` VALUES (2, 44);
INSERT INTO `role_node` VALUES (2, 43);
INSERT INTO `role_node` VALUES (2, 42);
INSERT INTO `role_node` VALUES (2, 41);
INSERT INTO `role_node` VALUES (2, 40);
INSERT INTO `role_node` VALUES (3, 4);
INSERT INTO `role_node` VALUES (2, 39);
INSERT INTO `role_node` VALUES (2, 38);
INSERT INTO `role_node` VALUES (2, 37);
INSERT INTO `role_node` VALUES (2, 36);
INSERT INTO `role_node` VALUES (2, 35);
INSERT INTO `role_node` VALUES (2, 34);
INSERT INTO `role_node` VALUES (2, 33);
INSERT INTO `role_node` VALUES (2, 32);
INSERT INTO `role_node` VALUES (3, 3);
INSERT INTO `role_node` VALUES (1, 5);
INSERT INTO `role_node` VALUES (2, 31);
INSERT INTO `role_node` VALUES (2, 30);
INSERT INTO `role_node` VALUES (1, 1);
INSERT INTO `role_node` VALUES (3, 2);
INSERT INTO `role_node` VALUES (3, 1);
INSERT INTO `role_node` VALUES (2, 28);
INSERT INTO `role_node` VALUES (2, 27);
INSERT INTO `role_node` VALUES (2, 24);
INSERT INTO `role_node` VALUES (2, 23);
INSERT INTO `role_node` VALUES (2, 22);
INSERT INTO `role_node` VALUES (2, 21);
INSERT INTO `role_node` VALUES (2, 20);
INSERT INTO `role_node` VALUES (2, 19);
INSERT INTO `role_node` VALUES (2, 18);
INSERT INTO `role_node` VALUES (2, 17);
INSERT INTO `role_node` VALUES (2, 16);
INSERT INTO `role_node` VALUES (2, 15);
INSERT INTO `role_node` VALUES (2, 14);
INSERT INTO `role_node` VALUES (2, 13);
INSERT INTO `role_node` VALUES (2, 12);
INSERT INTO `role_node` VALUES (2, 11);
INSERT INTO `role_node` VALUES (2, 10);
INSERT INTO `role_node` VALUES (2, 9);
INSERT INTO `role_node` VALUES (2, 8);
INSERT INTO `role_node` VALUES (2, 7);
INSERT INTO `role_node` VALUES (2, 6);
INSERT INTO `role_node` VALUES (2, 5);
INSERT INTO `role_node` VALUES (2, 4);
INSERT INTO `role_node` VALUES (2, 3);
INSERT INTO `role_node` VALUES (2, 2);
INSERT INTO `role_node` VALUES (2, 1);
INSERT INTO `role_node` VALUES (3, 5);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_id` int(10) UNSIGNED NULL DEFAULT NULL COMMENT '公司id',
  `phone_prefix` char(4) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '手机号地区码,如:+86',
  `phone_postfix` char(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '手机号',
  `phone` char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '带地区码的手机号',
  `password` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '密码',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '用户角色状态, -1禁用, 0牛人, 1HR',
  `addtime` int(10) NOT NULL COMMENT '注册时间,时间戳',
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户真实姓名',
  `position` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'BOSS职位',
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '头像链接',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (10, 56, '+86', '17665311971', '+8617665311971', '4297f44b13955235245b2497399d7a93', 1, 1525607767, '梁嘉伟', '嘟嘟蕾丝总经理', '/uploads/avatar/avatar_5aefd1ed1587b1.04254150.jpeg');
INSERT INTO `user` VALUES (11, 57, '+86', '17665450001', '+8617665450001', '4297f44b13955235245b2497399d7a93', 1, 1525655819, '邓华杰', 'CEO', NULL);
INSERT INTO `user` VALUES (12, 58, '+86', '15278358256', '+8615278358256', '4297f44b13955235245b2497399d7a93', 1, 1525657248, '梁宋琪', '总经理', NULL);
INSERT INTO `user` VALUES (13, 59, '+86', '18520024254', '+8618520024254', '4297f44b13955235245b2497399d7a93', 0, 1525658324, '陈锋', '总经理', NULL);
INSERT INTO `user` VALUES (15, 60, '+86', '18664087670', '+8618664087670', NULL, 1, 1525664985, '吴涵涛', 'CEO', NULL);
INSERT INTO `user` VALUES (16, NULL, '+86', '18732072790', '+8618732072790', '4297f44b13955235245b2497399d7a93', 0, 1525673204, '888', NULL, '/uploads/avatar/avatar_5aefed849a4555.52716446.jpeg');

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role`  (
  `uid` int(10) NOT NULL COMMENT '用户id',
  `rid` int(10) NOT NULL COMMENT '角色id'
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of user_role
-- ----------------------------
INSERT INTO `user_role` VALUES (1, 2);
INSERT INTO `user_role` VALUES (11, 2);
INSERT INTO `user_role` VALUES (12, 3);
INSERT INTO `user_role` VALUES (21, 2);
INSERT INTO `user_role` VALUES (22, 3);

SET FOREIGN_KEY_CHECKS = 1;
