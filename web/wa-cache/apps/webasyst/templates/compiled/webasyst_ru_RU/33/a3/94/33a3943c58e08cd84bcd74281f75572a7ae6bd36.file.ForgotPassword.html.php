<?php /* Smarty version Smarty-3.1.14, created on 2016-03-21 15:11:39
         compiled from "/home/it/web/wa-system/webasyst/templates/actions/forgot/ForgotPassword.html" */ ?>
<?php /*%%SmartyHeaderCode:20949181856efe4fbcfc755-22378249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33a3943c58e08cd84bcd74281f75572a7ae6bd36' => 
    array (
      0 => '/home/it/web/wa-system/webasyst/templates/actions/forgot/ForgotPassword.html',
      1 => 1452519811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20949181856efe4fbcfc755-22378249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'set_password' => 0,
    'login' => 0,
    'error' => 0,
    'sent' => 0,
    'options' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56efe4fbdc5d72_05867599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56efe4fbdc5d72_05867599')) {function content_56efe4fbdc5d72_05867599($_smarty_tpl) {?><form method="post" action="">
<div class="block">
<?php if (!empty($_smarty_tpl->tpl_vars['set_password']->value)){?>
    <h1 style="font-size:1.8em">Восстановление пароля для <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h1>
    <div class="fields form">
        <div class="field">
            <div class="name">
                Новый пароль:
            </div>
            <div class="value">
                <input type="password" class="wa-login-text-input<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?> error<?php }?>" name="password" />
            </div>
        </div>
        <div class="field">
            <div class="name">
                Подтвердите пароль:
            </div>
            <div class="value">
                <input type="password" class="wa-login-text-input<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?> error<?php }?>" name="password_confirm" />
                <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?><em class="errormsg"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>
</em><?php }?>
            </div>
        </div>
        <div class="field">
            <div class="value submit">
                <input type="submit" value="Сохранить и войти" class="button" id="wa-login-submit">
            </div>
        </div>
    </div>
<?php }else{ ?>
    <h1 style="font-weight:bold;text-align:left;font-size:1.8em;margin-top:0">Восстановление пароля</h1>
    <?php if (!empty($_smarty_tpl->tpl_vars['sent']->value)){?>
    <p>Инструкции по восстановлению пароля были отправлены на ваш электронный адрес.</p>
    <br /><br />
    <a href="?">Вернуться на страницу входа</a>
    <?php }else{ ?>
    <?php if ($_smarty_tpl->tpl_vars['options']->value['login']=='email'){?>
    Пожалуйста, введите ваш email:
    <?php }else{ ?>
    Пожалуйста, введите ваш логин или email:
    <?php }?>
    <div class="field">
        <input style="width: 50%" id="wa-login-input" type="text" class="large<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?> error<?php }?>" name="login" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->request('login'), ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
    <p class="i-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php }?>
    <div<?php if (empty($_smarty_tpl->tpl_vars['error']->value)){?> style="margin-top:20px"<?php }?>>
    <input type="submit" value="Отправить" class="button green" />
    или
    <a href="?">отмена</a>
    </div>
    <?php }?>
<?php }?>
</div>
</form><?php }} ?>