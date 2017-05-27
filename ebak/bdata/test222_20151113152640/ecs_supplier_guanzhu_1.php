<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_guanzhu`;");
E_C("CREATE TABLE `ecs_supplier_guanzhu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `supplierid` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid` (`userid`,`supplierid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_guanzhu` values('1','6','6','1437536537');");
E_D("replace into `ecs_supplier_guanzhu` values('2','12','5','1443421176');");
E_D("replace into `ecs_supplier_guanzhu` values('3','12','1','1443421177');");
E_D("replace into `ecs_supplier_guanzhu` values('11','10','5','1443598436');");
E_D("replace into `ecs_supplier_guanzhu` values('12','22','2','1443634674');");

require("../../inc/footer.php");
?>