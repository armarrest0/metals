<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2015-09-30','ecshop','请输入关键词','1');");
E_D("replace into `ecs_keywords` values('2015-10-06','ecshop','连衣裙','3');");
E_D("replace into `ecs_keywords` values('2015-10-07','ecshop','连衣裙欧根纱','1');");
E_D("replace into `ecs_keywords` values('2015-10-07','ecshop','连衣裙','1');");
E_D("replace into `ecs_keywords` values('2015-10-07','ecshop','woainixss&lt;&gt;\\\\&quot;1','2');");
E_D("replace into `ecs_keywords` values('2015-10-08','ecshop','woainixss&lt;&gt;\\\\&quot;1','3');");
E_D("replace into `ecs_keywords` values('2015-10-09','ecshop','请输入关键词','3');");
E_D("replace into `ecs_keywords` values('2015-10-10','ecshop','woainixss&lt;&gt;\\\\&quot;1','3');");
E_D("replace into `ecs_keywords` values('2015-10-11','ecshop','woainixss&lt;&gt;\\\\&quot;1','1');");
E_D("replace into `ecs_keywords` values('2015-10-12','ecshop','woainixss&lt;&gt;\\\\&quot;1','1');");
E_D("replace into `ecs_keywords` values('2015-10-12','ecshop','T恤','3');");
E_D("replace into `ecs_keywords` values('2015-10-13','ecshop','雅诗兰黛','1');");

require("../../inc/footer.php");
?>