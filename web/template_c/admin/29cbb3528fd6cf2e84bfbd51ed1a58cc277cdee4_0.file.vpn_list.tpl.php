<?php /* Smarty version 3.1.27, created on 2016-12-31 19:46:04
         compiled from "/opt/freesvr/web/htdocs/freesvr/audit/dep10/template/admin/vpn_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:148502505058679a7ca03450_16780789%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29cbb3528fd6cf2e84bfbd51ed1a58cc277cdee4' => 
    array (
      0 => '/opt/freesvr/web/htdocs/freesvr/audit/dep10/template/admin/vpn_list.tpl',
      1 => 1474793223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148502505058679a7ca03450_16780789',
  'variables' => 
  array (
    'template_root' => 0,
    'routes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58679a7ca47746_34360436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58679a7ca47746_34360436')) {
function content_58679a7ca47746_34360436 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '148502505058679a7ca03450_16780789';
?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>路由列表</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/all_purpose_style.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
a {
    color: #003499;
    text-decoration: none;
} 
a:hover {
    color: #000000;
    text-decoration: underline;
}
</style>
<body>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>

	<li class="me_a"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_eth&action=vpn_list">VPN -策略</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an3.jpg" align="absmiddle"/></li>
</ul>
</div></td></tr>
  <tr>
	<td class=""><table bordercolor="white" cellspacing="1" cellpadding="5" border="0" width="100%" class="BBtable">
		<tr bgcolor="#F3F8FC">
			<th class="list_bg"  width="5%" align="center" bgcolor="#E0EDF8"><b>选择</b></th>
			<th class="list_bg"  width="25%" align="center" bgcolor="#E0EDF8"><b>来源地址段</b></th>
			<th class="list_bg"  width="25%" align="center" bgcolor="#E0EDF8"><b>目标地址段</b></th>
			<th class="list_bg"  width="25%" align="center" bgcolor="#E0EDF8"><b>映射IP</b></th>
			<th class="list_bg"  width="" align="center" bgcolor="#E0EDF8"><b>操作</b></th>
		</tr>		
		<form name="ip_list" action="admin.php?controller=admin_eth&action=vpn_delete" method="post">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['routes']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
		<tr <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['t']['index']%2 == 0) {?>bgcolor="f7f7f7"<?php }?>>
			<td width="10%"><input type="checkbox" name="chk_gid[]" value="<?php echo $_smarty_tpl->tpl_vars['routes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['p_addr'];?>
"></td>
			<td ><?php echo $_smarty_tpl->tpl_vars['routes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['s_addr'];?>
</td>
			<td ><?php echo $_smarty_tpl->tpl_vars['routes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['d_addr'];?>
</td>
			<td ><?php echo $_smarty_tpl->tpl_vars['routes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['p_addr'];?>
</td>
			<td  align="left"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/edit_ico.gif" width="16" height="16" align="absmiddle"><a href="admin.php?controller=admin_eth&action=vpn_edit&p_addr=<?php echo $_smarty_tpl->tpl_vars['routes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['p_addr'];?>
">编辑</a>
				| <img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/cross.png" width="16" height="16" hspace="5" border="0" align="absmiddle"><a href="admin.php?controller=admin_eth&action=vpn_delete&p_addr=<?php echo urlencode($_smarty_tpl->tpl_vars['routes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['p_addr']);?>
">删除</a></td>
		</tr>
		<?php endfor; endif; ?>
                <tr>           
      <td colspan="5" ><input name="select_all" type="checkbox" onclick="javascript:for(var i=0;i<this.form.elements.length;i++){var e=this.form.elements[i];if(e.name=='chk_gid[]')e.checked=this.form.select_all.checked;}" value="checkbox">选中本页显示的所有项目&nbsp;&nbsp;<input type="submit"  value="删除选中" onclick="my_confirm('删除所选IP');if(chk_form()) document.ip_list.action='admin.php?controller=admin_eth&action=vpn_delete'; else return false;" class="an_02">&nbsp;&nbsp;&nbsp;&nbsp;<input  type="button" onclick="window.location='admin.php?controller=admin_eth&action=vpn_edit'" value=" 增加 " class="an_02"></td>
     
		</tr>
		</form>
		</table>
	</td>
  </tr>
</table>

<?php echo '<script'; ?>
 language="javascript">

function my_confirm(str){
	if(!confirm(str + "？"))
	{
		window.event.returnValue = false;
	}
}

<?php echo '</script'; ?>
>
</body>
<iframe name="hide" height="0" frameborder="0" scrolling="no"></iframe>
</html>



<?php }
}
?>