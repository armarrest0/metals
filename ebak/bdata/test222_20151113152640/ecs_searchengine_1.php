<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2015-09-29','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-09-30','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-10-01','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-10-02','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-10-03','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-10-06','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-10-07','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-10-09','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-10-10','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-10-11','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-10-13','GOOGLE','1');");

require("../../inc/footer.php");
?>