<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 15:10:07
         compiled from "/home/it/web/wa-data/public/site/themes/site_camera/content.html" */ ?>
<?php /*%%SmartyHeaderCode:58474764556ebf01f551354-11118924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d9b667902a936fa0c6fb5b6f108d913210b2247' => 
    array (
      0 => '/home/it/web/wa-data/public/site/themes/site_camera/content.html',
      1 => 1455621954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58474764556ebf01f551354-11118924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_url' => 0,
    'error_code' => 0,
    'wa_backend_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebf01f57ddc6_36720928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebf01f57ddc6_36720928')) {function content_56ebf01f57ddc6_36720928($_smarty_tpl) {?><div class="content">
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value&&!empty($_smarty_tpl->tpl_vars['error_code']->value)&&$_smarty_tpl->tpl_vars['error_code']->value==404){?>
        <div class="welcome">
            <h1>Добро пожаловать на ваш новый сайт!</h1>
            <p><?php echo sprintf('Начните с <a href="%s">создания страницы</a> в бекенде сайта.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('site/#/pages/'));?>
</p>
        </div>
    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>
</div><?php }} ?>