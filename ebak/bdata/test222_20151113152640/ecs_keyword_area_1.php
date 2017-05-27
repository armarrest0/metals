<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keyword_area`;");
E_C("CREATE TABLE `ecs_keyword_area` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `w_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`),
  KEY `w_id` (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keyword_area` values('1437586690','1','192.168.1.189','LAN');");
E_D("replace into `ecs_keyword_area` values('1437688030','2','192.168.1.162','LAN');");
E_D("replace into `ecs_keyword_area` values('1437688204','2','192.168.1.162','LAN');");
E_D("replace into `ecs_keyword_area` values('1437688209','2','192.168.1.162','LAN');");
E_D("replace into `ecs_keyword_area` values('1440115188','3','192.168.1.152','LAN');");
E_D("replace into `ecs_keyword_area` values('1440115201','4','192.168.1.152','LAN');");
E_D("replace into `ecs_keyword_area` values('1443554499','5','110.211.206.143','IANA');");
E_D("replace into `ecs_keyword_area` values('1443554546','6','110.211.206.143','IANA');");
E_D("replace into `ecs_keyword_area` values('1443582109','7','122.114.129.163','IANA');");
E_D("replace into `ecs_keyword_area` values('1443600797','7','157.55.39.167','IANA');");
E_D("replace into `ecs_keyword_area` values('1443657912','7','119.131.80.20','IANA');");
E_D("replace into `ecs_keyword_area` values('1444108392','7','14.218.81.218','IANA');");
E_D("replace into `ecs_keyword_area` values('1444113730','8','120.33.53.33','IANA');");
E_D("replace into `ecs_keyword_area` values('1444146679','7','182.118.22.214','IANA');");
E_D("replace into `ecs_keyword_area` values('1444149957','9','120.33.53.33','IANA');");
E_D("replace into `ecs_keyword_area` values('1444172972','10','183.9.215.49','IANA');");
E_D("replace into `ecs_keyword_area` values('1444173054','10','183.9.215.49','IANA');");
E_D("replace into `ecs_keyword_area` values('1444173058','10','183.9.215.49','IANA');");
E_D("replace into `ecs_keyword_area` values('1444257411','7','157.55.39.245','IANA');");
E_D("replace into `ecs_keyword_area` values('1444282231','10','183.9.181.253','IANA');");
E_D("replace into `ecs_keyword_area` values('1444284529','10','183.9.181.253','IANA');");
E_D("replace into `ecs_keyword_area` values('1444360661','7','207.46.13.52','IANA');");
E_D("replace into `ecs_keyword_area` values('1444372447','10','183.9.183.209','IANA');");
E_D("replace into `ecs_keyword_area` values('1444601991','11','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444602574','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444605317','12','120.6.117.84','IANA');");
E_D("replace into `ecs_keyword_area` values('1444605441','12','120.6.117.84','IANA');");
E_D("replace into `ecs_keyword_area` values('1444605480','12','120.6.117.84','IANA');");
E_D("replace into `ecs_keyword_area` values('1444605861','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444606208','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444606277','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444606367','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444606427','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444607695','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444607751','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444607769','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444607849','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444608443','12','120.6.117.84','IANA');");
E_D("replace into `ecs_keyword_area` values('1444613325','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444670049','12','120.6.117.84','IANA');");
E_D("replace into `ecs_keyword_area` values('1444670647','12','120.6.117.84','IANA');");
E_D("replace into `ecs_keyword_area` values('1444673382','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444673508','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444673739','12','120.6.117.84','IANA');");
E_D("replace into `ecs_keyword_area` values('1444674937','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444676454','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444676516','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444676590','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444676804','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444677473','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444677673','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444677677','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444677947','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444678486','12','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444696014','13','58.61.246.25','IANA');");
E_D("replace into `ecs_keyword_area` values('1444696034','14','58.61.246.25','IANA');");
E_D("replace into `ecs_keyword_area` values('1444696491','15','58.61.246.25','IANA');");
E_D("replace into `ecs_keyword_area` values('1444696547','16','58.61.246.25','IANA');");
E_D("replace into `ecs_keyword_area` values('1444696803','17','124.237.90.162','IANA');");
E_D("replace into `ecs_keyword_area` values('1444696811','18','124.237.90.162','IANA');");

require("../../inc/footer.php");
?>