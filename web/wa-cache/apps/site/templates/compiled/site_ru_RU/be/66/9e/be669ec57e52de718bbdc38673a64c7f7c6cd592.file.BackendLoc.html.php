<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 14:36:12
         compiled from "/home/it/web/wa-apps/site/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:177033837156ebe82c0b7911-26936404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be669ec57e52de718bbdc38673a64c7f7c6cd592' => 
    array (
      0 => '/home/it/web/wa-apps/site/templates/actions/backend/BackendLoc.html',
      1 => 1336140648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177033837156ebe82c0b7911-26936404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebe82c106dc0_30345676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebe82c106dc0_30345676')) {function content_56ebe82c106dc0_30345676($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>