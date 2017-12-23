<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 20:02:40
         compiled from "/home/it/web/wa-data/public/site/themes/site_camera/login.html" */ ?>
<?php /*%%SmartyHeaderCode:47723482956ebf9f9b222a6-76022594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca328509e1fefc39b7838ce62f3e0eb41fe5d78' => 
    array (
      0 => '/home/it/web/wa-data/public/site/themes/site_camera/login.html',
      1 => 1458314333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47723482956ebf9f9b222a6-76022594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebf9f9b854e6_49011244',
  'variables' => 
  array (
    'wa' => 0,
    'error' => 0,
    'without_form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebf9f9b854e6_49011244')) {function content_56ebf9f9b854e6_49011244($_smarty_tpl) {?><style>
	#under-header { display: none; }
</style>
<div id="page" class="login-page" role="main">
    <h1>Логин</h1>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->authAdapters();?>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->loginForm($_smarty_tpl->tpl_vars['error']->value,empty($_smarty_tpl->tpl_vars['without_form']->value));?>

</div>
<script>
  $(function() {
    $('.wa-auth-adapters > p').text('Авторизуйтесь воспользовавшись перечисленными выше сервисами или указав свои контактные данные');
  });
</script><?php }} ?>