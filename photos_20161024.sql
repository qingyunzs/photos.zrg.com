/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : photos

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-10-24 22:44:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ph_articles
-- ----------------------------
DROP TABLE IF EXISTS `ph_articles`;
CREATE TABLE `ph_articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '文章内容',
  `category` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '分类',
  `author` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '作者',
  `publish_time` datetime NOT NULL COMMENT '发布时间',
  `last_update_time` datetime NOT NULL COMMENT '更新时间',
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT '0' COMMENT '发布状态',
  `remark` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_articles
-- ----------------------------

-- ----------------------------
-- Table structure for ph_comments
-- ----------------------------
DROP TABLE IF EXISTS `ph_comments`;
CREATE TABLE `ph_comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论内容',
  `author` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论者',
  `status` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '显示状态',
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '管理员处理评论备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_comments
-- ----------------------------

-- ----------------------------
-- Table structure for ph_feedback_info
-- ----------------------------
DROP TABLE IF EXISTS `ph_feedback_info`;
CREATE TABLE `ph_feedback_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `contact_method` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '联系方式',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_feedback_info
-- ----------------------------

-- ----------------------------
-- Table structure for ph_members
-- ----------------------------
DROP TABLE IF EXISTS `ph_members`;
CREATE TABLE `ph_members` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) NOT NULL COMMENT '角色id',
  `user_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户编号',
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `nick_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '昵称',
  `sex` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '性别',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '邮箱',
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '联系电话',
  `user_logo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '用户头像',
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '所在地址',
  `question` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '问题',
  `answer` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '答案',
  `is_activate` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '是否激活(用于冻结账户)',
  `remark` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_members
-- ----------------------------
INSERT INTO `ph_members` VALUES ('1', '1', '0000-00-00 00:0', 'admin', '123456', null, '', null, null, null, null, null, null, '0', null);

-- ----------------------------
-- Table structure for ph_photos
-- ----------------------------
DROP TABLE IF EXISTS `ph_photos`;
CREATE TABLE `ph_photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '照片id',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `image_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片名称',
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '原始图片路径',
  `thnumbnail_image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '缩略图路径',
  `image_watermark_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '图片水印路径',
  `upload_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '上传时间',
  `popular_count` int(11) DEFAULT NULL COMMENT '图片的点击量',
  `is_delete` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT '是否已删除',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`) USING BTREE COMMENT '外键-user_id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_photos
-- ----------------------------

-- ----------------------------
-- Table structure for ph_system_admin
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_admin`;
CREATE TABLE `ph_system_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `admin_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员名称',
  `admin_pwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员密码',
  `sex` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '管理员性别',
  `email` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '管理员邮箱',
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '管理员手机号',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `last_update_time` int(11) DEFAULT NULL COMMENT '最后更新信息时间',
  `last_ip` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '最后登录IP',
  `last_login_time` int(11) DEFAULT NULL COMMENT '最后登录时间',
  `is_enable` varchar(4) COLLATE utf8_unicode_ci DEFAULT '1' COMMENT '启用状态',
  `is_delete` varchar(4) COLLATE utf8_unicode_ci DEFAULT '0' COMMENT '删除状态',
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '描述信息',
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=351 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_admin
-- ----------------------------
INSERT INTO `ph_system_admin` VALUES ('1', '0', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '男', '1390556487@qq.com', '13822221141', '1470837595', '1471136371', '127.0.0.1', '1477305038', '1', '0', '超级管理员，至高无上的权利');
INSERT INTO `ph_system_admin` VALUES ('350', '1', 'test', 'e10adc3949ba59abbe56e057f20f883e', '男', '134@qq.com', '13566765611', '1475669519', null, null, null, '1', '0', '');

