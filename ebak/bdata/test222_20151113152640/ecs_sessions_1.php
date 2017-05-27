<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('3dbb4ce83ebb2ae9de5deae373a28d58','1447398380','0','1','192.168.0.73','sogua2008','0','0.00','0','a:5:{s:12:\"captcha_word\";s:16:\"MmMzYzc1NDNjZg==\";s:10:\"admin_name\";s:9:\"sogua2008\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1447369541;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('d78df948fbec6afcf017ff07c9cac267','1447399477','0','1','127.0.0.1','sogua2008','0','0.00','0','a:5:{s:12:\"captcha_word\";s:16:\"NDM2ODkyNmI2Nw==\";s:10:\"admin_name\";s:9:\"sogua2008\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1447370677;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('62bedb03c986ef1747ff6c2821e09504','1447399021','0','0','192.168.0.73','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:13:\"captcha_login\";s:16:\"MTdiNGFiYWIwYg==\";}');");
E_D("replace into `ecs_sessions` values('4f23e12a4e86d97fbaf6082919610231','1447398626','0','0','192.168.0.73','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('72dbc157db4294a6fd0a85ba20df7032','1447399489','0','1','192.168.0.73','sogua2008','0','0.00','0','a:5:{s:12:\"captcha_word\";s:16:\"ODVkN2JhMDM1Zg==\";s:10:\"admin_name\";s:9:\"sogua2008\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1447370537;s:12:\"suppliers_id\";s:1:\"0\";}');");

require("../../inc/footer.php");
?>