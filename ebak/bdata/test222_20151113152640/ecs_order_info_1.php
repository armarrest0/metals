<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_info`;");
E_C("CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `defaultbank` varchar(20) NOT NULL COMMENT '银行',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rebate_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rebate_ispay` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '是否订单已经返佣(2:已返,1:未返)',
  `tb_nick` varchar(50) NOT NULL COMMENT '淘宝昵称',
  `froms` char(10) NOT NULL DEFAULT 'pc' COMMENT 'pc:电脑,mobile:手机,app:应用',
  `is_pickup` tinyint(1) NOT NULL,
  `pickup_point` int(11) NOT NULL,
  `vat_inv_company_name` varchar(60) DEFAULT NULL COMMENT '增值税发票单位名称',
  `vat_inv_taxpayer_id` varchar(20) DEFAULT NULL COMMENT '增值税发票纳税人识别号',
  `vat_inv_registration_address` varchar(120) DEFAULT NULL COMMENT '增值税发票注册地址',
  `vat_inv_registration_phone` varchar(60) DEFAULT NULL COMMENT '增值税发票注册电话',
  `vat_inv_deposit_bank` varchar(120) DEFAULT NULL COMMENT '增值税发票开户银行',
  `vat_inv_bank_account` varchar(30) DEFAULT NULL COMMENT '增值税发票银行账户',
  `inv_consignee_name` varchar(60) DEFAULT NULL COMMENT '收票人姓名',
  `inv_consignee_phone` varchar(60) DEFAULT NULL COMMENT '收票人手机',
  `inv_consignee_country` smallint(5) DEFAULT '1' COMMENT '收票人国家',
  `inv_consignee_province` smallint(5) DEFAULT NULL COMMENT '收票人省',
  `inv_consignee_city` smallint(5) DEFAULT NULL COMMENT '收票人市',
  `inv_consignee_district` smallint(5) DEFAULT NULL COMMENT '收票人县/区',
  `inv_consignee_address` varchar(120) DEFAULT NULL COMMENT '收票人详细地址',
  `inv_status` varchar(20) NOT NULL DEFAULT 'unprovided ' COMMENT '发票出票状态',
  `inv_remark` text COMMENT '发票备注',
  `inv_money` decimal(10,2) DEFAULT '0.00' COMMENT '发票金额',
  `inv_payee_type` varchar(20) DEFAULT NULL COMMENT '发票抬头类型',
  `shipping_time_end` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`),
  KEY `supplier_id` (`supplier_id`),
  KEY `rebate` (`rebate_id`,`rebate_ispay`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_info` values('73','2015110159993','60','5','2','2','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','仅工作日送货','','','15','全峰快递','3','支付宝-网银直连','CMB','等待所有商品备齐后再发','','','','','','','2098.00','15.00','0.00','0.00','0.00','0.00','2113.00','0.00','0','0.00','0.00','0.00','0','网站自营','1446332252','1446332301','1446332308','1446332312','0','0','0','请输入快递单号','','0','','','0','','0.00','0','0','0.00','0','0','0','1','','pc','0','0','','','','','','','','','1','0','0','0','','unprovided ','','2113.00','','1446338485');");
