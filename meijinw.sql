-- phpMyAdmin SQL Dump
-- version 4.7.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-03-22 18:30:11
-- 服务器版本： 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meijinw`
--

-- --------------------------------------------------------

--
-- 表的结构 `backgroud`
--

CREATE TABLE IF NOT EXISTS `backgroud` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `background_account` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '后台账号',
  `coal_products` varchar(20) DEFAULT NULL COMMENT '煤炭产品',
  `storage` varchar(20) DEFAULT NULL COMMENT '仓位产品',
  `trader` tinyint(4) DEFAULT NULL COMMENT '交易员',
  `trader_account` tinyint(4) DEFAULT NULL COMMENT '交易员账号',
  `state` tinyint(4) DEFAULT NULL COMMENT '交易员状态',
  `gmt_create` int(11) DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `backgroud`
--

INSERT INTO `backgroud` (`id`, `background_account`, `coal_products`, `storage`, `trader`, `trader_account`, `state`, `gmt_create`, `gmt_modified`) VALUES
(1, 1, '11', '0', 2, 3, 1, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `buyer_certificatetbl`
--

CREATE TABLE IF NOT EXISTS `buyer_certificatetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_path` varchar(32) NOT NULL COMMENT '凭证路径',
  `certificate_name` varchar(32) NOT NULL COMMENT '凭证名称',
  `certificate_type_id` int(11) NOT NULL COMMENT '凭证类型id',
  `gmt_create` int(11) NOT NULL COMMENT '上传时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='凭证表（买家）';

-- --------------------------------------------------------

--
-- 表的结构 `certificate_typetbl`
--

CREATE TABLE IF NOT EXISTS `certificate_typetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_type` varchar(32) NOT NULL COMMENT '凭证类型',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='凭证类型表';

-- --------------------------------------------------------

--
-- 表的结构 `coal_demandtbl`
--

CREATE TABLE IF NOT EXISTS `coal_demandtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coal_type` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '煤种',
  `coal_name` varchar(30) DEFAULT NULL COMMENT '品名',
  `origin` varchar(255) DEFAULT NULL COMMENT '产地',
  `delivery_method` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '提货方式',
  `demand_quantity` int(8) UNSIGNED DEFAULT NULL COMMENT '需求数量',
  `payment` tinyint(4) DEFAULT NULL COMMENT '付款方式',
  `deadline` int(11) UNSIGNED DEFAULT NULL COMMENT '报名截止日',
  `transportation` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '运输方式',
  `delivery_place` varchar(255) NOT NULL COMMENT '提货地点',
  `delivery_time` int(11) DEFAULT NULL COMMENT '提货时间',
  `low_calValue` int(6) UNSIGNED DEFAULT NULL COMMENT '低拉热值',
  `air_sulfur` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '收到基硫分',
  `air_drySulfur` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '空干基硫分',
  `granularity` varchar(24) DEFAULT NULL COMMENT '颗粒度',
  `airdry_volatile` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '空干基挥发分',
  `arb_sulfur` varchar(24) NOT NULL COMMENT '收到基挥发分',
  `fixed_carbon` varchar(24) DEFAULT NULL,
  `total_moisture` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '全水分',
  `inner_moisture` varchar(24) DEFAULT NULL COMMENT '内水分',
  `G_value` varchar(24) DEFAULT NULL COMMENT 'G值',
  `Y_value` varchar(24) DEFAULT NULL COMMENT 'Y值',
  `fusibility` varchar(24) DEFAULT NULL COMMENT '灰熔点',
  `ash_content` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '灰分',
  `hardgrove` varchar(24) DEFAULT NULL COMMENT '哈氏可磨',
  `char_characteristic` varchar(24) DEFAULT NULL COMMENT '焦渣特征',
  `remark` text COMMENT '备注',
  `gmt_create` int(11) UNSIGNED DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `coal_ordertbl`
--

CREATE TABLE IF NOT EXISTS `coal_ordertbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `penalty` decimal(10,0) NOT NULL COMMENT '违约金',
  `coal_charge` decimal(10,0) NOT NULL COMMENT '买煤费用',
  `truck_charge` decimal(10,0) NOT NULL COMMENT '汽运费用',
  `train_charge` decimal(10,0) NOT NULL COMMENT '铁路费用',
  `deposit` decimal(10,0) NOT NULL COMMENT '担保费用',
  `gmt_create` int(11) NOT NULL COMMENT '创建时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL COMMENT '伪删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='煤炭交易订单表';

