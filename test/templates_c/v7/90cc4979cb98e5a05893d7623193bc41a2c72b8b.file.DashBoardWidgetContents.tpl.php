<?php /* Smarty version Smarty-3.1.7, created on 2019-06-17 09:36:55
         compiled from "/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9728196185d075f37c77316-96279421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90cc4979cb98e5a05893d7623193bc41a2c72b8b' => 
    array (
      0 => '/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/DashBoardWidgetContents.tpl',
      1 => 1560717990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9728196185d075f37c77316-96279421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'YAXIS_FIELD_TYPE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d075f37c82f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d075f37c82f5')) {function content_5d075f37c82f5($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['DATA']->value)>0){?><input class="widgetData" type=hidden value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><input class="yAxisFieldType" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['YAXIS_FIELD_TYPE']->value;?>
" /><div class="row" style="margin:0px 10px;"><div class="col-lg-11"><div class="widgetChartContainer" name='chartcontent' style="height:220px;min-width:300px; margin: 0 auto"></div><br></div><div class="col-lg-1"></div></div><?php }else{ ?><span class="noDataMsg"><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>
</span><?php }?><?php }} ?>