<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 14:36:33
         compiled from "/home/it/web/wa-data/public/site/themes/site_camera/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:191450143856ebe841538dc8-99351429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1983f4025da69630188d0b3b0510ce2b85a87cfd' => 
    array (
      0 => '/home/it/web/wa-data/public/site/themes/site_camera/my.nav.html',
      1 => 1456406804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191450143856ebe841538dc8-99351429',
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
  'unifunc' => 'content_56ebe841555447_43867311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebe841555447_43867311')) {function content_56ebe841555447_43867311($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>