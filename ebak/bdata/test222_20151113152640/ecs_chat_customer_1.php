<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_chat_customer`;");
E_C("CREATE TABLE `ecs_chat_customer` (
  `cus_id` mediumint(7) NOT NULL COMMENT '编号',
  `user_id` mediumint(7) NOT NULL COMMENT 'ECShop平台系统用户编号',
  `of_username` varchar(120) NOT NULL COMMENT '绑定的OpenFire系统用户名',
  `cus_name` varchar(120) NOT NULL COMMENT '客服名称',
  `supp_id` mediumint(7) NOT NULL DEFAULT '-1' COMMENT '入驻商编号',
  `cus_type` int(10) NOT NULL DEFAULT '0' COMMENT '客服类型',
  `session_count` int(10) DEFAULT '0' COMMENT '客服对话量',
  `talk_time` int(10) DEFAULT '0' COMMENT '客服总的通话时间',
  `cus_degree` int(10) DEFAULT '0' COMMENT '总的满意度',
  `cus_enable` int(10) DEFAULT '1' COMMENT '是否可用',
  `add_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>