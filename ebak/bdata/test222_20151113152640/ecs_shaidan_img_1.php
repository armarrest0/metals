<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shaidan_img`;");
E_C("CREATE TABLE `ecs_shaidan_img` (
  `img_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `shaidan_id` mediumint(8) NOT NULL DEFAULT '0',
  `desc` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shaidan_img` values('1','1','','images/image/201509/20150930101040_88170.png','images/201509/1443550265453676874.jpg');");
E_D("replace into `ecs_shaidan_img` values('2','1','','images/image/201509/20150930101103_99866.jpg','images/201509/1443550265653317439.jpg');");
E_D("replace into `ecs_shaidan_img` values('3','1','','images/image/201509/20150930101105_57283.png','images/201509/1443550265913672765.jpg');");
E_D("replace into `ecs_shaidan_img` values('4','3','','images/image/201511/20151101164532_11414.jpg','images/201511/1446338736146954269.jpg');");
E_D("replace into `ecs_shaidan_img` values('5','3','','images/image/201511/20151101164532_70941.jpg','images/201511/1446338736681461076.jpg');");

require("../../inc/footer.php");
?>