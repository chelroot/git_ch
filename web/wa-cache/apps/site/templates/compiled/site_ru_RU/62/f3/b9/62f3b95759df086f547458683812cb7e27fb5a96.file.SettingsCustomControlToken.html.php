<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 15:41:51
         compiled from "/home/it/web/wa-apps/site/plugins/campic/templates/SettingsCustomControlToken.html" */ ?>
<?php /*%%SmartyHeaderCode:183470609256ebf78ff0ed69-33315975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f3b95759df086f547458683812cb7e27fb5a96' => 
    array (
      0 => '/home/it/web/wa-apps/site/plugins/campic/templates/SettingsCustomControlToken.html',
      1 => 1450125887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183470609256ebf78ff0ed69-33315975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'redirect_uri' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebf79001d7b2_39687683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebf79001d7b2_39687683')) {function content_56ebf79001d7b2_39687683($_smarty_tpl) {?><p>
    Для получения токена пройдите простую регистрацию на  <a href="http://site.camera/signup/" target="_blank">http://site.camera/</a>
</p>

<div id="campic_gettoken_link">
    <p>
        <a href="http://site.camera/api.php/auth?client_id=site.camera&client_name=campic&response_type=code&scope=campic&redirect_uri=<?php echo $_smarty_tpl->tpl_vars['redirect_uri']->value;?>
">Получить токен</a>
    </p>
    <p>
        <input style="width: 60% !important;" readonly="readonly" size="32" type="text" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" class="input" name="site_campic[token]" id="campic_site_campic_token">
    </p>
</div>
<?php }} ?>