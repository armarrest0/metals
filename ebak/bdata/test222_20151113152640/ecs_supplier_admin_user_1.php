<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_admin_user`;");
E_C("CREATE TABLE `ecs_supplier_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '存放users表中的user_id',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `supplier_id` int(10) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  `checked` tinyint(2) NOT NULL DEFAULT '0' COMMENT '-1:审核未通过,0:未审核,1审核通过',
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_admin_user` values('1','1','anan','anan@68ecshop.com','34fb5e0024f56d3ee126ab93a49971f3','6985','1437497970','1443601087','110.211.206.143','all','','','0','1','','0','1');");
E_D("replace into `ecs_supplier_admin_user` values('2','2','68ecshopyy','285188787@qq.com','a8f7dfa3deb1c6e36b21c4fd5194db7c','4460','1437500040','1443601128','110.211.206.143','all','','','0','2','','0','1');");
E_D("replace into `ecs_supplier_admin_user` values('4','5','leilei','2691111111@qq.com','2d14f0a7ff531d44baa35a0f98ea9f39','','1437502269','1437697808','192.168.1.162','all','','','0','5','','0','1');");
E_D("replace into `ecs_supplier_admin_user` values('6','6','yiren','3490134@qq.com','2d14f0a7ff531d44baa35a0f98ea9f39','','1437503705','1443383704','124.237.90.162','all','','','0','6','','0','1');");
E_D("replace into `ecs_supplier_admin_user` values('7','7','liuyu','33342@qq.com','9925a305924fddf8a7fea60b838d844b','6109','1437520761','1437699597','192.168.1.162','all','','','0','7','','0','1');");
E_D("replace into `ecs_supplier_admin_user` values('8','8','liza','222222@qq.com','2d14f0a7ff531d44baa35a0f98ea9f39','','1437525999','1437702335','192.168.1.162','all','','','0','8','','0','1');");
E_D("replace into `ecs_supplier_admin_user` values('9','22','test','test@163.com','07b5cceb05961a91fc8746a395913ad1','3187','1446335623','1446358147','0.0.0.0','all','','','0','10','','0','1');");
E_D("replace into `ecs_supplier_admin_user` values('10','23','shop','shop@admin.com','223be6aa7362e9a04053ac90f0e4be03','4514','1446348688','1446358163','0.0.0.0','all','','','0','9','','0','1');");

require("../../inc/footer.php");
?>