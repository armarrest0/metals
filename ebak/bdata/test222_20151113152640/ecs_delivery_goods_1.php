<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','231','0','','可爱卡通餐盘水果盘点心盘 盘子儿童托盘餐具6件套','格兰仕','ECS000231','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('2','2','100','26','ECS000100g_p26','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','2','颜色:银色[100] \n');");
E_D("replace into `ecs_delivery_goods` values('3','3','29','0','','意大利费列罗巧克力食品进口零食礼盒576粒整箱装结婚喜糖','口水娃','ECS000029','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('4','4','179','38','ECS000179g_p38','哈马 韩国 单手操作器 魔力贴 U形手机支架创意可爱懒人支架 单个绿色','海信','ECS000179','1','','0','999','颜色:绿色 \n');");
E_D("replace into `ecs_delivery_goods` values('5','5','147','32','ECS000147g_p32','【套装版】荣耀 6 Plus (PE-TL20) 3GB内存标准版 白色 移动4G手机 双卡双待双通','华为','ECS000147','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('6','5','232','0','','奇居良品 欧式家居装饰摆件 可莉尔裂纹贴花陶瓷水果盘','','ECS000232','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('7','6','100','27','ECS000100g_p27','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('8','7','100','27','ECS000100g_p27','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('9','8','143','30','ECS000143g_p30','小米（MI）小米Note 移动联通双4G 特别版(16G ROM)','小米','ECS000143','1','','0','1','颜色:粉色 \n');");
E_D("replace into `ecs_delivery_goods` values('10','9','147','32','ECS000147g_p32','【套装版】荣耀 6 Plus (PE-TL20) 3GB内存标准版 白色 移动4G手机 双卡双待双通','华为','ECS000147','1','','0','1','颜色:白色 \n');");

require("../../inc/footer.php");
?>