<?php

/**
 * 管理中心 租金管理
 * $Author: yangsong
 * 
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'includes/lib_order.php');
//require(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/supplier.php');
$smarty->assign('lang', $_LANG);


/*------------------------------------------------------ */
//-- 交租支付
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'pay')
{      
    
    $payment = payment_info($_REQUEST['payment_other']);
    $rent_id = $_REQUEST['rent_id'];
    
    $paysn = mt_rand(10,99). sprintf('%010d',time() - 946656000) . sprintf('%03d', (float) microtime() * 1000) . sprintf('%03d', (int) $member_id % 1000);
    
    $sql="select * from ". $ecs->table('supplier_rent') ." where rent_id=".$rent_id;  
    
    $supplier=$db->getRow($sql);
    
    
    $sql = 'INSERT INTO '.$ecs->table('rent_paylog').'(type,paysn,rent_id,rent_money,addtime) values("'.$payment['pay_code'].'","'.$paysn.'","'.$rent_id.'","'.$supplier['rent_money'].'","'.time().'")';
            $db->query($sql);      
            
    $db->query($sql); 
            
    $insert_id = $db->insert_id();
    
    $pay_info = array();
    $pay_info['order_sn'] = $paysn."rent";
    $pay_info['log_id'] = $insert_id;
    $pay_info['order_amount'] = $supplier['rent_money'];
    $pay_info['rent'] = 1;
    
    include_once(ROOT_PATH .'includes/modules/payment/' . $payment['pay_code'] . '.php');
    include_once(ROOT_PATH .'includes/lib_payment.php');

    $pay_obj    = new $payment['pay_code'];

    $pay_online = $pay_obj->get_code($pay_info, unserialize_config($payment['pay_config']));

            /* 代码修改_start  By www.ecshop68.com */
            $payment_www_com=unserialize_config($payment['pay_config']);
            if ($payment['pay_code']=='alipay_bank')
            {
                    $payment_www_com['www_ecshop68_com_alipay_bank'] = $_POST['www_68ecshop_com_bank'] ? trim($_POST['www_68ecshop_com_bank']) : "www_ecshop68_com";

                    $pay_online = $pay_obj->get_code($order, $payment_www_com);
            }

            /* 代码修改_end  By www.ecshop68.com */

    $order['pay_desc'] = $payment['pay_desc'];

    echo "<script>window.parent.location.href='".$pay_online."'</script>";
   
}
/*------------------------------------------------------ */
//-- 支付列表
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'paylist')
{
    $rent_id = $_REQUEST['id'];
    
    $sql="select * from ". $ecs->table('supplier_rent') ." where rent_id=".$rent_id;  
    
    $supplier=$db->getRow($sql);
    
      // 给货到付款的手续费加<span id>，以便改变配送的时候动态显示
    $payment_list = available_payment_list(1, $cod_fee, false, $_SESSION['extension_code']=='virtual_good'?1:0);
	$pay_balance_id=0;//当前配置于的余额支付的递增id
    if(isset($payment_list))
    {
        foreach ($payment_list as $key => $payment)
        {
            if ($payment['is_cod'] == '1')
            {
                $payment_list[$key]['format_pay_fee'] = '<span id="ECS_CODFEE">' . $payment['format_pay_fee'] . '</span>';
            }
            /* 如果有易宝神州行支付 如果订单金额大于300 则不显示 */
            if ($payment['pay_code'] == 'yeepayszx' && $total['amount'] > 300)
            {
                unset($payment_list[$key]);
            }
            /* 如果有余额支付 */
            if ($payment['pay_code'] == 'balance')
            {
				$pay_balance_id = $payment['pay_id'];
                /* 如果未登录，不显示 */
                if ($_SESSION['user_id'] == 0)
                {
                    unset($payment_list[$key]);
                }
                else
                {
                    if ($_SESSION['flow_order']['pay_id'] == $payment['pay_id'])
                    {
                        $smarty->assign('disable_surplus', 1);
                    }
                }
            }
        }
    }   
    
    $smarty->assign('pay_balance_id', $pay_balance_id);
    $smarty->assign('payment_list', $payment_list);
    $smarty->assign('rent_id', $rent_id);
    $smarty->assign('rent_money', $supplier['rent_money']);

    assign_query_info();
    $smarty->display('supplier_rent_paylist.htm');
}

