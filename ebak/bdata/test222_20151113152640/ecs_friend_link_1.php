<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_friend_link`;");
E_C("CREATE TABLE `ecs_friend_link` (
  `link_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_logo` varchar(255) NOT NULL DEFAULT '',
  `show_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`link_id`),
  KEY `show_order` (`show_order`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_friend_link` values('1','商之翼 网店管理系统','http://www.ecshop.com/','http://www.ecshop.com/images/logo/ecshop_logo.gif','50');");
E_D("replace into `ecs_friend_link` values('2','免费申请网店','http://www.maifou.net/','','51');");
E_D("replace into `ecs_friend_link` values('3','免费开独立网店','http://www.wdwd.com/','','52');");
E_D("replace into `ecs_friend_link` values('4','好东西分享','http://www.sogua2008.com','','1');");

require("../../inc/footer.php");
?>