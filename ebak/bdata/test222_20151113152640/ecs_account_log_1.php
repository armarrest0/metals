<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_log`;");
E_C("CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_log` values('1','0','0.00','0.00','100','100','1437431243','注册送积分','99');");
E_D("replace into `ecs_account_log` values('24','0','0.00','0.00','100','100','1443487206','注册送积分','99');");
E_D("replace into `ecs_account_log` values('35','0','0.00','0.00','100','100','1443563772','注册送积分','99');");
E_D("replace into `ecs_account_log` values('36','0','0.00','0.00','100','100','1443568756','注册送积分','99');");
E_D("replace into `ecs_account_log` values('48','0','0.00','0.00','100','100','1443785585','注册送积分','99');");
E_D("replace into `ecs_account_log` values('55','0','0.00','0.00','100','100','1444005803','注册送积分','99');");
E_D("replace into `ecs_account_log` values('76','0','0.00','0.00','100','100','1444592808','注册送积分','99');");
E_D("replace into `ecs_account_log` values('77','0','0.00','0.00','100','100','1444600126','注册送积分','99');");
E_D("replace into `ecs_account_log` values('84','0','0.00','0.00','100','100','1444755459','注册送积分','99');");
E_D("replace into `ecs_account_log` values('85','0','0.00','0.00','100','100','1445330951','注册送积分','99');");
E_D("replace into `ecs_account_log` values('86','60','0.00','0.00','2098','2098','1446332312','订单 2015110159993 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('87','60','0.00','0.00','0','100','1446338827','晒单获得积分','99');");
E_D("replace into `ecs_account_log` values('88','60','0.00','0.00','2089','2089','1446340680','订单 2015110150335 赠送的积分','99');");

require("../../inc/footer.php");
?>