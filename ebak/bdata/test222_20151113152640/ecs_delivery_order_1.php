<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20150929133296733','2015092891805','5','请输入快递单号','1443390298','7','顺丰速运','12','68ecshopxjd_cus','Lxn','森林逸城','1','10','145','1194','','','','','15133518792','仅工作日送货','','等待所有商品备齐后再发','0.00','15.00','1443475935','0','0','0');");
E_D("replace into `ecs_delivery_order` values('2','20150929151483406','2015092807942','11','85242342334','1443406873','7','顺丰速运','10','admin','Llx','Yyyy','1','10','145','1194','','','','','15906685421','仅工作日送货','','等待所有商品备齐后再发','0.00','15.00','1443482053','0','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20150930112376954','2015093093164','16','234234234','1443553505','7','顺丰速运','10','admin','ECSHOP开发中心','金海湾B座302','1','10','145','1194','','','','','15903373514','仅工作日送货','','等待所有商品备齐后再发','0.00','15.00','1443554604','0','0','0');");
E_D("replace into `ecs_delivery_order` values('4','20151004003901678','2015100147594','22','1201240848424','1443685613','6','同城快递','27','68ecshopxjd_cus','dfdsaf','adsfdsaf','1','12','174','1483','','','','-','13351233333','仅工作日送货','','等待所有商品备齐后再发','0.00','15.00','1443861550','0','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20151005165660247','2015100545734','25','请输入快递单号','1444006366','6','同城快递','35','68ecshopxjd_cus','lxg','嵩山大道','1','6','76','692','','lxg@126.com','','','15125252525','送货时间不限','','等待所有商品备齐后再发','0.00','15.00','1444006593','0','0','0');");
E_D("replace into `ecs_delivery_order` values('6','20151010172486065','2015100623666','26','','1444083105','6','同城快递','35','68ecshopxjd_cus','lxg','嵩山大道','1','6','76','692','','lxg@126.com','','','15125252525','','','等待所有商品备齐后再发','0.00','15.00','1444440281','0','0','0');");
E_D("replace into `ecs_delivery_order` values('7','20151013151083653','2015101345249','66','请输入快递单号','1444688188','7','顺丰速运','10','68ecshopxjd_cus','ECSHOP开发中心','金海湾B座302','1','10','145','1194','','','','','15903373514','仅工作日送货','','等待所有商品备齐后再发','0.00','15.00','1444691457','0','0','0');");
E_D("replace into `ecs_delivery_order` values('8','20151101145825201','2015110159993','73','请输入快递单号','1446332252','15','全峰快递','60','admin','test','四川省成都市锦江区五世同堂街','1','26','322','2723','','test@163.com','610000','-','13800138000','仅工作日送货','','等待所有商品备齐后再发','0.00','15.00','1446332312','0','0','0');");
E_D("replace into `ecs_delivery_order` values('9','20151101171802646','2015110150335','81','请输入快递单号','1446339204','6','同城快递','60','admin','test','四川省成都市锦江区五世同堂街','1','26','322','2723','','test@163.com','610000','-','13800138000','送货时间不限','','等待所有商品备齐后再发','0.00','15.00','1446340680','0','0','0');");

require("../../inc/footer.php");
?>