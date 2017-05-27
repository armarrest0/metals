<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_role`;");
E_C("CREATE TABLE `ecs_role` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `role_describe` text,
  PRIMARY KEY (`role_id`),
  KEY `user_name` (`role_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_role` values('1','客户测试','goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,virualcard,picture_batch,goods_export,goods_batch,gen_goods_script,question_manage,shaidan_manage,scan_store,order_comment_priv,article_cat,article_manage,shopinfo_manage,shophelp_manage,vote_priv,article_auto,feedback_priv,integrate_users,sync_users,users_manage,user_rank,surplus_manage,account_manage,logs_manage,ship_manage,payment,shiparea_manage,friendlink,flash_manage,navigator,affiliate,affiliate_ck,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,invoice_manage,topic_manage,gift_manage,card_manage,pack,bonus_manage,auction,favourable,whole_sale,package_manage,exchange_goods,takegoods_list,takegoods_order,pre_sale,attention_list,email_list,magazine_list,view_sendlist,send_mail,supplier_manage,supplier_rank,supplier_rebate,supplier_tag,pickup_point_manage,pickup_point_batch,customer,third_customer,virtual_category,virtual_district,virtual_card_list,virtual_goods_sup,virtual_goods_list,virtual_validate,virtual_goods_add','');");

require("../../inc/footer.php");
?>