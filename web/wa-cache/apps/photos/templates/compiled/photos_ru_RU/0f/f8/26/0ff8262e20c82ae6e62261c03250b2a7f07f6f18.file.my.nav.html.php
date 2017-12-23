<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 14:36:14
         compiled from "/home/it/web/wa-apps/photos/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:184371666156ebe82e0f63b5-34454403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ff8262e20c82ae6e62261c03250b2a7f07f6f18' => 
    array (
      0 => '/home/it/web/wa-apps/photos/themes/default/my.nav.html',
      1 => 1409656343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184371666156ebe82e0f63b5-34454403',
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
  'unifunc' => 'content_56ebe82e1127e1_73614549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebe82e1127e1_73614549')) {function content_56ebe82e1127e1_73614549($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="photos <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/my');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>