<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_user`;");
E_C("CREATE TABLE `ecs_weixin_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `ecuid` int(11) NOT NULL COMMENT '绑定用户ID',
  `fake_id` varchar(32) NOT NULL,
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  `isfollow` tinyint(1) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `headimgurl` varchar(200) NOT NULL,
  `country` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `sign_num` int(11) NOT NULL COMMENT '连续签到次数',
  `access_token` varchar(40) NOT NULL COMMENT 'token',
  `expire_in` int(11) NOT NULL COMMENT 'token到期时间',
  `from_id` int(11) NOT NULL,
  `Latitude` varchar(32) NOT NULL,
  `Longitude` varchar(32) NOT NULL,
  `Precision` varchar(32) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `fake_id` (`fake_id`),
  KEY `ecuid` (`ecuid`),
  KEY `from_id` (`from_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_user` values('1','21','oh719wgwc5tPRNCYo9T71We6TJ9k','1442915871','2015-09-22','1','裴玉','0','','','','','0','h8o2BPfhmVbV50k-vIhbID7L_BdizYew36G9MOQl','1443254086','1','','','');");
E_D("replace into `ecs_weixin_user` values('2','22','oh719wsDQX4T-3Kh4beqVtXt2Ngc','1442971762','2015-09-23','1','大米 ','2','http://wx.qlogo.cn/mmopen/FXxbE483LDcbkOopkNTNDc7n7cW95H4IfSEmAU0U3ibtd9SNed0fM8jQKCzAm7rYNBxicmFNUCcjqia9edepiaibeibNIKEkAuicyf7/0','中国','河北','秦皇岛','0','jYtyNBWvDZcvRUkV3CCvhMCkgT-PSPXYBz8mc7Uw','1443144562','1','','','');");
E_D("replace into `ecs_weixin_user` values('3','23','oh719wiHjf40T7L8V4cPUIDyvLZI','1442971986','2015-09-23','1','甜甜','2','http://wx.qlogo.cn/mmopen/PMkD0icVs8Kdka8KlGXBTV1HRNvul3uQy8QZoY6m3zUPqMPfvMk1oBVoopg3FbBNOgGHVB902myhFdtbYNr1e78VxJAlC09mg/0','亚美尼亚','','','0','ow1amC9TZoJeEvkiwyXiOVaa5bMppfHGHP4hNnk-','1443144786','1','','','');");
E_D("replace into `ecs_weixin_user` values('4','24','oh719wtNJ7STzuj2Y9mNqd3uwYC0','1442972044','2015-09-23','1','懒洋洋','2','','阿尔巴尼亚','','','0','Cm8DzaWexv1x9qARlQK9aFuBnfaRDloA97FhI0BT','1443256356','1','','','');");
E_D("replace into `ecs_weixin_user` values('5','25','oh719wkZlGQZn0QqpZCjKEoDehWw','1442972626','2015-09-23','0','','0','','','','','0','','0','0','','','');");
E_D("replace into `ecs_weixin_user` values('8','0','oh719wtnD-w_8RvGVcqD2yIAo42w','1442988804','2015-09-23','1','大喵','1','http://wx.qlogo.cn/mmopen/LYWfcVXNu3ib7f8tibtYutibAtb4f2enlx9ib9BiaMPSfLa8F0iccia8gwEXclqKBaY1CUbSpKLkj6MmzXSqLaLKO6Spic4jwAJPzLo6/0','中国','河北','秦皇岛','0','LolGsi6minevE2Z22O2feJgHqEPL5nTNLUzwjLMq','1443161604','1','','','');");
E_D("replace into `ecs_weixin_user` values('7','41','oh719wp0nvhG_VH7siahRWHz38lA','1442977849','2015-09-23','1','刘小娜','2','http://wx.qlogo.cn/mmopen/PMkD0icVs8Kdka8KlGXBTVic2GKLNwFhCzYUyDUIWrQ0FJFeBv8pQ6wp0643vzQmoRkhprwUhgTriaUUIPia01VroXRpicCF207R1/0','中国','河北','秦皇岛','0','o_G2H6Q-pbuEu98nb-teue4IWV2egp3ucFoHw8Fj','1443259089','1','','','');");
E_D("replace into `ecs_weixin_user` values('9','32','oh719wluEiDa-Nnuz3cNyfuKVe90','1442992001','2015-09-23','1','赵云龙','1','http://wx.qlogo.cn/mmopen/ajNVdqHZLLD6cH2xp9e4tbiaRkkspyrNderNS8LibWW2dXN6P3pHOzvuf02ktKNk4WNHQgp0XRNyE1UM2iak4E7rg/0','中国','河北','秦皇岛','0','N5qI8MfFBpvfrmgmtwOe6Wt9vyrtnWdWHa3vME5Z','1443254226','1','','','');");
E_D("replace into `ecs_weixin_user` values('10','35','oh719wtFhW0jBYp4m-BRjt3yencc','1443055785','2015-09-24','1','村里美。','2','http://wx.qlogo.cn/mmopen/LYWfcVXNu3ib7f8tibtYutibMBSmWicgAd3iap9uyPoic9TIoEdxG352oJhvpslNGcYtOxibZtvkd4ttgjGRKPhlxATcqWMTVlK9r9n/0','中国','河北','秦皇岛','0','-mPXF6IQpQhbuCE9N6HJ77PrFTRqVeROucn9Y-4h','1443228585','1','','','');");
E_D("replace into `ecs_weixin_user` values('11','0','oh719wtqL4N_afTFTOo3YDOv4qoo','1443056780','2015-09-24','1','__小喵◆','2','http://wx.qlogo.cn/mmopen/PMkD0icVs8Kdka8KlGXBTVxyn6p84m65xYGV0yofABB2VyVwe90yXrZ5Rm0nibBh4eUgHWFHX1iav92qu5Z3pVJpRGkIXmiaib1ow/0','中国','河北','秦皇岛','0','XHrozJp4hF4KTq2JV2YFBTDQW_iXMVJtajdbxOvs','1443229580','1','','','');");
E_D("replace into `ecs_weixin_user` values('12','0','oh719wjZzycOa5Lx22mcArPpIHEg','1443084483','2015-09-24','1','糖分球球','2','http://wx.qlogo.cn/mmopen/FXxbE483LDemtQCVeMic4UEod4lDABYEBGHELotWehiaibocaRLQVMA54sZSbZqeEYIy0PfG81k7PLoVcjuPDLtSg/0','中国','河北','唐山','0','p6qFF3YpxqSS7dOlj37usWPAnT9gj_kw9Gq3vFSw','1443257283','1','','','');");
E_D("replace into `ecs_weixin_user` values('13','42','oh719wmaScCxp99uAR_TE55QZ87c','1443108109','2015-09-24','1','陈昭宇','1','http://wx.qlogo.cn/mmopen/FXxbE483LDcbkOopkNTNDSnCUMeHNBpjIYynibQV5e3J81A7pKLThSJDlofRPJ1nib0gPVQDd0kUOt2KRfnuWjN1vdciceRBQjE/0','中国','吉林','长春','0','_Xguwu_r-hC7Tm8FtQxT57h5XMoq8gg8GK3gci_U','1443280909','1','','','');");

require("../../inc/footer.php");
?>