-- --------------------------------------------------------

--
-- 表的结构 `coal_products`
--

CREATE TABLE IF NOT EXISTS `coal_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coal_type` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '煤种',
  `coal_name` varchar(30) DEFAULT NULL COMMENT '品名',
  `origin` varchar(255) DEFAULT NULL COMMENT '产地',
  `low_calValue` int(6) UNSIGNED DEFAULT NULL COMMENT '低拉热值',
  `ar_sulfur` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '收到基硫分',
  `air_dry_sulfur` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '空干基硫分',
  `granularity` varchar(24) DEFAULT NULL COMMENT '颗粒度',
  `air_dry_volatile` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '空干基挥发分',
  `arb_sulfur` varchar(24) DEFAULT NULL COMMENT '收到基挥发分',
  `fixed_carbon` varchar(24) DEFAULT NULL COMMENT '固定碳',
  `total_moisture` tinyint(4) DEFAULT NULL COMMENT '全水分',
  `inner_moisture` varchar(24) DEFAULT NULL COMMENT '内水分',
  `G_value` varchar(24) DEFAULT NULL COMMENT 'G值',
  `Y_value` varchar(24) DEFAULT NULL COMMENT 'Y值',
  `fusibility` varchar(24) DEFAULT NULL COMMENT '灰熔点',
  `ash_content` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '灰分',
  `hardgrove` varchar(24) DEFAULT NULL COMMENT '哈氏可磨',
  `char_characteristic` varchar(24) DEFAULT NULL COMMENT '焦渣特征',
  `remark` text COMMENT '备注',
  `gmt_create` int(11) UNSIGNED DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  `name` varchar(30) DEFAULT NULL COMMENT '名称',
  `release_time` int(11) UNSIGNED DEFAULT NULL COMMENT '发布时间',
  `views` int(11) UNSIGNED DEFAULT '0' COMMENT '预览人气',
  `product_number` varchar(30) DEFAULT NULL COMMENT '产品编号',
  `supply` int(8) UNSIGNED DEFAULT NULL COMMENT '供应量',
  `delivery_time` int(11) UNSIGNED DEFAULT NULL COMMENT '交货时间',
  `taxlnclusive_price` decimal(10,2) UNSIGNED DEFAULT NULL COMMENT '含税价格',
  `paymenr` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '付款方式',
  `inspection_organization` varchar(255) DEFAULT NULL COMMENT '检测机构',
  `delivery_way` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '交货方式',
  `dealer_name` varchar(30) DEFAULT NULL COMMENT '交易员',
  `dealer_phone` char(11) DEFAULT NULL COMMENT '交易员电话',
  `settlement_method` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '结算方式',
  `delivery_place` varchar(255) DEFAULT NULL COMMENT '交货地点',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `complainttbl`
--

CREATE TABLE IF NOT EXISTS `complainttbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaint_type_id` int(11) NOT NULL COMMENT '投诉项目id',
  `complaint_title` varchar(64) NOT NULL COMMENT '投诉标题',
  `complaint_content` text NOT NULL COMMENT '投诉内容',
  `gmt_create` int(11) NOT NULL COMMENT '创建时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='投诉表';

-- --------------------------------------------------------

--
-- 表的结构 `complaint_typetbl`
--

