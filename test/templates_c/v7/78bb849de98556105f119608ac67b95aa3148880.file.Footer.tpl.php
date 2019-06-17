<?php /* Smarty version Smarty-3.1.7, created on 2019-06-17 09:36:48
         compiled from "/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20241313145d075f30b19920-68515473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78bb849de98556105f119608ac67b95aa3148880' => 
    array (
      0 => '/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl',
      1 => 1560717990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20241313145d075f30b19920-68515473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VTIGER_VERSION' => 0,
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d075f30b22af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d075f30b22af')) {function content_5d075f30b22af($_smarty_tpl) {?>

<footer class="app-footer">
	<p>
		Powered by vtiger CRM - <?php echo $_smarty_tpl->tpl_vars['VTIGER_VERSION']->value;?>
&nbsp;&nbsp;© 2004 - <?php echo date('Y');?>
&nbsp;&nbsp;
		<a href="//www.vtiger.com" target="_blank">Vtiger</a>&nbsp;|&nbsp;
		<a href="https://www.vtiger.com/privacy-policy" target="_blank">Privacy Policy</a>
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>