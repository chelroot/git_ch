<?php /* Smarty version Smarty-3.1.14, created on 2016-03-19 21:43:38
         compiled from "/home/it/web/wa-data/public/site/themes/site_camera/forgotpassword.html" */ ?>
<?php /*%%SmartyHeaderCode:138921028456ed9ddad9b373-09895606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b72cdfd85f07614c4dd33ae05ee035a6234325' => 
    array (
      0 => '/home/it/web/wa-data/public/site/themes/site_camera/forgotpassword.html',
      1 => 1456398954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138921028456ed9ddad9b373-09895606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'set_password' => 0,
    'login' => 0,
    'error' => 0,
    'wa' => 0,
    'sent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ed9ddae209a5_22023764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ed9ddae209a5_22023764')) {function content_56ed9ddae209a5_22023764($_smarty_tpl) {?><style>
    #under-header { display: none; }
</style>
<div id="page" role="main" class="forgotpass-page">
    <?php if (!empty($_smarty_tpl->tpl_vars['set_password']->value)){?>
        <h1>Восстановление пароля для <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h1>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->setPasswordForm($_smarty_tpl->tpl_vars['error']->value);?>

    <?php }else{ ?>
        <h1>Восстановление пароля</h1>
        <?php if (!empty($_smarty_tpl->tpl_vars['sent']->value)){?>
            <p>Инструкции по восстановлению пароля были отправлены на ваш электронный адрес.</p>
            <br /><br />
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Вернуться на страницу входа</a>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->forgotPasswordForm($_smarty_tpl->tpl_vars['error']->value);?>

        <?php }?>
    <?php }?>
</div>
<?php }} ?>