//结算页面展示
elseif ($_REQUEST['act'] == 'view')
{
	admin_priv('rebate_manage');

	$id = intval($_REQUEST['rid']);
    if (($rebate = rebateHave($id)) === false)
    {
        sys_msg('该返佣记录不存在！');
    }
	else
	{
		$rebate['sign'] = createSign($rebate['rebate_id'],$rebate['supplier_id']);
		$rebate['rent_paytime_start'] = local_date('Y.m.d', $rebate['rent_paytime_start']);
		$paytime_end = $rebate['rent_paytime_end'];
		$rebate['rent_paytime_end'] = local_date('Y.m.d', $paytime_end);
		//结算信息
		$money = getRebateOrderMoney($id);
		$money_info = array();
		foreach($money as $key=>$val){
			$money_info[$key]['allmoney'] = $val;
			$money_info[$key]['allmoney'] = price_format($val);
			$money_info[$key]['supplier_rent'] = $rebate['supplier_rent'];
			$money_info[$key]['rebatemoney'] = price_format($val*$rebate['supplier_rent']/100);
		}
		$smarty->assign('money_info',   $money_info);

		//佣金统计
		$allmoney = array_sum($money);
		$tongji['allmoney'] = price_format($allmoney);
		$tongji['allrebate'] = price_format($allmoney*$rebate['supplier_rent']/100);
		$tongji['chamoney'] = price_format($allmoney*(1-$rebate['supplier_rent']/100));

		$tongji['rebate_all'] = ($rebate['rebate_all'] > 0) ? $rebate['rebate_all'] : $tongji['allmoney'];
		$tongji['rebate_money'] = ($rebate['rebate_money'] > 0) ? $rebate['rebate_money'] : $tongji['allrebate'];
		$tongji['payable_price'] = $rebate['payable_price'];

		$rebate['caozuo'] = getRebateDo($rebate['status'],$rebate['rebate_id'],'rebate_view');
		$smarty->assign('allmoney',   $tongji);

		//商家店铺信息
		$sql = "select s.*, r.rank_name, u.user_name from ".$ecs->table('supplier')." AS s left join ".$ecs->table('supplier_rank').
					" AS r on s.rank_id=r.rank_id left join ". $ecs->table('users') ." AS u on s.user_id=u.user_id  where s.supplier_id='$rebate[supplier_id]' ";
		$supplier =$db->getRow($sql);
		if (!empty($supplier))
		{
			$supplier['province'] = $db->getOne("select region_name from ". $ecs->table('region') ." where region_id='$supplier[province]' ");
			$supplier['city'] = $db->getOne("select region_name from ". $ecs->table('region') ." where region_id='$supplier[city]' ");
			$supplier['district'] = $db->getOne("select region_name from ". $ecs->table('region') ." where region_id='$supplier[district]' ");
		}

		//佣金操作日志
		$sql = "select * from ".$ecs->table('supplier_rent_log')." where rebateid=".$rebate['rebate_id']." and type=".REBATE_LOG_LIST." order by logid desc";
		$logs = array();
		$query = $db->query($sql);
		while($row = $db->fetchRow($query)){
			$row['addtime_dec'] = local_date('Y-m-d H:i', $row['addtime']);
			$logs[$row['logid']] = $row;
		}

		$smarty->assign('logs',   $logs);
	}

	$smarty->assign('rebate', $rebate);
	$smarty->assign('supplier', $supplier);

	assign_query_info();
    $smarty->display('supplier_rent_view.htm');
}
/*------------------------------------------------------ */
//-- 发起结算操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act']=='update')
{
    /* 检查权限 */
    admin_priv('rebate_manage'); 

   /* 提交值 */
   $rebate_id =  intval($_POST['id']);
   if (($rebate = rebateHave($rebate_id)) === false)
    {
          sys_msg('该返佣记录不存在！');
    }
   $rebate = array(
		'status'	=> 3
   );

	/* 保存返佣信息 */
	$db->autoExecute($ecs->table('supplier_rent'), $rebate, 'UPDATE', "rebate_id = '" . $rebate_id . "'");

	//修改佣金信息状态记录
		$rebate_list = array(
				'rebateid' => $rebate_id,
				'username' => '入驻方:'.$_SESSION['supplier_name'],
				'type' => REBATE_LOG_LIST,
				'typedec' => '确认通过',
				'contents' => '佣金状态由等待审核变等待平台付款',
				'addtime' => gmtime()
		);
		$db->autoExecute($ecs->table('supplier_rent_log'), $rebate_list, 'INSERT');
	 /* 清除缓存 */
	clear_cache_files();

	/* 提示信息 */
	$links[] = array('href' => 'supplier_rent.php?act=list' , 'text' => '返回本期佣金列表');
	sys_msg('恭喜，处理成功！', 0, $links);    

}

