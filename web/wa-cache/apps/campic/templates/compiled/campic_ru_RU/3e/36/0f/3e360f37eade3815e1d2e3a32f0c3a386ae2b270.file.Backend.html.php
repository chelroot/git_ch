<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 15:28:06
         compiled from "/home/it/web/wa-apps/campic/templates/actions/backend/Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:199255237956ee97566cfab8-53385569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e360f37eade3815e1d2e3a32f0c3a386ae2b270' => 
    array (
      0 => '/home/it/web/wa-apps/campic/templates/actions/backend/Backend.html',
      1 => 1448705943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199255237956ee97566cfab8-53385569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ee975676d3e2_00648170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ee975676d3e2_00648170')) {function content_56ee975676d3e2_00648170($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/campic.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" type="text/css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/campic.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>


</head>
<body>
    <div id="wa">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

        <div id="wa-app">
            <div class="sidebar left200px">
                <div class="block">
                    <ul class="menu-v with-icons">
                         <li class="selected">
                             <a href="#" class="bold"><i class="icon16 smiley"></i>Главная</a>
                         </li>
                    </ul>
                </div>
                <div class="block">
                    <h5 class="heading top-padded"><b>Навигация</b></h5>
                    <ul class="menu-v with-icons collapsible">
                         <li id="s-link-servers" class="menu-li">
                             <a href="#/servers/" onclick="$.wa.campic.serversAction()"><i class="icon16 folders"></i>Серверы FTP</a>
                         </li>
                         <li id="s-link-settings" class="menu-li">
                             <a href="#/settings/" onclick="$.wa.campic.settingsAction()"><i class="icon16 settings"></i>Настройки</a>
                         </li>
                    </ul>
                </div>
            </div>
            <div class="content left200px">
                <div id="content">
                    <div class="block">
                        <h1>Главная вкладка</h1>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $.wa.campic.init({
                static_url: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
",
                wa_url: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"
            });
            var wa_url = "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
";
        </script>
    </div>
</body>
</html><?php }} ?>