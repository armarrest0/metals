<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keyword`;");
E_C("CREATE TABLE `ecs_keyword` (
  `w_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `word` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `letter` varchar(255) NOT NULL DEFAULT '',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `total_search` int(10) unsigned NOT NULL DEFAULT '0',
  `month_search` int(10) unsigned NOT NULL DEFAULT '0',
  `week_search` int(10) unsigned NOT NULL DEFAULT '0',
  `today_search` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `keyword_cat` varchar(255) NOT NULL,
  `keyword_cat_url` varchar(255) NOT NULL,
  `keyword_cat_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`w_id`),
  KEY `searchengine` (`searchengine`),
  KEY `word` (`word`),
  KEY `letter` (`letter`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keyword` values('1','ecshop','三星','三星','sanxing','3','1437586690','1','1','1','1','1','食品生鲜','search.php?category=1&keywords=吃','1');");
E_D("replace into `ecs_keyword` values('2','ecshop','女','女','nv','23','1437688209','3','3','3','3','1','服装服饰','search.php?category=2&keywords=女','15');");
E_D("replace into `ecs_keyword` values('3','ecshop','小米','小米','xiaomi','2','1440115188','1','1','1','1','1','手机数码','search.php?category=4&keywords=小米','2');");
E_D("replace into `ecs_keyword` values('4','ecshop','宾格','宾格','binge','1','1440115201','1','1','1','1','1','食品生鲜','search.php?category=1&keywords=宾格','1');");
E_D("replace into `ecs_keyword` values('5','ecshop','000102','000102','000102','1','1443554499','1','1','1','1','1','服装服饰','search.php?category=2&keywords=000102','1');");
E_D("replace into `ecs_keyword` values('6','ecshop','000231','000231','000231','1','1443554546','1','1','1','1','1','家纺家居','search.php?category=6&keywords=000231','1');");
E_D("replace into `ecs_keyword` values('7','ecshop','格力电暖器','格力电暖器','gelidiannuanqi','2','1444360661','7','5','4','1','1','家用电器','search.php?category=5&keywords=格力电暖器','2');");
E_D("replace into `ecs_keyword` values('8','ecshop','火龙果','火龙果','huolongguo','56','1444113730','1','1','1','1','1','手机数码','search.php?category=4&keywords=火龙果','25');");
E_D("replace into `ecs_keyword` values('9','ecshop','巧克力','巧克力','qiaokeli','23','1444149957','1','1','1','1','1','食品生鲜','search.php?category=1&keywords=巧克力','15');");
E_D("replace into `ecs_keyword` values('10','ecshop','woainixss&lt;&gt;&quot;1','woainixss&lt;&gt;&quot;1','woainixss&lt;&gt;&quot;1','160','1444372447','6','6','6','1','1','','','0');");
E_D("replace into `ecs_keyword` values('12','ecshop','测试','测试','ceshi','1','1444678486','30','30','30','15','1','','','0');");
E_D("replace into `ecs_keyword` values('11','ecshop','安','安','an','6','1444601991','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('13','ecshop','宾格瑞','宾格瑞','bingerui','2','1444696014','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('14','ecshop','连衣裙','连衣裙','lianyiqun','6','1444696034','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('15','ecshop','雅鹿','雅鹿','yalu','1','1444696491','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('16','ecshop','进口','进口','jinkou','34','1444696547','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('17','ecshop','店','店','dian','1','1444696803','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('18','ecshop','吃','吃','chi','1','1444696811','1','1','1','1','1','','','0');");

require("../../inc/footer.php");
?>