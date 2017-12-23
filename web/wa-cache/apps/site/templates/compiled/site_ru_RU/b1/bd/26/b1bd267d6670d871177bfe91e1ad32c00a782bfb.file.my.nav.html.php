<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 14:36:14
         compiled from "/home/it/web/wa-apps/site/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:23064059556ebe82e075848-82349992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1bd267d6670d871177bfe91e1ad32c00a782bfb' => 
    array (
      0 => '/home/it/web/wa-apps/site/themes/default/my.nav.html',
      1 => 1409652561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23064059556ebe82e075848-82349992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebe82e0927c7_26998165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebe82e0927c7_26998165')) {function content_56ebe82e0927c7_26998165($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>