<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_account`;");
E_C("CREATE TABLE `ecs_user_account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_account` values('2','1','admin','-200.00','1437432722','1437432722','','支付宝账号：123456789\r\n姓名：788','1','','0');");
E_D("replace into `ecs_user_account` values('3','11','admin','5000.00','1443458359','1443458395','...','。。','0','支付宝','1');");
E_D("replace into `ecs_user_account` values('4','14','68ecshopxjd_cus','1000000.00','1443553988','1443553988','','','0','余额支付','1');");
E_D("replace into `ecs_user_account` values('6','10','','10.00','1443564842','0','','Yyyy','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('7','10','admin','12.00','1443564969','1443569269','yyyy','Yuu','0','支付宝','1');");

require("../../inc/footer.php");
?>