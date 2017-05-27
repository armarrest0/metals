<?php

/**
 * 管理中心 租金管理
 * $Author: yangsong
 * 
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'includes/lib_rebate.php');
require_once(ROOT_PATH . 'includes/lib_order.php');
//require(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/supplier.php');
$smarty->assign('lang', $_LANG);


/*------------------------------------------------------ */
//-- 返佣列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
   
    $result = rent_list();

    /* 模板赋值 */

    $smarty->assign('ur_here', "租金待结"); // 当前导航

    $smarty->assign('full_page',        1); // 翻页参数

 
    $smarty->assign('filter',       $result['filter']);
    $smarty->assign('record_count', $result['record_count']);
    $smarty->assign('page_count',   $result['page_count']);
    $smarty->assign('sort_suppliers_id', '<img src="images/sort_desc.gif">');
  
    
     foreach($result['result'] as $k=>$val){
            $supplier = $db->getRow("select * from ".$ecs->table('supplier')." where supplier_id=".$val['supplier_id']);
            $result['result'][$k]['supplier_name'] = $supplier['supplier_name'];         
            $result['result'][$k]['rent_start_time'] = date("Y-m-d",$val['rent_start_time']);
            $result['result'][$k]['rent_end_time'] = date("Y-m-d",$val['rent_end_time']);
        }
    
    
   $smarty->assign('supplier_list',    $result['result']);
    /* 显示模板 */
    assign_query_info();
    $smarty->display('supplier_rent_list.htm');
}

/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{

    $result = rent_list();

    foreach($result['result'] as $k=>$val){
        $supplier = $db->getRow("select * from ".$ecs->table('supplier')." where supplier_id=".$val['supplier_id']);
        $result['result'][$k]['supplier_name'] = $supplier['supplier_name'];         
        $result['result'][$k]['rent_start_time'] = date("Y-m-d",$val['rent_start_time']);
        $result['result'][$k]['rent_end_time'] = date("Y-m-d",$val['rent_end_time']);
    }
    
    $smarty->assign('supplier_list',    $result['result']);
    $smarty->assign('filter',       $result['filter']);
    $smarty->assign('record_count', $result['record_count']);
    $smarty->assign('page_count',   $result['page_count']);

    /* 排序标记 */
    $sort_flag  = sort_flag($result['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('supplier_rent_list.htm'), '',
        array('filter' => $result['filter'], 'page_count' => $result['page_count']));
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