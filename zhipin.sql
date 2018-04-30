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

 Date: 30/04/2018 15:46:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `passwrod` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, '13030113462', '123123', 1);
INSERT INTO `admin` VALUES (12, '13640129335', '123123', 1);
INSERT INTO `admin` VALUES (11, '17665311971', '123123', 1);

-- ----------------------------
-- Table structure for carousel
-- ----------------------------
DROP TABLE IF EXISTS `carousel`;
CREATE TABLE `carousel`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bgs` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `co_id` int(10) NOT NULL,
  `bg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `homepage` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carousel
-- ----------------------------
INSERT INTO `carousel` VALUES (12, '杜蕾斯S', '/uploads/thumbhome/1524889759.jpg', 26, '/uploads/20180428\\9fa8f051de37c10ac2f2488607345beb.jpg', 'www.baidu,com');
INSERT INTO `carousel` VALUES (13, '梁嘉伟', '/uploads/thumbhome/1524884496.jpg', 27, '/uploads/20180428\\a83179adae84ae97a62397df00a479a0.jpg', '');
INSERT INTO `carousel` VALUES (14, 'UZI', '/uploads/thumbhome/1524903692.jpg', 28, '/uploads/20180428\\61585eebb3f612393cdc11d0772ca8b2.jpg', '');
INSERT INTO `carousel` VALUES (15, '邓华杰', '/uploads/thumbhome/1524731225.jpg', 24, '/uploads/20180428\\3d47584347478cb4855ea9722cf70d7a.jpg', '');
INSERT INTO `carousel` VALUES (16, '啊啊', '/uploads/thumbhome/1524714652.png', 23, '/uploads/20180428\\449093fb9e8e1415eedfc9a714dc2c53.jpg', '');

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
) ENGINE = MyISAM AUTO_INCREMENT = 886 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
  `profile` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '简介',
  `homepage` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '官网',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES (1, '深圳777直聘', '深圳华杰777直聘有限公司', './uploads/20180420\\0b65ea3df409b6b863bc27f42c2b18ed.jpg', '/uploads/thumb/1524223107.jpg', './uploads/20180420\\9acd2b9dab3ee2f60d9c2c499d5b055b.jpg', '/uploads/thumb/1524217392.jpg', '50000000', '10000', 'IT', '努力就会成功', 'www.huajie777.com');
