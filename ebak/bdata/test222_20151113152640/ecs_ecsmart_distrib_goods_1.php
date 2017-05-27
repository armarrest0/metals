<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_distrib_goods`;");
E_C("CREATE TABLE `ecs_ecsmart_distrib_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `distrib_time` int(2) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `distrib_money` decimal(10,2) NOT NULL,
  `distrib_type` int(2) NOT NULL,
  `goods_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_distrib_goods` values('93','0','0','0','20.00','2','26');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('94','0','0','0','20.00','2','28');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('95','0','0','0','20.00','2','27');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('96','0','0','0','20.00','2','29');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('97','0','0','0','20.00','2','30');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('98','0','0','0','20.00','2','31');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('99','0','0','0','20.00','2','32');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('100','0','0','0','20.00','2','50');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('101','0','0','0','20.00','2','51');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('102','0','0','0','20.00','2','52');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('103','0','0','0','20.00','2','53');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('104','0','0','0','20.00','2','54');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('105','0','0','0','20.00','2','55');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('106','0','0','0','20.00','2','56');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('107','0','0','0','20.00','2','60');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('108','0','0','0','20.00','2','62');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('109','0','0','0','20.00','2','63');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('110','0','0','0','20.00','2','67');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('111','0','0','0','20.00','2','68');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('112','0','0','0','20.00','2','69');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('113','0','0','0','20.00','2','70');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('114','0','0','0','20.00','2','71');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('115','0','0','0','20.00','2','72');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('116','0','0','0','20.00','2','74');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('117','0','0','0','20.00','2','75');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('118','0','0','0','20.00','2','78');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('119','0','0','0','20.00','2','79');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('120','0','0','0','20.00','2','81');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('121','0','0','0','20.00','2','82');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('122','0','0','0','20.00','2','85');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('123','0','0','0','20.00','2','86');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('124','0','0','0','20.00','2','88');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('125','0','0','0','20.00','2','89');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('126','0','0','0','20.00','2','90');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('127','0','0','0','20.00','2','91');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('128','0','0','0','20.00','2','92');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('129','0','0','0','20.00','2','93');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('130','0','0','0','20.00','2','94');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('131','0','0','0','20.00','2','95');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('132','0','0','0','20.00','2','96');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('133','0','0','0','20.00','2','97');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('134','0','0','0','20.00','2','99');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('135','0','0','0','20.00','2','100');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('136','0','0','0','20.00','2','101');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('137','0','0','0','20.00','2','102');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('138','0','0','0','20.00','2','103');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('139','0','0','0','20.00','2','105');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('140','0','0','0','20.00','2','106');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('141','0','0','0','20.00','2','107');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('142','0','0','0','20.00','2','110');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('143','0','0','0','5.00','2','241');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('144','0','0','0','5.00','2','240');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('145','0','1443110400','1443369600','10.00','1','148');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('146','0','1443110400','1443369600','10.00','1','213');");

require("../../inc/footer.php");
?>