<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('1','本站','17');");
E_D("replace into `ecs_adsense` values('2','本站','25');");
E_D("replace into `ecs_adsense` values('58','本站','2');");
E_D("replace into `ecs_adsense` values('56','本站','2');");
E_D("replace into `ecs_adsense` values('59','本站','2');");
E_D("replace into `ecs_adsense` values('3','本站','17');");
E_D("replace into `ecs_adsense` values('4','本站','12');");
E_D("replace into `ecs_adsense` values('5','本站','10');");
E_D("replace into `ecs_adsense` values('8','本站','8');");
E_D("replace into `ecs_adsense` values('10','本站','7');");
E_D("replace into `ecs_adsense` values('16','本站','2');");
E_D("replace into `ecs_adsense` values('52','本站','2');");
E_D("replace into `ecs_adsense` values('37','本站','5');");
E_D("replace into `ecs_adsense` values('38','本站','4');");
E_D("replace into `ecs_adsense` values('9','本站','4');");
E_D("replace into `ecs_adsense` values('6','本站','9');");
E_D("replace into `ecs_adsense` values('24','本站','20');");
E_D("replace into `ecs_adsense` values('28','本站','4');");
E_D("replace into `ecs_adsense` values('25','本站','11');");
E_D("replace into `ecs_adsense` values('26','本站','2');");
E_D("replace into `ecs_adsense` values('30','本站','15');");
E_D("replace into `ecs_adsense` values('7','本站','4');");
E_D("replace into `ecs_adsense` values('60','本站','2');");
E_D("replace into `ecs_adsense` values('39','本站','7');");
E_D("replace into `ecs_adsense` values('27','本站','8');");
E_D("replace into `ecs_adsense` values('11','本站','2');");
E_D("replace into `ecs_adsense` values('41','本站','4');");
E_D("replace into `ecs_adsense` values('36','本站','3');");
E_D("replace into `ecs_adsense` values('46','本站','2');");
E_D("replace into `ecs_adsense` values('49','本站','1');");
E_D("replace into `ecs_adsense` values('45','本站','2');");
E_D("replace into `ecs_adsense` values('12','本站','2');");
E_D("replace into `ecs_adsense` values('21','本站','1');");
E_D("replace into `ecs_adsense` values('17','本站','1');");
E_D("replace into `ecs_adsense` values('47','本站','1');");
E_D("replace into `ecs_adsense` values('55','本站','1');");

require("../../inc/footer.php");
?>