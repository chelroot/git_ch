<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 15:26:38
         compiled from "/home/it/web/wa-apps/photos/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:70301690556ee96fe749df8-21578193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31910d99e96684f05c95812984c5f415aa310f3d' => 
    array (
      0 => '/home/it/web/wa-apps/photos/templates/actions/backend/BackendLoc.html',
      1 => 1341921912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70301690556ee96fe749df8-21578193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ee96fe79caf4_28237342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ee96fe79caf4_28237342')) {function content_56ee96fe79caf4_28237342($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>