CREATE TABLE IF NOT EXISTS `complaint_typetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_complaints` varchar(32) NOT NULL COMMENT '人员投诉',
  `quality_complaint` text NOT NULL COMMENT '煤炭质量投诉',
  `gmt_create` int(11) NOT NULL COMMENT '创建时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='投诉类型表';

-- --------------------------------------------------------

--
-- 表的结构 `co_emptbl`
--

CREATE TABLE IF NOT EXISTS `co_emptbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `co_name` varchar(128) DEFAULT NULL COMMENT '公司姓名',
  `staff_name` varchar(30) DEFAULT NULL COMMENT '员工姓名',
  `staff_mobile` char(255) DEFAULT NULL COMMENT '手机号',
  `gmt_create` int(11) UNSIGNED DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `co_usertbl`
--

CREATE TABLE IF NOT EXISTS `co_usertbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_name` varchar(128) DEFAULT NULL COMMENT '公司名称',
  `co_type` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '企业类型',
  `co_nature` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '企业性质',
  `co_no` varchar(30) DEFAULT NULL COMMENT '企业号',
  `co_addr` varchar(255) DEFAULT NULL COMMENT '公司地址',
  `business_addr` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '经营地址',
  `business_term` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '营业期限',
  `tel` varchar(12) DEFAULT NULL COMMENT '座机电话',
  `registered_capital` varchar(10) DEFAULT NULL COMMENT '注册资本',
  `fax` varchar(128) DEFAULT NULL COMMENT '传真',
  `lr_hometown` varchar(255) DEFAULT NULL COMMENT '法人归属地',
  `lr_name` varchar(30) DEFAULT NULL COMMENT '法人姓名',
  `lr_certificatetype` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '法人证件类型',
  `lr_certifcatenum` char(18) DEFAULT NULL COMMENT '法人证件类型',
  `lr_phone` char(11) DEFAULT NULL COMMENT '法人手机号码',
  `acct_bank` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '对公开户行',
  `acct_name` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '对公账户开户名',
  `bank_province` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '开户行所在省',
  `bank_city` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '开户行所在市',
  `bank_branch` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '开户银行支行名称',
  `basic_acct` varchar(20) DEFAULT NULL COMMENT '对公基本账户',
  `emp_name` varchar(30) DEFAULT NULL COMMENT '雇员姓名',
  `emp_position` varchar(30) DEFAULT NULL COMMENT '雇员职位',
  `emp_mobile` char(11) DEFAULT NULL COMMENT '雇员手机号',
  `gmt_create` int(11) UNSIGNED DEFAULT NULL COMMENT '上传时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `demandtbl`
--

CREATE TABLE IF NOT EXISTS `demandtbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `devlivery_place` varchar(255) DEFAULT NULL COMMENT '交货地点',
  `requiement` int(11) UNSIGNED DEFAULT NULL COMMENT '需求量',
  `purchase_indicator` text COMMENT '采购指标',
  `people_need` char(11) DEFAULT NULL COMMENT '需求人',
  `gmt_create` int(11) UNSIGNED DEFAULT NULL COMMENT '上传时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `department_typetbl`
--

CREATE TABLE IF NOT EXISTS `department_typetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_type` varchar(32) NOT NULL COMMENT '部门类型',
  `is_del` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='部门类型表';

--
-- 转存表中的数据 `department_typetbl`
--

INSERT INTO `department_typetbl` (`id`, `department_type`, `is_del`) VALUES
(1, '财务部', 0),
(2, '业务部', 0),
(3, '人事部', 0),
(4, '设计部', 0),
(5, '技术部', 0);

-- --------------------------------------------------------

--
-- 表的结构 `deposittbl`
--

