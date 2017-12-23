<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 15:28:11
         compiled from "/home/it/web/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:184814766656ee975b3e2889-07965112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbaeccfd42f579fbb5292458a2e1458dab887777' => 
    array (
      0 => '/home/it/web/wa-apps/shop/templates/actions/backend/BackendLoc.html',
      1 => 1360765463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184814766656ee975b3e2889-07965112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ee975b433329_37570779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ee975b433329_37570779')) {function content_56ee975b433329_37570779($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>