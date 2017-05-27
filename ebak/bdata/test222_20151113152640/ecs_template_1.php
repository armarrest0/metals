<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('index','首页店铺展示左侧广告','/library/ad_position.lbi','0','6','0','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','首页主广告右侧公告','/library/cat_articles.lbi','0','19','5','3','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','商品分类楼层8','/library/cat_goods.lbi','0','8','8','1','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_best.lbi','0','0','3','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_hot.lbi','0','0','3','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_promotion.lbi','0','0','8','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('category','','/library/brands.lbi','0','0','3','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','首页店铺展示右侧广告','/library/ad_position.lbi','0','7','1','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','商品分类楼层7','/library/cat_goods.lbi','0','7','8','1','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','商品分类楼层6','/library/cat_goods.lbi','0','6','8','1','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','商品分类楼层5','/library/cat_goods.lbi','0','5','8','1','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','商品分类楼层4','/library/cat_goods.lbi','0','4','8','1','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','商品分类楼层3','/library/cat_goods.lbi','0','3','8','1','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城通栏广告','/library/ad_position.lbi','0','49','1','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城banner广告1','/library/ad_position.lbi','0','44','1','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城banner广告2','/library/ad_position.lbi','0','45','1','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城banner广告3','/library/ad_position.lbi','0','46','1','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城banner广告4','/library/ad_position.lbi','0','47','1','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','商品分类楼层2','/library/cat_goods.lbi','0','2','8','1','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','商品分类楼层1','/library/cat_goods.lbi','0','1','8','1','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','5','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','5','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','6','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','13','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','5','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','5','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','5','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('exchange_list','','/library/exchange_hot.lbi','0','0','5','0','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('auction_list','拍卖列表banner广告1','/library/ad_position.lbi','0','51','1','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('auction_list','拍卖列表banner广告2','/library/ad_position.lbi','0','52','1','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('auction_list','拍卖列表banner广告3','/library/ad_position.lbi','0','53','1','4','68ecshopcom_360buy','');");
E_D("replace into `ecs_template` values('auction_list','拍卖列表banner广告4','/library/ad_position.lbi','0','54','1','4','68ecshopcom_360buy','');");

require("../../inc/footer.php");
?>