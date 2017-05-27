<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_takegoods`;");
E_C("CREATE TABLE `ecs_takegoods` (
  `tg_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `tg_sn` varchar(20) NOT NULL,
  `tg_pwd` varchar(20) NOT NULL,
  `tg_order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `used_time` varchar(255) NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tg_id`),
  KEY `vc_sn` (`tg_sn`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_takegoods` values('1','1','7x8d0k4u10001','n8e1u9v5h0h3d5g0','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('2','1','3k1v4q0g10002','x2w7e8d8q4r9e8b0','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('3','1','0j8d8a5h10003','l6s3z8v8x7b6s8y6','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('4','1','0u4j6n0q10004','b3f1p9n0u2f0y7f8','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('5','1','1r0t3d1v10005','y4h1p5r1r5u9r7k5','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('6','1','8c7s8n5r10006','q5g9t0b0a0v7s5x0','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('7','1','0w2y8t8z10007','m7t2x4l1m8u5k1r7','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('8','1','9z5x0f0d10008','s6o7c0t2f4f3m0n3','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('9','1','7p0m4f8z10009','n4r4n7k2t6h9c5o4','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('10','1','6t4o7i5m10010','d4a7i0u8z9k4m4n2','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('11','1','2h1c8w6p10011','f5u9a6i9o0v0b7d5','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('12','1','6s5o8q9m10012','i2a9h6q0r6u5a2u8','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('13','1','5g0z3a2w10013','u2q7x1m8v5i0o3o3','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('14','1','5h8e8l7s10014','i4n4g0t6l0n5q0d7','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('15','1','1w6n9x0c10015','h8l1s6l4i8l1s1z7','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('16','1','5r0d9h0g10016','o1s5b0i4t5n0p6j0','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('17','1','3o0c8z1l10017','t6i9c9s9z4k6f2d7','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('18','1','5z1a9n3l10018','y4i4p2p8k8z5m8l4','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('19','1','6y9f1s3v10019','o3e4y4l4a9b8n0o6','0','0','1444673826');");
E_D("replace into `ecs_takegoods` values('20','1','5d4c2l7v10020','c1c7b0a4t8v7i5b2','0','0','1444673826');");

require("../../inc/footer.php");
?>