-- ----------------------------
-- Table structure for ph_system_logs
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_logs`;
CREATE TABLE `ph_system_logs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `operate_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '操作时间',
  `action` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '操作',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_logs
-- ----------------------------

-- ----------------------------
-- Table structure for ph_system_menu
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_menu`;
CREATE TABLE `ph_system_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单ID',
  `menu_parent_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '菜单父节点ID',
  `menu_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单名称',
  `menu_alias` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单别名',
  `menu_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '菜单URL',
  `menu_icon` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '菜单小图标',
  `sort` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '排序',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `create_who` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '添加人',
  `edit_time` int(11) DEFAULT NULL COMMENT '编辑时间',
  `edit_who` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '编辑人',
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_menu
-- ----------------------------
INSERT INTO `ph_system_menu` VALUES ('1', 'M0001', '0', '文章管理', 'article_manage', '', '&#xe616;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('2', 'M0002', 'M0001', '文章列表', 'article_list', 'index.php?controller=article&method=article_list', null, '1', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('3', 'M0003', '0', '图片管理', 'picture_manage', '', '&#xe613;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('4', 'M0004', 'M0003', '图片列表', 'picture_list', 'index.php?controller=picture&method=picture_list', null, '1', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('5', 'M0005', 'M0003', '图片分类', 'picture_category', 'index.php?controller=picture&method=picture_category', null, '2', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('6', 'M0006', '0', '页面管理', 'page_manage', '', '&#xe626;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('7', 'M0007', 'M0006', '首页管理', 'page_home', 'index.php?controller=page&method=page_home', null, '1', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('8', 'M0008', 'M0006', '友情链接', 'page_flinks', 'index.php?controller=page&method=page_flinks', null, '2', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('9', '0', '', '相册管理平台', 'photos_platform', 'index.php', null, null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('10', 'M0009', '0', '广告管理', 'advert_manage', null, '&#xe613;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('11', 'M0011', 'M0009', '广告分类', 'advert_category', 'index.php?controller=advert&method=advert_category', null, '1', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('12', 'M0010', 'M0009', '广告列表', 'advert_list', 'index.php?controller=advert&method=advert_list', null, '2', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('13', 'M0012', '0', '评论管理', 'comment_manage', null, '&#xe622;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('14', 'M0013', 'M0012', '评论列表', 'comment_list', 'index.php?controller=comment&method=comment_list', null, '1', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('15', 'M0014', 'M0012', '意见反馈', 'feedback', 'index.php?controller=comment&method=feedback', null, '2', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('16', 'M0015', '0', '财务管理', 'finance_manage', null, '&#xe63a;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('17', 'M0016', 'M0015', '订单列表', 'order_list', 'index.php?controller=comment&method=order_list', null, '1', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('18', 'M0017', 'M0015', '充值管理', 'recharge_manage', 'index.php?controller=comment&method=recharge_manage', null, '2', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('19', 'M0018', 'M0015', '发票管理', 'invoice_manage', 'index.php?controller=comment&method=invoice_manage', null, '3', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('20', 'M0019', '0', '会员管理', 'member_manage', null, '&#xe60d;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('21', 'M0020', 'M0019', '会员列表', 'member_list', 'index.php?controller=member&method=member_list', null, '1', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('22', 'M0021', 'M0019', '等级管理', 'member_level', 'index.php?controller=member&method=member_level', null, '3', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('23', 'M0022', 'M0019', '积分管理', 'member_score', 'index.php?controller=member&method=member_score', null, '4', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('24', 'M0023', 'M0019', '浏览记录', 'member_browse', 'index.php?controller=member&method=member_browse', null, '5', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('25', 'M0024', 'M0019', '下载记录', 'member_download', 'index.php?controller=member&method=member_download', null, '6', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('26', 'M0025', 'M0019', '分享记录', 'member_share', 'index.php?controller=member&method=member_share', null, '7', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('27', 'M0026', '0', '管理员管理', 'admin_manage', null, '&#xe62d;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('28', 'M0027', 'M0026', '管理员列表', 'admin_list', 'index.php?controller=admin&method=admin_list', null, '1', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('29', 'M0028', 'M0026', '角色管理', 'admin_role', 'index.php?controller=admin&method=admin_role', null, '3', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('30', 'M0029', 'M0026', '权限管理', 'admin_permission', 'index.php?controller=admin&method=admin_permission', null, '4', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('31', 'M0030', '0', '统计分析', 'statistics_analyse', null, '&#xe61a;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('32', 'M0031', '0', '系统管理', 'system_manage', null, '&#xe62e;', null, null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('33', 'M0032', 'M0031', '系统设置', 'system_setting', 'index.php?controller=system&method=system_setting', null, '1', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('34', 'M0033', 'M0031', '栏目（菜单）管理', 'system_menu', 'index.php?controller=system&method=system_menu', null, '2', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('35', 'M0034', 'M0031', '数据字典', 'system_data', 'index.php?controller=system&method=system_data', null, '3', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('36', 'M0035', 'M0031', '屏蔽词', 'system_shielding', 'index.php?controller=system&method=system_shielding', null, '4', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('37', 'M0036', 'M0031', '系统日志', 'system_log', 'index.php?controller=system&method=system_log', null, '5', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('38', 'M0037', 'M0026', '管理员回收站', 'admin_trash', 'index.php?controller=admin&method=admin_trash', null, '2', null, null, null, null, null);
INSERT INTO `ph_system_menu` VALUES ('39', 'M0038', 'M0019', '会员回收站', 'member_trash', 'index.php?controller=member&method=member_trash', null, '2', null, null, null, null, null);

-- ----------------------------
-- Table structure for ph_system_node
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_node`;
CREATE TABLE `ph_system_node` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `node_code` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '节点ID',
  `parent_node_code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `node_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL COMMENT '关系创建时间',
  `create_who` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `edit_who` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remarks` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `node_code` (`node_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_node
-- ----------------------------

-- ----------------------------
-- Table structure for ph_system_node_permission
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_node_permission`;
CREATE TABLE `ph_system_node_permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `node_code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '节点编码',
  `privilege_code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '权限编码',
  PRIMARY KEY (`id`),
  KEY `node_code` (`node_code`),
  KEY `privilege_code` (`privilege_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_node_permission
-- ----------------------------

-- ----------------------------
-- Table structure for ph_system_permissions
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_permissions`;
CREATE TABLE `ph_system_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `privilege_code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT ' 权限编码',
  `privilege_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '权限名称',
  `access_privilege_code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '访问权限编码',
  `access_privilege_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '访问权限名称',
  `privilege_operation` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '权限状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for ph_system_resources
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_resources`;
CREATE TABLE `ph_system_resources` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `parent_code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_resources
-- ----------------------------

-- ----------------------------
-- Table structure for ph_system_roles
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_roles`;
CREATE TABLE `ph_system_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL COMMENT '角色ID',
  `role_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '角色名称',
  `role_alias` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '角色描述',
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_roles
-- ----------------------------
INSERT INTO `ph_system_roles` VALUES ('1', '0', '超级管理员', 'super_adminitstrator', '系统管理员，控制整个系统，拥有最高权限。');
INSERT INTO `ph_system_roles` VALUES ('2', '1', '普通管理员', 'general_administrator', '普通管理员，可以进行会员管理、查看信息统计、系统的基本设置等，同时拥有编辑者所有权限。');
INSERT INTO `ph_system_roles` VALUES ('11', '2', '编辑', 'editor', 'editor');
INSERT INTO `ph_system_roles` VALUES ('4', '3', '财务', 'financial_staff', '财务，进行财务管理，等级与管理员、编辑等一样。');

-- ----------------------------
-- Table structure for ph_system_role_permission
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_role_permission`;
CREATE TABLE `ph_system_role_permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL COMMENT '角色ID',
  `privilege_code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '权限ID',
  `access_privilege_code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '访问权限编码',
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_role_permission
-- ----------------------------

-- ----------------------------
-- Table structure for ph_system_setting
-- ----------------------------
DROP TABLE IF EXISTS `ph_system_setting`;
CREATE TABLE `ph_system_setting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `config_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '配置名称',
  `config_value` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '配置值',
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_system_setting
-- ----------------------------

-- ----------------------------
-- Table structure for ph_transaction_info
-- ----------------------------
DROP TABLE IF EXISTS `ph_transaction_info`;
CREATE TABLE `ph_transaction_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '游客邮件地址',
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '游客发送内容',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ph_transaction_info
-- ----------------------------

-- ----------------------------
-- View structure for view_admin_list
-- ----------------------------
DROP VIEW IF EXISTS `view_admin_list`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `view_admin_list` AS SELECT
	admin.*, roles.role_name,
	roles.role_alias
FROM
	ph_system_admin AS admin
LEFT JOIN ph_system_roles AS roles ON admin.role_id = roles.role_id
WHERE
	1
GROUP BY
 	admin_name,
	role_alias
ORDER BY
	admin.add_time DESC ;