CREATE TABLE IF NOT EXISTS `deposittbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `deposit_apptbl`
--

CREATE TABLE IF NOT EXISTS `deposit_apptbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_name` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `co_addr` varchar(255) DEFAULT NULL COMMENT '公司地址',
  `business_area` varchar(128) DEFAULT NULL COMMENT '业务区域',
  `fimamcomh_amt` varchar(10) DEFAULT NULL COMMENT '融资金额',
  `contacts` varchar(30) DEFAULT NULL COMMENT '联系人',
  `contact_no` char(11) DEFAULT NULL COMMENT '联系电话',
  `examination` tinyint(4) UNSIGNED DEFAULT '0' COMMENT '审核',
  `gmt_create` int(11) UNSIGNED DEFAULT NULL COMMENT '上传时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `econtacttbl`
--

CREATE TABLE IF NOT EXISTS `econtacttbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e_contact_charge` decimal(10,0) NOT NULL COMMENT '电子合同签订费用',
  `sign_time` int(11) NOT NULL COMMENT '签约时间',
  `gmt_create` int(11) NOT NULL COMMENT '上传时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='电子合同订单表';

-- --------------------------------------------------------

--
-- 表的结构 `education_typetbl`
--

CREATE TABLE IF NOT EXISTS `education_typetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `education_type` varchar(32) NOT NULL COMMENT '学历类型',
  `is_del` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='学历类型表';

--
-- 转存表中的数据 `education_typetbl`
--

INSERT INTO `education_typetbl` (`id`, `education_type`, `is_del`) VALUES
(1, '一本', 0),
(2, '二本', 0),
(3, '专科', 0),
(4, '硕士', 0),
(5, '博士', 0);

-- --------------------------------------------------------

--
-- 表的结构 `examination_typetbl`
--

CREATE TABLE IF NOT EXISTS `examination_typetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `examination_type` varchar(32) NOT NULL COMMENT '审核状态',
  `is_del` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='审核状态表';

--
-- 转存表中的数据 `examination_typetbl`
--

INSERT INTO `examination_typetbl` (`id`, `examination_type`, `is_del`) VALUES
(1, '未审核', 0),
(2, '已审核', 0),
(3, '审核未通过', 0);

-- --------------------------------------------------------

--
-- 表的结构 `fast_reward_apptbl`
--

CREATE TABLE IF NOT EXISTS `fast_reward_apptbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_name` varchar(128) DEFAULT NULL COMMENT '公司名称',
  `co_addr` varchar(255) DEFAULT NULL COMMENT '公司地址',
  `business_aera` varchar(255) DEFAULT NULL COMMENT '业务区域',
  `financing_amt` varchar(10) DEFAULT NULL COMMENT '融资金额',
  `contacts` varchar(30) DEFAULT NULL COMMENT '联系人',
  `contact_no` char(11) DEFAULT NULL COMMENT '联系电话',
  `examination` tinyint(255) UNSIGNED DEFAULT '0' COMMENT '审核',
  `gmt_greate` int(11) UNSIGNED DEFAULT NULL COMMENT '上传时间',
  `gmf_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `fin_usertbl`
--

CREATE TABLE IF NOT EXISTS `fin_usertbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pay_pwd` char(32) DEFAULT NULL COMMENT '支付密码',
  `login_pwd` char(32) DEFAULT NULL COMMENT '登陆密码',
  `acct_bal` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '账户余额',
  `bind_acct` varchar(30) DEFAULT NULL COMMENT '绑定平台一般为账户',
  `loan_amt` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '货款额度',
  `cargo_loanlnfo` varchar(128) DEFAULT NULL COMMENT '货权贷款资料',
  `margin_loanlnfo` varchar(128) DEFAULT NULL COMMENT '保证金贷款资料',
  `gmt_cerate` int(255) UNSIGNED DEFAULT NULL COMMENT '上传时间',
  `gmt_modified` int(10) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `managertbl`
--