INSERT INTO `company` VALUES (2, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `company` VALUES (19, 'ssss', 'sss', './uploads/20180426\\6a260995f9b8a254b8947baf7feb514d.jpg', '/uploads/thumbhome/1524712899.jpg', './uploads/20180426\\4acb871b7e37c0e7c5c012dd3d0f4ad6.jpg', '/uploads/thumbhome/1524709600.jpg', 'ssss', 'sss', 'sss', 'ssss', 'ssss');
INSERT INTO `company` VALUES (20, '小华姐', '小华姐公司', './uploads/20180426\\7fa14e75ce19411413650ed60f1fb44b.png', '/uploads/thumbhome/1524714151.png', './uploads/20180426\\a719861327c94b8cdef4dd328c85920e.png', '/uploads/thumbhome/1524717437.png', '1500000', '10000e', 'IT', '本科', 'www.huajie.com');
INSERT INTO `company` VALUES (21, '小华姐1', '小华姐公司2', './uploads/20180426\\4cbbb7006baba8b6856c75e44441ac28.png', '/uploads/thumbhome/1524718965.png', './uploads/20180426\\108376ccf9ae2a2c9e5d844d1725a5d2.png', '/uploads/thumbhome/1524713498.png', '15000003', '10000e1', 'IT', '本科', 'www.huajie.com');
INSERT INTO `company` VALUES (22, 'sss', '', './uploads/20180426\\2c07df626ab33398c0624f4d1721b604.jpg', '/uploads/thumbhome/1524717120.jpg', './uploads/20180426\\b6160d46783bcab2684dd21c4fa98d91.jpg', '/uploads/thumbhome/1524710198.jpg', '', '啊啊啊', '', '', '');
INSERT INTO `company` VALUES (23, '啊啊', '', './uploads/20180426\\ae04f0ee007e57e2ef83ac7574ef5833.png', '/uploads/thumbhome/1524714652.png', './uploads/20180426\\8a30a7563de80a7e5a71e61642b60621.png', '/uploads/thumbhome/1524718522.png', '', '', '', '', '');
INSERT INTO `company` VALUES (24, '邓华杰', '邓华杰很漂亮', './uploads/20180426\\6236d92fd174f2af6c60024a9163f9a4.jpg', '/uploads/thumbhome/1524731225.jpg', './uploads/20180426\\28bb5c476d2c48af493ce146b8168994.jpg', '/uploads/thumbhome/1524727015.jpg', '2', '10', 'IT', '123', '123');
INSERT INTO `company` VALUES (25, '阿加雷斯', '阿加雷斯杜蕾斯', './uploads/20180428\\a49308c69689ad9576b8ee958fc72b8f.jpg', '/uploads/thumbhome/1524882848.jpg', './uploads/20180428\\8b1afaf774f3b6b8205bfc22658aa152.jpg', '/uploads/thumbhome/1524887866.jpg', 'A轮', '150000', 'IT', '11', 'www.ajls.com');
INSERT INTO `company` VALUES (26, '杜蕾斯S', '杜蕾斯S系列', './uploads/20180428\\807e72d7bf37d542301577fbcd758f29.jpg', '/uploads/thumbhome/1524889759.jpg', './uploads/20180428\\f6f6e5edd5c915bd2a5cf1715b8c3323.jpg', '/uploads/thumbhome/1524883141.jpg', '100000', '100000', 'IT', '本科', 'www.baidu,com');
INSERT INTO `company` VALUES (27, '梁嘉伟', '1121', './uploads/20180428\\a83179adae84ae97a62397df00a479a0.jpg', '/uploads/thumbhome/1524884496.jpg', './uploads/20180428\\657cf282d2abc0a7a0a306fb36d82c86.jpg', '/uploads/thumbhome/1524890230.jpg', '123132', '123123', '13132', '3132132', '33213');
INSERT INTO `company` VALUES (28, 'UZI', '狂小狗', './uploads/20180428\\61585eebb3f612393cdc11d0772ca8b2.jpg', '/uploads/thumbhome/1524903692.jpg', './uploads/20180428\\449093fb9e8e1415eedfc9a714dc2c53.jpg', '/uploads/thumbhome/1524904191.jpg', '12313', '1231321', '32123132', '21313', '13213213213');

-- ----------------------------
-- Table structure for company_addr
-- ----------------------------
DROP TABLE IF EXISTS `company_addr`;
CREATE TABLE `company_addr`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_id` int(10) UNSIGNED NOT NULL,
  `addr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company_addr
-- ----------------------------
INSERT INTO `company_addr` VALUES (1, 1, '1');
INSERT INTO `company_addr` VALUES (18, 20, '深圳龙华硅谷大院');
INSERT INTO `company_addr` VALUES (19, 21, '深圳龙华硅谷大院');
INSERT INTO `company_addr` VALUES (20, 22, '');
INSERT INTO `company_addr` VALUES (21, 23, '');
INSERT INTO `company_addr` VALUES (22, 24, '123');
INSERT INTO `company_addr` VALUES (24, 26, '北京烤鸭');
INSERT INTO `company_addr` VALUES (25, 25, '13213213');
INSERT INTO `company_addr` VALUES (26, 28, '13131');

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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company_admin
-- ----------------------------
INSERT INTO `company_admin` VALUES (1, 25, '111', '11');
INSERT INTO `company_admin` VALUES (2, 21, '邓华杰', '本科');
INSERT INTO `company_admin` VALUES (3, 21, '邓华杰1', '本科');
INSERT INTO `company_admin` VALUES (4, 21, '', '');
INSERT INTO `company_admin` VALUES (5, 211, '', '');
INSERT INTO `company_admin` VALUES (6, 21, '123', '123');
INSERT INTO `company_admin` VALUES (9, 25, '211321', '3132132');
INSERT INTO `company_admin` VALUES (10, 28, '31313', '21313');

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
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company_env
-- ----------------------------
INSERT INTO `company_env` VALUES (1, 1, '1', '');
INSERT INTO `company_env` VALUES (18, 20, './uploads/20180426\\8d15d1c7a00a9b9d97080ec4ec5816bc.png', '/uploads/thumbhome/1524719253.png');
INSERT INTO `company_env` VALUES (19, 21, './uploads/20180426\\f19d1c4eb9ea3da87a40cdfda92d67c0.png', '/uploads/thumbhome/1524718039.png');
INSERT INTO `company_env` VALUES (20, 22, './uploads/20180426\\c4d593ae4d26bccfe2e78b14c151fb22.png', '/uploads/thumbhome/1524711135.png');
INSERT INTO `company_env` VALUES (21, 23, './uploads/20180426\\8eb8c5f9061c92c8201ba619dc8e4528.png', '/uploads/thumbhome/1524715188.png');
INSERT INTO `company_env` VALUES (22, 24, './uploads/20180426\\706fdc78ed8a07e09e8f29e1a1093b72.jpg', '/uploads/thumbhome/1524724855.jpg');
INSERT INTO `company_env` VALUES (25, 25, '/uploads/20180428\\9fa8f051de37c10ac2f2488607345beb.jpg', '/uploads/thumbhome/1524886281.jpg');
INSERT INTO `company_env` VALUES (26, 28, '/uploads/20180428\\3d47584347478cb4855ea9722cf70d7a.jpg', '/uploads/thumbhome/1524906024.jpg');

-- ----------------------------
-- Table structure for job
-- ----------------------------
DROP TABLE IF EXISTS `job`;
CREATE TABLE `job`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hr_id` int(10) UNSIGNED NOT NULL COMMENT 'HR_id',
  `co_id` int(10) UNSIGNED NOT NULL COMMENT '公司id',
  `icinfo_id` int(10) NULL DEFAULT NULL COMMENT '工商信息id',
  `job` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作名称',
  `location` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '所在地',
  `location_code` int(10) NOT NULL COMMENT '所在地编号',
  `experience` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '要求经验年限',
  `degree` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '要求学历',
  `job_descr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '职位描述',
  `team_descr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '团队介绍',
  `tags` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '职位标签',
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作地址',
  `timestamp` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '发布时间',
  `status` int(2) NOT NULL COMMENT '状态',
  `salary` tinyint(3) UNSIGNED NOT NULL COMMENT '薪水',
  `industry` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '所在行业',
  `industry_code` int(10) NOT NULL COMMENT '所在行业编号',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of job
-- ----------------------------
INSERT INTO `job` VALUES (1, 1, 25, NULL, 'PHP高级设计师', '深圳', 0, '3', '本科', '1.聪明开放\n2.只收男性\n3.具有很好的职业精神与服务\n4.客户就是上帝', '不管你个人有多出众都无法跟一个团队相比,我们就是你们家人,爱你么么哒,欢迎您的加入.', 'php程序员', '深圳龙华市大地公园旁茅厕A巷20号', '1524404660', 1, 4, '', 0);
INSERT INTO `job` VALUES (2, 1, 25, NULL, '1111', '11111', 0, '11111', '122', '11', '22222', '2222', '2222', '1524451701', 0, 5, '', 0);
INSERT INTO `job` VALUES (3, 1, 25, NULL, '华杰', 'iiiii', 0, 'iiiiiiiiii', 'iiiii', 'iiiiiiii', 'iiiiiiiissss', 'iiiiii', 'iiii', '1524466843', 0, 2, '', 0);
INSERT INTO `job` VALUES (4, 1, 25, NULL, '111222', '222', 0, '22', '22', '2222', '2222', '222', '222', '1524496504', 1, 1, '', 0);
INSERT INTO `job` VALUES (5, 1, 25, NULL, '21', '133', 0, '11', '11111', '12', '123', '123', '12', '1524705449', 1, 1, '', 0);
INSERT INTO `job` VALUES (6, 1, 25, NULL, '22', '2', 0, '22', '2', '2', '2', '22', '2', '1524705449', 1, 22, '', 0);
INSERT INTO `job` VALUES (7, 1, 1, NULL, 'php1', '深圳', 101010100, '1', '本科', '222', '3333', 'php', '北京环山路', '1524838562', 1, 2, '社交网络', 100013);

-- ----------------------------
-- Table structure for node
-- ----------------------------
DROP TABLE IF EXISTS `node`;
CREATE TABLE `node`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '节点名',
  `mname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT '控制器',
  `aname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT '方法',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

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

-- ----------------------------
-- Table structure for offer
-- ----------------------------
DROP TABLE IF EXISTS `offer`;
CREATE TABLE `offer`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `job_id` int(10) NULL DEFAULT NULL COMMENT '工作id',
  `job_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作名字',
  `status` tinyint(3) NULL DEFAULT 1 COMMENT '状态',
  `uid` int(10) NOT NULL COMMENT '用户id',
  `username` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户名字',
  `addtime` int(10) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offer
-- ----------------------------
INSERT INTO `offer` VALUES (1, 1, '1', 1, 1, '1', 1);
INSERT INTO `offer` VALUES (2, 2, '2', 1, 2, '2', 2);

-- ----------------------------
-- Table structure for personal_record
-- ----------------------------
DROP TABLE IF EXISTS `personal_record`;
CREATE TABLE `personal_record`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(10) UNSIGNED NOT NULL COMMENT '用户id',
  `j_id` int(10) UNSIGNED NOT NULL COMMENT '职位id',
  `hr_id` int(10) UNSIGNED NOT NULL COMMENT 'HR id',
  `co_id` int(10) UNSIGNED NOT NULL COMMENT '公司id',
  `hr_avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'hr头像',
  `hr_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'hr姓名',
  `hr_position` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'hr职位',
  `j_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '职位名',
  `j_location` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作城市',
  `j_experience` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '工作经验要求',
  `j_degree` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '学历要求',
  `co_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公司名',
  `co_industry` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司行业',
  `co_financing` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司融资',
  `co_employees` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司雇员人数',
  `co_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司logo',
  `deliver_status` tinyint(1) NULL DEFAULT 0 COMMENT '0 未投递 1 已投递',
  `interveiw_status` tinyint(1) NULL DEFAULT 0 COMMENT '0 未邀约面试',
  `interest_status` tinyint(1) NULL DEFAULT 0 COMMENT '1 感兴趣',
  `chat_status` tinyint(1) NULL DEFAULT 0 COMMENT '1 沟通过',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `record`(`uid`, `j_id`) USING BTREE COMMENT 'uid与j_id合一起不能重复'
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for resume_adventage
-- ----------------------------
DROP TABLE IF EXISTS `resume_adventage`;
CREATE TABLE `resume_adventage`  (
  `uid` int(10) UNSIGNED NOT NULL,
  `ad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ad_text` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '优势陈述',
  PRIMARY KEY (`ad_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resume_adventage
-- ----------------------------
INSERT INTO `resume_adventage` VALUES (1, 1, '1');

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
  `ed_startdate` int(10) NOT NULL COMMENT '时间段前',
  `ed_enddate` int(10) NOT NULL COMMENT '时间段后',
  `ed_experience` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '在校经历',
  PRIMARY KEY (`ed_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resume_education
-- ----------------------------
INSERT INTO `resume_education` VALUES (1, 1, '1', '1', '1', 1, 1, '1');

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
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resume_history
-- ----------------------------
INSERT INTO `resume_history` VALUES (1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1');

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
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resume_info
-- ----------------------------
INSERT INTO `resume_info` VALUES (1, 1, '1', 1, 1, '1', '1', '1', '1');

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
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `role_node` VALUES (2, 6);
INSERT INTO `role_node` VALUES (2, 1);
INSERT INTO `role_node` VALUES (2, 2);
INSERT INTO `role_node` VALUES (2, 3);
INSERT INTO `role_node` VALUES (2, 4);
INSERT INTO `role_node` VALUES (2, 5);
INSERT INTO `role_node` VALUES (3, 6);
INSERT INTO `role_node` VALUES (2, 14);
INSERT INTO `role_node` VALUES (2, 7);
INSERT INTO `role_node` VALUES (2, 8);
INSERT INTO `role_node` VALUES (2, 9);
INSERT INTO `role_node` VALUES (2, 10);
INSERT INTO `role_node` VALUES (2, 11);
INSERT INTO `role_node` VALUES (2, 12);
INSERT INTO `role_node` VALUES (2, 13);
INSERT INTO `role_node` VALUES (3, 5);
INSERT INTO `role_node` VALUES (1, 5);
INSERT INTO `role_node` VALUES (2, 15);
INSERT INTO `role_node` VALUES (2, 16);
INSERT INTO `role_node` VALUES (1, 1);
INSERT INTO `role_node` VALUES (3, 4);

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
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (5, NULL, '+86', '18520024254', '+8618520024254', 'b51e8dbebd4ba8a8f342190a4b9f08d7', 0, 1524304400, 'Jeffy', NULL, NULL);

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

SET FOREIGN_KEY_CHECKS = 1;
