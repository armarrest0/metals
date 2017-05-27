<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `split_money` decimal(10,2) NOT NULL,
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `comment_state` tinyint(1) NOT NULL DEFAULT '0',
  `shaidan_state` tinyint(1) NOT NULL DEFAULT '0',
  `package_attr_id` varchar(100) NOT NULL,
  `is_back` tinyint(1) NOT NULL DEFAULT '0',
  `cost_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `promote_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('88','73','143','小米（MI）小米Note 移动联通双4G 特别版(16G ROM)','ECS000143','30','1','2500.00','2098.00','0.00','颜色:粉色 \n','1','1','','0','0','155','1','1','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('89','74','100','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','ECS000100','27','1','5000.00','4643.60','0.00','颜色:白色 \n','0','1','','0','0','114','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('90','74','155','三星 Galaxy S6 edge（G9250）32G版 铂光金 移动联通电信4G手机','ECS000155','35','1','6300.00','5783.60','0.00','颜色:灰色 \n','0','1','','0','0','220','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('91','75','202','安索夫迷你电脑USB2.0小音箱可爱熊猫便携笔记本台式电脑音箱 音响','ECS000202','0','1','33.00','27.55','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('92','76','204','安索夫太空人迷你可爱个性发光手机电脑音箱USB低音炮便携笔记本小音响 暑期大促 白色','ECS000204','0','1','33.00','22.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('93','77','30','日本进口 KRACIE（KRACIE）牌玫瑰香味糖果32g','ECS000030','0','1','14.39','9.90','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('94','78','206','洛斐（Lofree）创意无线蓝牙音箱音响 电脑音箱 EDGE锋芒3C建筑美学','ECS000206','0','1','290.00','199.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('95','79','199','爱度ay819无线蓝牙音箱便携迷你小音响插卡u盘低音炮电脑笔记本音箱 白色','ECS000199','0','1','155.00','140.60','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('96','80','200','爱度AY800蓝牙音箱手机电脑迷你音响无线便携插卡低音炮 带蓝牙自拍 土豪金','ECS000200','0','1','115.00','93.10','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('97','81','147','【套装版】荣耀 6 Plus (PE-TL20) 3GB内存标准版 白色 移动4G手机 双卡双待双通','ECS000147','32','1','2300.00','2089.05','0.00','颜色:白色 \n','1','1','','0','0','186','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('98','82','207','三星 Galaxy S6 edge（G9250）32G版 铂光金 移动联通电信4G手机','ECS000207','40','1','6188.00','5783.60','0.00','颜色:金色 \n','0','1','','0','0','269','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('99','82','175','摩托罗拉 moto x pro(XT1115) 64GB 雅典黑 移动联通电信4G手机','ECS000175','0','1','4799.00','4464.05','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('100','83','199','爱度ay819无线蓝牙音箱便携迷你小音响插卡u盘低音炮电脑笔记本音箱 白色','ECS000199','0','1','155.00','148.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00');");

require("../../inc/footer.php");
?>