CREATE TABLE IF NOT EXISTS `managertbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `department` tinyint(4) NOT NULL COMMENT '部门',
  `position` varchar(32) NOT NULL COMMENT '职位',
  `mobile` char(11) NOT NULL COMMENT '手机号',
  `QQ` varchar(32) NOT NULL COMMENT 'QQ',
  `email` varchar(128) NOT NULL COMMENT '邮箱',
  `emergency_contact_no` char(11) NOT NULL COMMENT '紧急联系人电话',
  `emergency_contact` varchar(32) NOT NULL COMMENT '紧急联系人',
  `id_no` char(18) NOT NULL COMMENT '身份证号',
  `native_place` varchar(128) NOT NULL COMMENT '籍贯',
  `education` tinyint(4) NOT NULL COMMENT '学历',
  `addr` varchar(128) NOT NULL COMMENT '住址',
  `Ukey_info` varchar(32) NOT NULL COMMENT 'U盾',
  `login_pwd` char(32) NOT NULL COMMENT '员工密码',
  `gmt_create` int(11) DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` int(11) DEFAULT NULL COMMENT '修改时间',
  `bank` varchar(128) NOT NULL COMMENT '开户行',
  `acct_id` char(18) NOT NULL COMMENT '员工银行卡',
  `hiredate` datetime NOT NULL COMMENT '入职时间',
  `expiration` datetime NOT NULL COMMENT '合约到期',
  `medical_examination` varchar(128) DEFAULT NULL COMMENT '体检报告',
  `other` varchar(128) DEFAULT NULL COMMENT '其他信息',
  `photo` varchar(128) DEFAULT NULL COMMENT '照片',
  `pic_path` varchar(128) DEFAULT NULL COMMENT '图片存放路径',
  `state` tinyint(4) NOT NULL COMMENT '在职状态',
  `examination` tinyint(4) NOT NULL DEFAULT '1' COMMENT '审核',
  `is_del` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='主管账户表';

--
-- 转存表中的数据 `managertbl`
--

