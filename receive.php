<?php

/**
 * ECSHOP 处理收回确认的页面
 * ============================================================================
 * 版权所有 2005-2011 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: receive.php 17217 2011-01-19 06:29:08Z liubo $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

/* 取得参数 */
$order_id  = !empty($_REQUEST['id'])  ? intval($_REQUEST['id'])              : 0;  // 订单号
$consignee = !empty($_REQUEST['con']) ? rawurldecode(trim($_REQUEST['con'])) : ''; // 收货人

/* 查询订单信息 */
$sql   = 'SELECT * FROM ' . $ecs->table('order_info') . " WHERE order_id = '$order_id'";
$order = $db->getRow($sql);

if (empty($order))
{
    $msg = $_LANG['order_not_exists'];
}
/* 检查订单 */
elseif ($order['shipping_status'] == SS_RECEIVED)
{
    $msg = $_LANG['order_already_received'];
}
elseif ($order['shipping_status'] != SS_SHIPPED)
{
    $msg = $_LANG['order_invalid'];
}
elseif ($order['consignee'] != $consignee)
{
    $msg = $_LANG['order_invalid'];
}
else
{
    /* 修改订单发货状态为“确认收货” */
    $sql = "UPDATE " . $ecs->table('order_info') . " SET shipping_status = '" . SS_RECEIVED . "' WHERE order_id = '$order_id'";
    $db->query($sql);

    /* 记录日志 */
    order_action($order['order_sn'], $order['order_status'], SS_RECEIVED, $order['pay_status'], '', $_LANG['buyer']);

    $msg = $_LANG['act_ok'];
}


/* 查询商家信息 */
$sql   = 'SELECT * FROM ' . $ecs->table('supplier') . " WHERE user_id = '$order[user_id]'";
$supplier = $db->getRow($sql);

if($supplier){
    
    $sql   = 'SELECT * FROM ' . $ecs->table('order_goods') . " WHERE order_id = '$order_id'";
    $order_goods_list = $db->getAll($sql);
    
    foreach($order_goods_list as $order_goods){
    
    /* 商品信息 */
    $sql = "SELECT * FROM " . $ecs->table('goods') . " WHERE goods_id = '$order_goods[goods_id]' and supplier_id=0";
    $good = $db->getRow($sql);
        
        
     $sql = "INSERT INTO " . $ecs->table('goods') . " (goods_name, goods_name_style, goods_sn, " .
                    "cat_id, brand_id, shop_price, market_price, is_promote, zhekou, promote_price, " .
                    "promote_start_date, promote_end_date, is_buy,buymax,buymax_start_date,buymax_end_date,goods_img, goods_thumb, original_img, keywords, goods_brief, " .
                    "seller_note, goods_weight, goods_number, warn_number, integral, give_integral, is_best, is_new, is_hot, " .
                    "is_on_sale, is_alone_sale, is_shipping, goods_desc, add_time, last_update, goods_type, rank_integral, supplier_id,supplier_status)" .
                "VALUES ('$good[goods_name]', '$good[goods_name_style]', '$good[goods_sn]', '$good[cat_id]', " .
                    "'$good[brand_id]', '$good[shop_price]', '$good[market_price]', '$good[is_promote]', '$good[zhekou]', '$good[promote_price]', ".
                    "'$good[promote_start_date]', '$good[promote_end_date]', '$good[is_buy]','$good[buymax]','$good[buymax_start_date]','$good[buymax_end_date]','$good[goods_img]', '$good[goods_thumb]', '$good[original_img]', ".
                    "'$good[keywords]', '$good[goods_brief]', '$good[seller_note]', '$good[goods_weight]', '$order_goods[goods_number]',".
                    " '$good[warn_number]', '$good[integral]', '$good[give_integral]', '$good[is_best]', '$good[is_new]', '$good[is_hot]', '0', '$good[is_alone_sale]', $good[is_shipping], ".
                    " '$good[goods_desc]', '" . gmtime() . "', '". gmtime() ."', '$good[goods_type]', '$good[rank_integral]', '$supplier[supplier_id]', '0')";
     
     $db->query($sql);
     $insert_id = $db->insert_id();
     
     $sql = "SELECT * FROM " . $ecs->table('supplier_goods_cat') . " WHERE goods_id = '$insert_id' and cat_id=".$good[cat_id];
     $res = $db->getRow($sql);
     
     if(!$res){
         $sql = "INSERT INTO " . $ecs->table('supplier_goods_cat') .
                " (goods_id, cat_id, supplier_id) " .
                "VALUES ('$insert_id', '$good[cat_id]', '$supplier[supplier_id]')";
        $db->query($sql);
     }
     
     
     
    }
     
}


/* 显示模板 */
assign_template();
$position = assign_ur_here();
$smarty->assign('page_title', $position['title']);    // 页面标题
$smarty->assign('ur_here',    $position['ur_here']);  // 当前位置

$smarty->assign('categories', get_categories_tree()); // 分类树
$smarty->assign('helps',      get_shop_help());       // 网店帮助

assign_dynamic('receive');

$smarty->assign('msg', $msg);
$smarty->display('receive.dwt');

?>