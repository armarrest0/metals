<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_area_region`;");
E_C("CREATE TABLE `ecs_area_region` (
  `shipping_area_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_area_region` values('5','1');");
E_D("replace into `ecs_area_region` values('6','1');");
E_D("replace into `ecs_area_region` values('7','1');");
E_D("replace into `ecs_area_region` values('10','410');");
E_D("replace into `ecs_area_region` values('11','1');");
E_D("replace into `ecs_area_region` values('12','1');");
E_D("replace into `ecs_area_region` values('13','1');");
E_D("replace into `ecs_area_region` values('14','1');");
E_D("replace into `ecs_area_region` values('15','1');");
E_D("replace into `ecs_area_region` values('16','1');");
E_D("replace into `ecs_area_region` values('22','322');");
E_D("replace into `ecs_area_region` values('23','1');");
E_D("replace into `ecs_area_region` values('24','1');");
E_D("replace into `ecs_area_region` values('25','1');");

require("../../inc/footer.php");
?>