/*------------------------------------------------------ */
//-- 取消结算操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act']=='cancel')
{
	 /* 检查权限 */
    admin_priv('rebate_manage');
	$rebate_id =  intval($_POST['id']);
   if (($rebate = rebateHave($rebate_id)) === false)
    {
          sys_msg('该返佣记录不存在！');
    }

	$rebate = array(
		'remark'   => '',
		'rebate_all'   => 0.00,
		'rebate_money'   => 0.00,
		'status'	=> 1
   );

	/* 保存返佣信息 */
	$db->autoExecute($ecs->table('supplier_rent'), $rebate, 'UPDATE', "rebate_id = '" . $rebate_id . "'");

	//修改佣金信息状态记录
		$rebate_list = array(
				'rebateid' => $rebate_id,
				'username' => '平台方:'.$_SESSION['user_name'],
				'type' => REBATE_LOG_LIST,
				'typedec' => '取消发起结算',
				'contents' => '佣金状态由等待审核变可结算',
				'addtime' => gmtime()
		);
		$db->autoExecute($ecs->table('supplier_rent_log'), $rebate_list, 'INSERT');
	 /* 清除缓存 */
	clear_cache_files();

	/* 提示信息 */
	$links[] = array('href' => 'supplier_rent.php?act=list' , 'text' => '返回本期佣金列表');
	sys_msg('恭喜，处理成功！', 0, $links);    

}


/**
 *  获取供应商列表信息
 *
 * @access  public
 * @param
 *
 * @return void
 */
function rent_list()
{
    $result = get_filter();
    if ($result === false)
    {
        $aiax = isset($_GET['is_ajax']) ? $_GET['is_ajax'] : 0;

        /* 过滤信息 */
                
                
        $where = " where 1";
        $rent_start_time = !empty($_REQUEST['rent_start_time']) ? strtotime($_REQUEST['rent_start_time']) : 0;
        $rent_end_time = !empty($_REQUEST['rent_end_time']) ? strtotime($_REQUEST['rent_end_time']) : 0;
        
        if($rent_start_time){
            $where .=" and rent_start_time>=".$rent_start_time;
        }
        if($rent_end_time){
            $where .=" and rent_end_time<=".$rent_end_time;         
        }

        if($_SESSION['supplier_id']){
            $where .=" and supplier_id = ".$_SESSION['supplier_id'];       
        }

        /* 分页大小 */
        $filter['page'] = empty($_REQUEST['page']) || (intval($_REQUEST['page']) <= 0) ? 1 : intval($_REQUEST['page']);

        if (isset($_REQUEST['page_size']) && intval($_REQUEST['page_size']) > 0)
        {
            $filter['page_size'] = intval($_REQUEST['page_size']);
        }
        elseif (isset($_COOKIE['ECSCP']['page_size']) && intval($_COOKIE['ECSCP']['page_size']) > 0)
        {
            $filter['page_size'] = intval($_COOKIE['ECSCP']['page_size']);
        }
        else
        {
            $filter['page_size'] = 15;
        }

        /* 记录总数 */
        $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('supplier_rent'). $where;
        $filter['record_count']   = $GLOBALS['db']->getOne($sql);
        $filter['page_count']     = $filter['record_count'] > 0 ? ceil($filter['record_count'] / $filter['page_size']) : 1;

        /* 查询 */
        $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('supplier_rent'). $where.
                " LIMIT " . ($filter['page'] - 1) * $filter['page_size'] . ", " . $filter['page_size'] . " ";

        set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }
    
    $list=array();
    $res = $GLOBALS['db']->query($sql);
    while ($row = $GLOBALS['db']->fetchRow($res)){
        $list[]=$row;
    }
  
    $arr = array('result' => $list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}

?>