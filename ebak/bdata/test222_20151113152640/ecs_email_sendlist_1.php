<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_email_sendlist`;");
E_C("CREATE TABLE `ecs_email_sendlist` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `template_id` mediumint(8) NOT NULL,
  `email_content` text NOT NULL,
  `error` tinyint(1) NOT NULL DEFAULT '0',
  `pri` tinyint(10) NOT NULL,
  `last_send` int(10) NOT NULL,
  `supplier_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '店铺id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_email_sendlist` values('1','anan@68ecshop.com','6','亲爱的anan您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-07-23','0','1','1437615423','0');");
E_D("replace into `ecs_email_sendlist` values('2','285188787@qq.com','6','亲爱的68ecshopyy您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-07-23','0','1','1437615423','0');");
E_D("replace into `ecs_email_sendlist` values('3','3490134@qq.com','6','亲爱的yiren您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-07-23','0','1','1437615423','0');");
E_D("replace into `ecs_email_sendlist` values('4','anan@68ecshop.com','6','亲爱的68ecshop您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-08-21','0','1','1440143952','0');");
E_D("replace into `ecs_email_sendlist` values('5','285188787@qq.com','6','亲爱的68ecshopyy您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-08-21','0','1','1440143952','0');");
E_D("replace into `ecs_email_sendlist` values('6','liuxiaona@68ecshop.com','6','亲爱的Lxn您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-09-28','0','1','1443411588','0');");
E_D("replace into `ecs_email_sendlist` values('7','liuxiaona@68ecshop.com','6','亲爱的Lxn您好！\n\n恭喜您获得了1个红包，金额为5.00\n伊人化妆品专卖店2015-09-28','0','1','1443412544','6');");

require("../../inc/footer.php");
?>