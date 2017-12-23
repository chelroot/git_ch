<?php /* Smarty version Smarty-3.1.14, created on 2016-03-26 12:42:40
         compiled from "/home/it/web/wa-apps/shop/templates/actions/customers/Customers.html" */ ?>
<?php /*%%SmartyHeaderCode:146798671456f65990a5bf27-00542744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21b97ce9718f5b3647c5eecec48398c9972dfc64' => 
    array (
      0 => '/home/it/web/wa-apps/shop/templates/actions/customers/Customers.html',
      1 => 1427265713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146798671456f65990a5bf27-00542744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56f65990aca5a6_14818460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f65990aca5a6_14818460')) {function content_56f65990aca5a6_14818460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_action')) include '/home/it/web/wa-system/vendors/smarty-plugins/function.wa_action.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/customers.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<div class="sidebar left200px s-inner-sidebar" id="s-sidebar">
    <?php echo smarty_function_wa_action(array('app'=>"shop",'module'=>"customers",'action'=>"sidebar"),$_smarty_tpl);?>

</div>

<div class="content left200px blank" id="s-content">
    <div class="block triple-padded"><i class="icon16 loading"></i>Загрузка...</div>
</div>

<script>$(function() { "use strict";
    $.customers.init();
});</script>

<?php }} ?>