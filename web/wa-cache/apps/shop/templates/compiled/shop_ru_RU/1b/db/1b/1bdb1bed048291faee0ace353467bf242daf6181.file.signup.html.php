<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 15:51:31
         compiled from "/home/it/web/wa-data/public/site/themes/site_camera/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:54027798956ebf9d3a7acf1-94445190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bdb1bed048291faee0ace353467bf242daf6181' => 
    array (
      0 => '/home/it/web/wa-data/public/site/themes/site_camera/signup.html',
      1 => 1458228890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54027798956ebf9d3a7acf1-94445190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmed_email' => 0,
    'contact' => 0,
    'email_confirmation_hash' => 0,
    'wa' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebf9d3afa390_62606014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebf9d3afa390_62606014')) {function content_56ebf9d3afa390_62606014($_smarty_tpl) {?><style>
    #under-header { display: none; }
</style>
<div id="page" role="main" class="wa-signup-form">

    <?php if (!empty($_smarty_tpl->tpl_vars['confirmed_email']->value)){?>

        <h1>Спасибо!</h1>
        <p>Вы успешно подтвердили ваш email-адрес.</p>

    <?php }elseif(!empty($_smarty_tpl->tpl_vars['contact']->value)){?>

        <h1>Спасибо!</h1>
        <p>Вы успешно зарегистрировались.</p>

        <?php if (!empty($_smarty_tpl->tpl_vars['email_confirmation_hash']->value)){?>
            <p><em>Ссылка на подтверждение регистрации была отправлена вам по электронной почте. Пожалуйста, щелкните по этой ссылке, чтобы подтвердить регистрацию и авторизоваться на сайте.</em></p>
        <?php }?>

    <?php }else{ ?>

        <h1>Регистрация</h1>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->authAdapters();?>

        <?php echo $_smarty_tpl->tpl_vars['wa']->value->signupForm($_smarty_tpl->tpl_vars['errors']->value);?>


    <?php }?>

</div>
<script>
  $(function() {
    $('.wa-auth-adapters > p').text('Авторизуйтесь воспользовавшись перечисленными выше сервисами или указав свои контактные данные');
  });
</script><?php }} ?>