INSERT INTO `managertbl` (`id`, `name`, `department`, `position`, `mobile`, `QQ`, `email`, `emergency_contact_no`, `emergency_contact`, `id_no`, `native_place`, `education`, `addr`, `Ukey_info`, `login_pwd`, `gmt_create`, `gmt_modified`, `bank`, `acct_id`, `hiredate`, `expiration`, `medical_examination`, `other`, `photo`, `pic_path`, `state`, `examination`, `is_del`) VALUES
(1, '张三11', 1, '2', '15845678901', '7894561', '7894567@qq.com', '13823456789', '王五', '123456789012345678', '广东深圳', 0, '珠海', '123', '12345678978945612312345678998745', 1490075150, 1490163295, '中国建设银行', '123456789123456789', '2017-03-23 15:35:29', '2017-03-31 03:29:44', NULL, '', '', '', 1, 1, 0),
(2, '李四1', 2, '1', '12345678900', '456789123', '456789123@qq.com', '12345678911', '赵六', '123456789123456789', '上海珠江口', 3, '北京海淀区', '213165465', '12345678978945612369854747478545', NULL, 1490174538, '中国银行', '987654321987654321', '2017-02-23 16:13:07', '2018-04-19 06:20:22', '', '', '', '', 1, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `newstbl`
--

CREATE TABLE IF NOT EXISTS `newstbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL COMMENT '表的标题',
  `content` text NOT NULL COMMENT '内容',
  `examination` tinyint(4) NOT NULL COMMENT '审查',
  `sort` int(11) NOT NULL COMMENT '排序',
  `gmt_create` int(11) NOT NULL COMMENT '上传时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻表';

-- --------------------------------------------------------

--
-- 表的结构 `pictbl`
--

CREATE TABLE IF NOT EXISTS `pictbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_path` varchar(32) NOT NULL COMMENT '图片存放位置',
  `pic_name` varchar(32) NOT NULL COMMENT '图片名',
  `gmt_create` int(11) NOT NULL COMMENT '上传时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图片表';

-- --------------------------------------------------------

--
-- 表的结构 `platform_stafftbl`
--

CREATE TABLE IF NOT EXISTS `platform_stafftbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(32) NOT NULL COMMENT '职位',
  `name` varchar(32) NOT NULL COMMENT '姓名',
  `gentle` tinyint(2) NOT NULL COMMENT '性别',
  `mobile` char(11) NOT NULL COMMENT '手机号',
  `QQ` varchar(32) NOT NULL COMMENT 'QQ',
  `we_chat` varchar(32) NOT NULL COMMENT '微信号',
  `email` varchar(128) NOT NULL COMMENT '邮箱',
  `emergency_contact_no` char(11) NOT NULL COMMENT '紧急联系人电话',
  `emergency_contact` varchar(32) NOT NULL COMMENT '紧急联系人',
  `id_no` char(18) NOT NULL COMMENT '身份证号',
  `addr` varchar(128) NOT NULL COMMENT '住址',
  `login_pwd` char(32) NOT NULL COMMENT '员工密码',
  `Ukey_info` varchar(32) NOT NULL COMMENT '主管U盾信息',
  `backstage_id` char(11) NOT NULL COMMENT '后台账号',
  `staff_id` char(11) NOT NULL COMMENT '员工账号',
  `gmt_create` int(11) NOT NULL COMMENT '创建时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='平台员工账户表';

-- --------------------------------------------------------

--
-- 表的结构 `position_typetbl`
--

CREATE TABLE IF NOT EXISTS `position_typetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_type` varchar(32) NOT NULL COMMENT '职位类型',
  `is_del` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='职位类型表';

--
-- 转存表中的数据 `position_typetbl`
--

INSERT INTO `position_typetbl` (`id`, `position_type`, `is_del`) VALUES
(1, '交易员', 0),
(2, '信息录入员', 0),
(3, '人事主管', 0),
(4, '信息审核员', 0),
(5, '金融审核员', 0);

-- --------------------------------------------------------

--
-- 表的结构 `possesiontbl`
--

CREATE TABLE IF NOT EXISTS `possesiontbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `acct_bal` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '可用金额',
  `acct_amt` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '总金额',
  `freeze_amt` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '冻结金额',
  `deposit` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '违约保证金',
  `transfer_amt` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '转出金额',
  `recieve_amt` decimal(10,0) UNSIGNED DEFAULT NULL COMMENT '转入金额',
  `transfer_time` int(11) UNSIGNED DEFAULT NULL COMMENT '转出时间',
  `recieve_time` int(11) UNSIGNED DEFAULT NULL COMMENT '转入时间',
  `gmt_create` int(255) UNSIGNED DEFAULT NULL COMMENT '上传时间',
  `gmt_modified` int(255) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ppt_imgtbl`
--

CREATE TABLE IF NOT EXISTS `ppt_imgtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ppt_path` varchar(32) NOT NULL COMMENT '图片存放位置',
  `ppt_name` varchar(32) NOT NULL COMMENT '图片名',
  `sort` tinyint(4) NOT NULL COMMENT '排序',
  `gmt_create` int(11) NOT NULL COMMENT '上传时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='首页PPT轮播图';

-- --------------------------------------------------------

--
-- 表的结构 `product_typetbl`
--

CREATE TABLE IF NOT EXISTS `product_typetbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_type` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '商品种类',
  `gmt_create` int(11) UNSIGNED DEFAULT NULL COMMENT '上传时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `seller_certificatetbl`
--

CREATE TABLE IF NOT EXISTS `seller_certificatetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_path` varchar(32) NOT NULL COMMENT '凭证路径',
  `certificate_name` varchar(32) NOT NULL COMMENT '凭证名称',
  `certificate_type_id` int(11) NOT NULL COMMENT '凭证类型id',
  `gmt_create` int(11) NOT NULL COMMENT '上传时间',
  `gmt_modified` int(11) NOT NULL COMMENT '修改时间',
  `is_del` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='凭证表(卖家)';

-- --------------------------------------------------------

--
-- 表的结构 `stafftbl`
--

CREATE TABLE IF NOT EXISTS `stafftbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` tinyint(4) NOT NULL COMMENT '职位',
  `mobile` char(11) NOT NULL COMMENT '手机号',
  `QQ` varchar(32) NOT NULL COMMENT 'QQ',
  `email` varchar(128) NOT NULL COMMENT '邮箱',
  `emergency_contact_no` char(11) NOT NULL COMMENT '紧急联系人电话',
  `emergency_contact` varchar(32) NOT NULL COMMENT '紧急联系人',
  `id_no` char(18) NOT NULL COMMENT '身份证号',
  `addr` varchar(128) NOT NULL COMMENT '住址',
  `login_pwd` char(32) NOT NULL COMMENT '员工密码',
  `gmt_create` int(11) DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `bank` tinyint(4) NOT NULL COMMENT '开户行',
  `acct_id` char(18) NOT NULL COMMENT '员工银行卡',
  `hiredate` datetime NOT NULL COMMENT '入职时间',
  `expiration` datetime NOT NULL COMMENT '合约到期',
  `medical-examination` varchar(128) DEFAULT NULL COMMENT '体检报告',
  `other` varchar(128) DEFAULT NULL COMMENT '其他信息',
  `photo` varchar(128) DEFAULT NULL COMMENT '照片',
  `pic_path` varchar(128) DEFAULT NULL COMMENT '图片存放路径',
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `department` tinyint(4) DEFAULT NULL COMMENT '部门',
  `eduction` varchar(30) NOT NULL COMMENT '学历',
  `native_place` varchar(128) NOT NULL COMMENT '籍贯',
  `state` tinyint(4) NOT NULL COMMENT '状态',
  `examination` tinyint(4) NOT NULL DEFAULT '0' COMMENT '审核',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='平台员工账户表';

--
-- 转存表中的数据 `stafftbl`
--

INSERT INTO `stafftbl` (`id`, `position`, `mobile`, `QQ`, `email`, `emergency_contact_no`, `emergency_contact`, `id_no`, `addr`, `login_pwd`, `gmt_create`, `gmt_modified`, `is_del`, `bank`, `acct_id`, `hiredate`, `expiration`, `medical-examination`, `other`, `photo`, `pic_path`, `name`, `department`, `eduction`, `native_place`, `state`, `examination`) VALUES
(1, 2, '11111111111', '496955775', '123456@qq.com', '11111111111', 'laidasdlka', '111111111111111111', 'asdasdasdasdasd', 'aasasdas', 1124124124, 1490091978, 0, 1, '123123213123123123', '2017-03-22 12:25:54', '2017-03-29 12:25:58', 'asdsad', 'sadsad', 'asdasdas', 'dasdasd', 'sadasd2', 2, '本科', 'hjhhh', 1, 1),
(2, 3, '11111111111', '121212121212', '465498465498', '65432103216', '阿斯达所多', '123123213213123321', '搭设', 'sasdas', NULL, NULL, 0, 0, 'asdsa', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'aaaaa', 'asdsa', 'asdas', 'sadsadas', 'adsa', 2, '大学', '阿萨德', 3, 1),
(5, 2, '11231232131', '11111', '11111111111111111', '11111111132', '11212', '324123123213213111', '1111', '111111', 1490080641, 1490080641, 0, 2, '111111111', '1213-12-31 00:00:00', '0000-00-00 00:00:00', NULL, '123123', '12312', '3213', 'aaaa', 2, 'benle', 'asa', 2, 1),
(6, 4, '11231232132', '123123123123213', '12312321', '31232131231', '312321', '213123213123123123', '123213', '213213', 1490086464, 1490086464, 0, 1, '12321312312312', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, '123123', '12312', '321312312', '啊啊', 1, '爱上', '啊', 2, 2);

-- --------------------------------------------------------

--
-- 表的结构 `state_typetbl`
--

CREATE TABLE IF NOT EXISTS `state_typetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_type` varchar(32) NOT NULL COMMENT '状态',
  `is_del` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='状态类型表';

--
-- 转存表中的数据 `state_typetbl`
--

INSERT INTO `state_typetbl` (`id`, `state_type`, `is_del`) VALUES
(1, '实习期', 0),
(2, '试用期', 0),
(3, '正式在职', 0);

-- --------------------------------------------------------

--
-- 表的结构 `storagetbl`
--

CREATE TABLE IF NOT EXISTS `storagetbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `storage_addr` varchar(255) DEFAULT NULL COMMENT '仓位地址',
  `loading_way` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '仓位装车方式',
  `loading_capacity` int(8) UNSIGNED DEFAULT NULL COMMENT '仓库装车能力',
  `storage_rent` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '仓库租赁方式',
  `gmt_create` int(11) UNSIGNED DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  `publisher` char(11) DEFAULT NULL COMMENT '发布人',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `storage_demandtbl`
--

CREATE TABLE IF NOT EXISTS `storage_demandtbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `people_need` char(11) DEFAULT NULL COMMENT '仓位需求人',
  `storage_addr` varchar(255) DEFAULT NULL COMMENT '仓位地址',
  `loading_way` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '仓位装车方式',
  `loading_capacity` int(8) UNSIGNED DEFAULT NULL COMMENT '仓位装车能力',
  `storage_rent` tinyint(4) UNSIGNED DEFAULT NULL COMMENT '仓位租赁方式',
  `gmt_create` int(11) UNSIGNED DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `usertbl`
--

CREATE TABLE IF NOT EXISTS `usertbl` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_type` tinyint(3) UNSIGNED DEFAULT '1' COMMENT '用户类型',
  `phone_no` varchar(11) NOT NULL COMMENT '手机号码',
  `login_pwd` char(32) NOT NULL COMMENT '登陆密码',
  `last_loginip` varchar(30) DEFAULT NULL COMMENT '上次登陆IP',
  `last_logintime` int(11) UNSIGNED DEFAULT NULL COMMENT '上次登陆时间',
  `gmt_cerate` int(11) UNSIGNED DEFAULT NULL COMMENT '上传时间',
  `gmt_modified` int(11) UNSIGNED DEFAULT NULL COMMENT '修改时间',
  `del` tinyint(3) UNSIGNED DEFAULT '0' COMMENT '伪删除',
  `email` varchar(128) NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `usertbl`
--

INSERT INTO `usertbl` (`id`, `user_type`, `phone_no`, `login_pwd`, `last_loginip`, `last_logintime`, `gmt_cerate`, `gmt_modified`, `del`, `email`) VALUES
(1, 3, '12345678912', 'bvvv111', NULL, 0, 2017, 0, NULL, '123211234@qq.com'),
(2, 2, '1234567893', 'aaaa', NULL, 0, 2017, 0, NULL, '3333333333@qq.com'),
(3, 3, '1234567892', 'aaaa', NULL, 0, 2017, 0, NULL, '333344444@qq.com'),
(4, 3, '4294967295', '1111111', '', NULL, NULL, 2017, NULL, '11111111111'),
(5, 1, '11111111111', '33131141', '', NULL, NULL, NULL, NULL, '21321321'),
(6, 4, '121212121', '12121313', NULL, NULL, 0, 0, NULL, '131313'),
(7, 1, '121212', '1213edfdsadas', NULL, NULL, 1489980256, 0, NULL, '123123'),
(8, 4, '1212312', '3213123', NULL, NULL, 1489980737, 0, NULL, '12321321'),
(9, 4, '13421312', '124124', NULL, NULL, 1489980786, 0, NULL, '12412312');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
