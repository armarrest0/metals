<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','1','buyer','2','0','0','0','用户取消','1443389795');");
E_D("replace into `ecs_order_action` values('2','2','buyer','2','0','0','0','用户取消','1443389988');");
E_D("replace into `ecs_order_action` values('3','3','buyer','2','0','0','0','用户取消','1443390207');");
E_D("replace into `ecs_order_action` values('4','4','buyer','2','0','0','0','用户取消','1443390267');");
E_D("replace into `ecs_order_action` values('5','6','buyer','2','0','0','0','用户取消','1443390772');");
E_D("replace into `ecs_order_action` values('6','7','buyer','2','0','0','0','用户取消','1443405395');");
E_D("replace into `ecs_order_action` values('7','8','buyer','2','0','0','0','用户取消','1443405399');");
E_D("replace into `ecs_order_action` values('8','9','buyer','2','0','0','0','用户取消','1443405402');");
E_D("replace into `ecs_order_action` values('9','5','68ecshopxjd_cus','5','5','2','0','','1443475935');");
E_D("replace into `ecs_order_action` values('10','5','68ecshopxjd_cus','1','1','2','1','','1443475935');");
E_D("replace into `ecs_order_action` values('11','11','admin','1','0','0','0','fwef','1443482002');");
E_D("replace into `ecs_order_action` values('12','11','admin','1','0','2','0','fwefwe','1443482043');");
E_D("replace into `ecs_order_action` values('13','11','admin','5','5','2','0','','1443482053');");
E_D("replace into `ecs_order_action` values('14','11','admin','1','1','2','1','','1443482053');");
E_D("replace into `ecs_order_action` values('15','11','买家','5','2','2','0','','1443485998');");
E_D("replace into `ecs_order_action` values('17','14','buyer','2','0','0','0','用户取消','1443547786');");
E_D("replace into `ecs_order_action` values('18','16','admin','1','0','0','0','范围分为','1443554134');");
E_D("replace into `ecs_order_action` values('19','16','admin','1','0','2','0','范围分为','1443554309');");
E_D("replace into `ecs_order_action` values('20','16','admin','5','5','2','0','','1443554604');");
E_D("replace into `ecs_order_action` values('21','16','admin','1','1','2','1','','1443554604');");
E_D("replace into `ecs_order_action` values('22','16','买家','5','2','2','0','','1443554678');");
E_D("replace into `ecs_order_action` values('23','22','68ecshopxjd_cus','1','0','2','0','34','1443861539');");
E_D("replace into `ecs_order_action` values('24','22','68ecshopxjd_cus','5','5','2','0','23','1443861550');");
E_D("replace into `ecs_order_action` values('25','22','68ecshopxjd_cus','1','1','2','1','','1443861577');");
E_D("replace into `ecs_order_action` values('26','25','68ecshopxjd_cus','1','0','0','0','','1444006381');");
E_D("replace into `ecs_order_action` values('27','25','68ecshopxjd_cus','1','0','2','0','ll','1444006573');");
E_D("replace into `ecs_order_action` values('28','25','68ecshopxjd_cus','5','5','2','0','','1444006593');");
E_D("replace into `ecs_order_action` values('29','25','68ecshopxjd_cus','1','1','2','1','','1444006593');");
E_D("replace into `ecs_order_action` values('30','25','买家','5','2','2','0','','1444006639');");
E_D("replace into `ecs_order_action` values('31','31','68ecshopxjd_cus','1','0','0','0','','1444345680');");
E_D("replace into `ecs_order_action` values('32','26','68ecshopxjd_cus','1','0','0','0','','1444440272');");
E_D("replace into `ecs_order_action` values('33','26','68ecshopxjd_cus','1','3','0','0','','1444440277');");
E_D("replace into `ecs_order_action` values('34','26','68ecshopxjd_cus','5','5','0','0','','1444440281');");
E_D("replace into `ecs_order_action` values('35','26','68ecshopxjd_cus','1','1','0','1','','1444440288');");
E_D("replace into `ecs_order_action` values('36','26','买家','5','2','0','0','','1444440308');");
E_D("replace into `ecs_order_action` values('37','35','buyer','2','0','0','0','用户取消','1444440949');");
E_D("replace into `ecs_order_action` values('38','45','买家','1','0','2','0','','1444613202');");
E_D("replace into `ecs_order_action` values('39','49','买家','1','0','2','0','','1444613365');");
E_D("replace into `ecs_order_action` values('40','48','买家','1','0','2','0','','1444613473');");
E_D("replace into `ecs_order_action` values('41','42','买家','1','0','2','0','','1444618348');");
E_D("replace into `ecs_order_action` values('42','43','买家','1','0','2','0','','1444618471');");
E_D("replace into `ecs_order_action` values('43','44','买家','1','0','2','0','','1444618587');");
E_D("replace into `ecs_order_action` values('44','51','买家','1','0','2','0','','1444671390');");
E_D("replace into `ecs_order_action` values('45','50','买家','1','0','2','0','','1444671528');");
E_D("replace into `ecs_order_action` values('46','52','买家','1','0','2','0','','1444673436');");
E_D("replace into `ecs_order_action` values('47','55','买家','1','0','2','0','','1444674994');");
E_D("replace into `ecs_order_action` values('48','54','买家','1','0','2','0','','1444675087');");
E_D("replace into `ecs_order_action` values('49','56','买家','1','0','2','0','','1444676495');");
E_D("replace into `ecs_order_action` values('50','57','买家','1','0','2','0','','1444676554');");
E_D("replace into `ecs_order_action` values('51','58','买家','1','0','2','0','','1444676624');");
E_D("replace into `ecs_order_action` values('52','59','买家','1','0','2','0','','1444676938');");
E_D("replace into `ecs_order_action` values('53','60','买家','1','0','2','0','','1444677502');");
E_D("replace into `ecs_order_action` values('54','61','买家','1','0','2','0','','1444677735');");
E_D("replace into `ecs_order_action` values('55','62','买家','1','0','2','0','','1444677972');");
E_D("replace into `ecs_order_action` values('56','63','买家','1','0','2','0','','1444678522');");
E_D("replace into `ecs_order_action` values('57','66','68ecshopxjd_cus','1','0','0','0','','1444691409');");
E_D("replace into `ecs_order_action` values('58','66','68ecshopxjd_cus','1','0','2','0','已付','1444691436');");
E_D("replace into `ecs_order_action` values('59','66','68ecshopxjd_cus','5','5','2','0','','1444691457');");
E_D("replace into `ecs_order_action` values('60','66','68ecshopxjd_cus','1','1','2','1','','1444691457');");
E_D("replace into `ecs_order_action` values('61','69','buyer','2','0','0','0','用户取消','1444693493');");
E_D("replace into `ecs_order_action` values('62','73','admin','1','0','0','0','','1446332301');");
E_D("replace into `ecs_order_action` values('63','73','admin','1','0','2','0','1','1446332308');");
E_D("replace into `ecs_order_action` values('64','73','admin','5','5','2','0','','1446332312');");
E_D("replace into `ecs_order_action` values('65','73','admin','1','1','2','1','','1446332312');");
E_D("replace into `ecs_order_action` values('66','74','admin','1','0','0','0','','1446338308');");
E_D("replace into `ecs_order_action` values('67','74','admin','1','0','2','0','1','1446338312');");
E_D("replace into `ecs_order_action` values('68','75','admin','1','0','0','0','','1446338338');");
E_D("replace into `ecs_order_action` values('69','73','买家','5','2','2','0','','1446338485');");
E_D("replace into `ecs_order_action` values('70','78','admin','1','0','0','0','','1446338896');");
E_D("replace into `ecs_order_action` values('71','81','admin','1','0','0','0','','1446340671');");
E_D("replace into `ecs_order_action` values('72','81','admin','1','0','2','0','1','1446340677');");
E_D("replace into `ecs_order_action` values('73','81','admin','5','5','2','0','','1446340680');");
E_D("replace into `ecs_order_action` values('74','81','admin','1','1','2','1','','1446340680');");
E_D("replace into `ecs_order_action` values('75','82','admin','1','0','0','0','','1446340688');");
E_D("replace into `ecs_order_action` values('76','81','买家','5','2','2','0','','1446340777');");

require("../../inc/footer.php");
?>