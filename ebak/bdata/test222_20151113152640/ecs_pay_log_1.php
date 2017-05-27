<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','200.00','1','0');");
E_D("replace into `ecs_pay_log` values('2','142','334.90','0','0');");
E_D("replace into `ecs_pay_log` values('3','143','494.00','0','0');");
E_D("replace into `ecs_pay_log` values('4','144','74.00','0','0');");
E_D("replace into `ecs_pay_log` values('5','141','902.90','0','0');");
E_D("replace into `ecs_pay_log` values('6','1','178.50','0','0');");
E_D("replace into `ecs_pay_log` values('7','2','117.50','0','0');");
E_D("replace into `ecs_pay_log` values('8','3','104.00','0','0');");
E_D("replace into `ecs_pay_log` values('9','4','104.00','0','0');");
E_D("replace into `ecs_pay_log` values('10','5','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('11','6','104.00','0','0');");
E_D("replace into `ecs_pay_log` values('12','7','1844.50','0','0');");
E_D("replace into `ecs_pay_log` values('13','8','154.00','0','0');");
E_D("replace into `ecs_pay_log` values('14','9','154.00','0','0');");
E_D("replace into `ecs_pay_log` values('15','10','154.00','0','0');");
E_D("replace into `ecs_pay_log` values('16','11','8983.40','0','0');");
E_D("replace into `ecs_pay_log` values('17','3','5000.00','1','0');");
E_D("replace into `ecs_pay_log` values('18','12','74.00','0','0');");
E_D("replace into `ecs_pay_log` values('19','13','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('20','14','17.00','0','0');");
E_D("replace into `ecs_pay_log` values('21','15','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('22','16','325.00','0','0');");
E_D("replace into `ecs_pay_log` values('23','17','4159.80','0','0');");
E_D("replace into `ecs_pay_log` values('24','5','10.00','1','0');");
E_D("replace into `ecs_pay_log` values('25','6','10.00','1','0');");
E_D("replace into `ecs_pay_log` values('26','7','12.00','1','0');");
E_D("replace into `ecs_pay_log` values('27','18','143.00','0','0');");
E_D("replace into `ecs_pay_log` values('28','19','143.00','0','0');");
E_D("replace into `ecs_pay_log` values('29','20','271.00','0','0');");
E_D("replace into `ecs_pay_log` values('30','21','134.00','0','0');");
E_D("replace into `ecs_pay_log` values('31','22','3901.10','0','0');");
E_D("replace into `ecs_pay_log` values('32','23','164.00','0','0');");
E_D("replace into `ecs_pay_log` values('33','8','100.00','1','0');");
E_D("replace into `ecs_pay_log` values('34','24','134.00','0','0');");
E_D("replace into `ecs_pay_log` values('35','25','2488.00','0','0');");
E_D("replace into `ecs_pay_log` values('36','26','4648.60','0','0');");
E_D("replace into `ecs_pay_log` values('37','27','19.90','0','0');");
E_D("replace into `ecs_pay_log` values('38','28','94.00','0','0');");
E_D("replace into `ecs_pay_log` values('39','29','84.00','0','0');");
E_D("replace into `ecs_pay_log` values('40','30','84.00','0','0');");
E_D("replace into `ecs_pay_log` values('41','31','39.00','0','0');");
E_D("replace into `ecs_pay_log` values('42','32','50.00','0','0');");
E_D("replace into `ecs_pay_log` values('43','33','143.00','0','0');");
E_D("replace into `ecs_pay_log` values('44','34','3852.00','0','0');");
E_D("replace into `ecs_pay_log` values('45','35','28.50','0','0');");
E_D("replace into `ecs_pay_log` values('46','36','39.00','0','0');");
E_D("replace into `ecs_pay_log` values('47','37','37.00','0','0');");
E_D("replace into `ecs_pay_log` values('48','38','2123.00','0','0');");
E_D("replace into `ecs_pay_log` values('49','39','15.10','0','0');");
E_D("replace into `ecs_pay_log` values('50','40','15.10','0','0');");
E_D("replace into `ecs_pay_log` values('51','41','15.10','0','0');");
E_D("replace into `ecs_pay_log` values('52','42','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('53','43','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('54','44','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('55','45','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('56','46','0.20','0','0');");
E_D("replace into `ecs_pay_log` values('57','47','0.30','0','0');");
E_D("replace into `ecs_pay_log` values('58','48','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('59','49','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('60','50','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('61','51','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('62','52','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('63','53','0.10','0','0');");
E_D("replace into `ecs_pay_log` values('64','54','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('65','55','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('66','56','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('67','57','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('68','58','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('69','59','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('70','60','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('71','61','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('72','62','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('73','63','0.10','0','1');");
E_D("replace into `ecs_pay_log` values('74','64','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('75','65','4251.95','0','0');");
E_D("replace into `ecs_pay_log` values('76','66','4169.80','0','0');");
E_D("replace into `ecs_pay_log` values('77','67','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('78','68','1798.30','0','0');");
E_D("replace into `ecs_pay_log` values('79','69','4903.00','0','0');");
E_D("replace into `ecs_pay_log` values('80','70','24.90','0','0');");
E_D("replace into `ecs_pay_log` values('81','71','914.00','0','0');");
E_D("replace into `ecs_pay_log` values('82','72','135.00','0','0');");
E_D("replace into `ecs_pay_log` values('83','73','2113.00','0','0');");
E_D("replace into `ecs_pay_log` values('84','74','8442.20','0','0');");
E_D("replace into `ecs_pay_log` values('85','75','42.55','0','0');");
E_D("replace into `ecs_pay_log` values('86','76','37.00','0','0');");
E_D("replace into `ecs_pay_log` values('87','77','24.90','0','0');");
E_D("replace into `ecs_pay_log` values('88','78','214.00','0','0');");
E_D("replace into `ecs_pay_log` values('89','79','155.60','0','0');");
E_D("replace into `ecs_pay_log` values('90','80','108.10','0','0');");
E_D("replace into `ecs_pay_log` values('91','81','2104.05','0','0');");
E_D("replace into `ecs_pay_log` values('92','82','8262.65','0','0');");
E_D("replace into `ecs_pay_log` values('93','83','163.00','0','0');");

require("../../inc/footer.php");
?>