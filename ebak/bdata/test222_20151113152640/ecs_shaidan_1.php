<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shaidan`;");
E_C("CREATE TABLE `ecs_shaidan` (
  `shaidan_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `rec_id` mediumint(9) NOT NULL DEFAULT '0',
  `goods_id` mediumint(9) NOT NULL DEFAULT '0',
  `user_id` mediumint(9) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `add_time` int(10) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `hide_username` tinyint(1) NOT NULL DEFAULT '0',
  `pay_points` int(10) NOT NULL DEFAULT '0',
  `is_points` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shaidan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shaidan` values('1','24','100','10','不错','不错噢！','1443550265','1','0','100','1');");
E_D("replace into `ecs_shaidan` values('2','0','0','27','woainixss<>\"2','','1444166851','0','0','0','0');");
E_D("replace into `ecs_shaidan` values('3','88','143','60','test','晒单啦！！@#@￥@！￥一dsagfdsf322SDFGDS#@\$&amp;%^&amp;*(*&amp;)','1446338736','1','0','100','1');");

require("../../inc/footer.php");
?>