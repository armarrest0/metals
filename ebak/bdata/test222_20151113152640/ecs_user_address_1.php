<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('1','','5','111','111@qq.com','1','2','52','500','111','11111','--','15032361111','','');");
E_D("replace into `ecs_user_address` values('2','','2','羊羊羊','22@qq.com','1','10','145','1194','河北大街西段666号','066000','--','13933528316','','');");
E_D("replace into `ecs_user_address` values('16','','1','anan','23456@qq.ukj','1','10','145','1194','森林逸城B区','','--','18712345678','','');");
E_D("replace into `ecs_user_address` values('15','','2','喵喵','33@qq.com','1','2','52','500','河北大街','','--','13912345678','','');");
E_D("replace into `ecs_user_address` values('17','','12','Lxn','','1','10','145','1194','森林逸城','','','15133518792','','');");
E_D("replace into `ecs_user_address` values('18','','11','赵云龙','','1','10','145','1194','。。。。。。','','','13333344125','','');");
E_D("replace into `ecs_user_address` values('19','','10','ECSHOP开发中心','','1','10','145','1194','金海湾B座302','','','15903373514','','');");
E_D("replace into `ecs_user_address` values('20','','10','商之翼','','1','10','145','1194','秦皇岛商之翼网络科技有限公司','','','13755226428','','');");
E_D("replace into `ecs_user_address` values('21','','10','68ECSHOP','','1','10','145','1194','金海湾B座302','','','18855220000','','');");
E_D("replace into `ecs_user_address` values('22','','14','测试一下','','1','6','77','705','hhhhhhh','','-','13322222222','','');");
E_D("replace into `ecs_user_address` values('23','','10','Yyy','','1','4','56','551','Yyyyyy','','','15674553248','','');");
E_D("replace into `ecs_user_address` values('24','','21','High','xtony@126.com','1','6','77','705','金地工业区114幢501','','','18688955663','','');");
E_D("replace into `ecs_user_address` values('25','','22','博纳噢','fzpi123@26.com','1','6','76','696','吃啥','','','18922700300','','');");

require("../../inc/footer.php");
?>