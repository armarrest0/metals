<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shop_grade`;");
E_C("CREATE TABLE `ecs_shop_grade` (
  `grade_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL,
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `server` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `send` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_sn` varchar(20) NOT NULL,
  `is_comment` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`grade_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shop_grade` values('1','60','test','1446338546','0','5','5','5','73','2015110159993','1');");

require("../../inc/footer.php");
?>