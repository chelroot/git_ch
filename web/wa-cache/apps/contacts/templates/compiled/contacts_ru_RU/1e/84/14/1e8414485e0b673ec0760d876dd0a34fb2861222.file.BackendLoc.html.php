<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 15:55:10
         compiled from "/home/it/web/wa-apps/contacts/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:73142625156ebfaaebe6db8-98572727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e8414485e0b673ec0760d876dd0a34fb2861222' => 
    array (
      0 => '/home/it/web/wa-apps/contacts/templates/actions/backend/BackendLoc.html',
      1 => 1409656720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73142625156ebfaaebe6db8-98572727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebfaaec30e80_16393037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebfaaec30e80_16393037')) {function content_56ebfaaec30e80_16393037($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
);<?php }} ?>