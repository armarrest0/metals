<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_kuaidi_order`;");
E_C("CREATE TABLE `ecs_kuaidi_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(250) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `send_name` varchar(100) NOT NULL,
  `send_tel` varchar(50) NOT NULL,
  `send_region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `send_address` varchar(150) NOT NULL,
  `to_name` varchar(100) NOT NULL,
  `to_tel` varchar(50) NOT NULL,
  `to_region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `to_address` varchar(150) NOT NULL,
  `goods_weight` decimal(5,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `goods_name` varchar(200) NOT NULL,
  `package_num` int(5) unsigned NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `money` decimal(5,2) unsigned NOT NULL DEFAULT '0.00',
  `remark` varchar(255) NOT NULL,
  `postman_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL,
  `finish_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_kuaidi_order` values('1','1201240848424','27','','','0','','dfdsaf','13351233333','1483','adsfdsaf','0.00','1','4','1','0','0','0.00','','0','1','1443861550','0');");
E_D("replace into `ecs_kuaidi_order` values('2','请输入快递单号','35','','','0','','lxg','15125252525','692','嵩山大道','0.00','1','5','1','0','0','0.00','','0','1','1444006593','0');");
E_D("replace into `ecs_kuaidi_order` values('3','','35','','','0','','lxg','15125252525','692','嵩山大道','0.00','1','6','1','0','0','0.00','','0','1','1444440281','0');");
E_D("replace into `ecs_kuaidi_order` values('4','请输入快递单号','60','','','0','','test','13800138000','2723','四川省成都市锦江区五世同堂街','0.00','1','9','1','0','0','0.00','','0','1','1446340680','0');");

require("../../inc/footer.php");
?>