E_D("replace into `ecs_order_info` values('74','2015110179842','60','1','0','2','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','仅工作日送货','','','6','同城快递','1','支付宝','CCB','等待所有商品备齐后再发','','','','','','','10427.20','15.00','0.00','0.00','0.00','0.00','8442.20','0.00','0','0.00','0.00','0.00','0','网站自营','1446338226','1446338308','1446338312','0','0','0','0','','','0','','','0','','0.00','0','0','2000.00','0','0','0','1','','pc','0','0','','','','','','','','','1','0','0','0','','unprovided ','','8442.20','','0');");
E_D("replace into `ecs_order_info` values('75','2015110194872','60','1','0','0','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','仅工作日送货','','','6','同城快递','1','支付宝','','等待所有商品备齐后再发','','','','','','','27.55','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','42.55','0','网站自营','1446338286','1446338338','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0','1','','pc','0','0','','','','','','','','','1','0','0','0','','unprovided ','','42.55','','0');");
E_D("replace into `ecs_order_info` values('76','2015110164087','60','0','0','0','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','仅工作日送货','','','6','同城快递','3','支付宝-网银直连','CMB','等待所有商品备齐后再发','','','','','','','22.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','37.00','0','网站自营','1446338376','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0','1','','pc','0','0','','','','','','','','','1','0','0','0','','unprovided ','','37.00','','0');");
E_D("replace into `ecs_order_info` values('77','2015110128839','60','0','0','0','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','工作日/周末/假日均可','','','15','全峰快递','6','货到付款','','等待所有商品备齐后再发','','','','','','','9.90','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','24.90','0','网站自营','1446338460','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0','1','','pc','0','0','','','','','','','','','1','0','0','0','','unprovided ','','24.90','','0');");
E_D("replace into `ecs_order_info` values('78','2015110143618','60','1','0','0','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','指定送货时间 11-07 周六 19:00--22:00','','','6','同城快递','2','<font color=\"#FF0000\">财付通</font>','','等待所有商品备齐后再发','','','','','','','199.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','214.00','0','网站自营','1446338880','1446338896','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0','1','','pc','0','0','','','','','','','','','1','0','0','0','','unprovided ','','214.00','','0');");
E_D("replace into `ecs_order_info` values('79','2015110182371','60','0','0','0','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','','','','6','同城快递','3','支付宝-网银直连','CMBC','等待所有商品备齐后再发','','','','','','','140.60','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','155.60','0','网站自营','1446338945','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0','1','','pc','0','0','','','','','','','','','1','0','0','0','','unprovided ','','155.60','','0');");
E_D("replace into `ecs_order_info` values('80','2015110188123','60','0','0','0','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','仅工作日送货','','','6','同城快递','7','微信支付','','等待所有商品备齐后再发','','','','','','','93.10','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','108.10','0','网站自营','1446338970','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0','1','','pc','0','0','','','','','','','','','1','0','0','0','','unprovided ','','108.10','','0');");
E_D("replace into `ecs_order_info` values('81','2015110150335','60','5','2','2','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','送货时间不限','','','6','同城快递','8','微信支付','','等待所有商品备齐后再发','','','','','','','2089.05','15.00','0.00','0.00','0.00','0.00','2104.05','0.00','0','0.00','0.00','0.00','0','网站自营','1446339204','1446340671','1446340677','1446340680','0','0','0','请输入快递单号','','0','','','0','','0.00','0','0','0.00','0','0','0','1','','mobile','0','0','','','','','','','','','1','0','0','0','','unprovided ','','2104.05','','1446340777');");
E_D("replace into `ecs_order_info` values('82','2015110105588','60','1','0','0','test','1','26','322','2723','四川省成都市锦江区五世同堂街','610000','-','13800138000','test@163.com','送货时间不限','','','6','同城快递','7','银行汇款/转帐','','等待所有商品备齐后再发','','','','','','','10247.65','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','8262.65','0','网站自营','1446340659','1446340688','0','0','0','0','0','','','0','','','0','','0.00','0','0','2000.00','0','0','0','1','','mobile','0','0','','','','','','','','','1','0','0','0','','unprovided ','','8262.65','','0');");
E_D("replace into `ecs_order_info` values('83','2015110140578','22','0','0','0','博纳噢','1','6','76','696','吃啥','','','18922700300','fzpi123@26.com','仅工作日送货','','','6','同城快递','3','支付宝-网银直连','CCB','等待所有商品备齐后再发','','','','','','','148.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','163.00','0','网站自营','1446351891','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0','1','','pc','0','0','','','','','','','','','1','0','0','0','','unprovided ','','163.00','','0');");

require("../../inc/footer.php");
?>