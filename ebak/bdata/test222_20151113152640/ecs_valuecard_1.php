<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_valuecard`;");
E_C("CREATE TABLE `ecs_valuecard` (
  `vc_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `vc_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `vc_sn` bigint(20) unsigned NOT NULL DEFAULT '0',
  `vc_pwd` varchar(20) NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `used_time` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`vc_id`),
  KEY `vc_sn` (`vc_sn`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_valuecard` values('20','2','15101394778694','j1d0r1z5y4t2q6l3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('19','2','15101355647776','n9y3g0g8f7y3q7m6','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('18','2','15101397511340','s1t3p5x4a7b6j6d4','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('17','2','15101325658476','k3i0o2m3n7x5v3h5','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('16','2','15101372390075','i5w7l1h7a4f1b3g2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('15','2','15101378959354','g2u4m1k8c2r1m4e7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('14','2','15101349445944','u7c5t8u8w9n5g9i9','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('13','2','15101319987850','o3m6n5k7z8f8w4y2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('12','2','15101350574088','x9k2z8p6v7v9u0j0','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('11','2','15101370320373','f7x4s8h6j2h1z9v0','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('21','2','15101351928373','a3o0w9o3m9j6t7u6','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('22','2','15101383149104','b0n0k3m5j9x7e8j7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('23','2','15101366489322','h5i8d4r4d4y9o0k7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('24','2','15101350282315','a9j3k7o9v8s7h8g8','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('25','2','15101347325055','q3r3o5v2i7b7c0m3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('26','2','15101390362966','v5e5y0h9q4f7d0b8','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('27','2','15101387744266','i4f7z3y0p4u0j3c5','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('28','2','15101371617150','e7o9p1w2t3f9o2b7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('29','2','15101362112154','c2x6l4o5p4l4r1k1','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('30','2','15101347166157','k7p9b1a6m5p2d1v5','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('31','2','15101335220332','b9d5w9c0b8d5b0w6','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('32','2','15101337133492','c9a9x0i3a4n2p7p1','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('33','2','15101330664457','m6n4g1c2w6z5k6u1','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('34','2','15101320334026','r1i8l2x6i6i4s7c4','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('35','2','15101384459137','c9b0g9g9i2y4m9k2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('36','2','15101314530993','w4s5e4k7p2h4t2p2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('37','2','15101366299303','i2m2t2q6v3e3h4o3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('38','2','15101370451445','m4x5t0m9a1o1t9u8','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('39','2','15101338644879','h2g3l9u4h1i2q8n3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('40','2','15101398370506','y0v0z4p9b0v6q8s2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('41','2','15101324590229','j1y3e4u9g2o6z3h2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('42','2','15101372473609','n0u9h6n5a0i8i5p3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('43','2','15101381128546','l2z2l3n9m4m7x2x8','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('44','2','15101346808115','m2f7r3z4r2e1t9m7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('45','2','15101318804139','s9u7v0q0r5p4a5n7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('46','2','15101356288867','y2f5z9h6a7i6r6y4','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('47','2','15101329978642','u0s8o0r4p1m3y9g7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('48','2','15101354973602','o5f0e1t2i3w4w8i2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('49','2','15101384724161','y6e2j9n3a3i6i3q5','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('50','2','15101375349274','u7z8y2i3p0x5v1i1','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('51','2','15101337889003','y2v6t5h3p7r3v8i3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('52','2','15101362249060','a1f0s7e7r8o8x7h8','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('53','2','15101356036591','m3c5r4n2z1b2x2z8','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('54','2','15101395037773','l9v9n4f1b9g8y6z6','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('55','2','15101348564225','z4w1x3j9i7k9s0b7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('56','2','15101361924309','w5e7b6q3m7z8q2b0','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('57','2','15101348090293','k2g6z4b5e1b3f3a6','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('58','2','15101377443960','b6l1y7u5g7p5e2b5','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('59','2','15101320863636','w9q6l2y3k2b5k3h0','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('60','2','15101374591231','f7v2p6j6s0c0x1e7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('61','2','15101354037920','u7a6r0a6p4w1h8r3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('62','2','15101354416356','d1h2a4w9f6z8k4i1','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('63','2','15101341215958','u5m0i3r1m4v0m9i7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('64','2','15101383043437','n2v1e5v9k1j9a8i7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('65','2','15101389872194','d8o9v5k5f2c5i9y3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('66','2','15101345395679','e7b6t1r3m0x8r1i2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('67','2','15101353379472','b8l3g0x8s8f7u5j2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('68','2','15101377379742','q2c9v4e0l6h3x3y8','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('69','2','15101376980905','k4g6k0t3w6h8h0r2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('70','2','15101382124095','m4b5l1x7k9w2q8i2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('71','2','15101330799464','g2n8l7m2b8u4e2e4','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('72','2','15101377129755','k0j2x6w8b7d9x4p9','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('73','2','15101374689902','b2e5u9l1l0v6z9h2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('74','2','15101399804936','g6r6f1j3c3o3s2x0','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('75','2','15101378496033','u3y2g1w9c8p6f9q9','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('76','2','15101357410729','c2m3a6n9l6m6p1l8','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('77','2','15101370292467','g3q7e7o7j2z1k4i8','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('78','2','15101372800209','p9t6s4g8i6j3t2i3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('79','2','15101318647839','r5j7c4w6c8n9g7o5','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('80','2','15101394615778','j4w3g4u9v9o9b1h9','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('81','2','15101330273029','q0x0u8k7m3b8b5y0','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('82','2','15101398690669','x2g0i1z4o4w0v7a9','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('83','2','15101367131598','h0b5i3s5y3n3v9s2','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('84','2','15101389589656','r9s6i8y1b3i8t9n1','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('85','2','15101362892256','k7q1e1i7z8o5p0c4','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('86','2','15101347444332','d7f3s2v2k4e6u4d1','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('87','2','15101356457665','h4q6p3h4a3h5g8v3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('88','2','15101356173319','p0n9b6a9g0l3l8p0','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('89','2','15101337174764','f0i4d0h8u5s1z7w6','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('90','2','15101313297730','c2v4j3e4y3x1g3j0','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('91','2','15101340421661','u9u5s2w3g5q2s6i3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('92','2','15101314951335','z5l9a5p5i4v7s6p7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('93','2','15101344256750','n4z1q8h8h0g6y2g4','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('94','2','15101313394357','m1w1v5u6e3l5z1i3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('95','2','15101374368289','o4s1k5t8v1t8j1h7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('96','2','15101362970256','a0c8e7t5g7r8r0k1','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('97','2','15101360037698','i3c4y9y1k8i1y3n7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('98','2','15101381405085','h2b8j4p2w7q9i9p3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('99','2','15101329239653','v6v0g9l7q1g3k9n9','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('100','2','15101396138909','c9x1i9y9w4h1k8z3','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('101','2','15101332997298','y3o7x6i0u0n8r3e6','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('102','2','15101373457872','q1d3y6r1u9c2u7n4','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('103','2','15101387641462','l0s8q5c1c4h4k8r0','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('104','2','15101314447103','b6e4a4i3n7y7g3l5','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('105','2','15101375660001','b7q5g9f7y7l0z6g5','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('106','2','15101332346716','u7b2a5a6u0v3l2i7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('107','2','15101346125425','t1i3g2l3v0v0x3k7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('108','2','15101316325804','k5j4x6l6m3h4q1a4','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('109','2','15101354064894','x9q1n9j3u8n0y3q7','0','0','1444673912');");
E_D("replace into `ecs_valuecard` values('110','2','15101388025515','e8o5c8a5m3x5k3b5','0','0','1444673912');");

require("../../inc/footer.php");
?>