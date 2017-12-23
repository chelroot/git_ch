<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 14:36:14
         compiled from "/home/it/web/wa-apps/site/templates/actions/personal/PersonalApp.html" */ ?>
<?php /*%%SmartyHeaderCode:153640142156ebe82e677910-89785211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30a85fe93d75c92e5b8c6b53244c4b8a0679a1a4' => 
    array (
      0 => '/home/it/web/wa-apps/site/templates/actions/personal/PersonalApp.html',
      1 => 1409652574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153640142156ebe82e677910-89785211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'app' => 0,
    'settled' => 0,
    'enabled' => 0,
    'personal_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebe82e719458_34756683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebe82e719458_34756683')) {function content_56ebe82e719458_34756683($_smarty_tpl) {?><h1>
    <?php echo implode(', ',$_smarty_tpl->tpl_vars['items']->value);?>

    <span class="hint"><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</span>
</h1>

<?php if (!$_smarty_tpl->tpl_vars['settled']->value){?>

    <p><i class="icon10 no-bw top-padded"></i> Это приложение нельзя включить в личном кабинете, так как приложение не подключено в правилах маршрутизации сайта. Добавьте правило маршрутизации для этого приложения в настройках структуры сайта, после чего вы сможете включить его в личном кабинете.</p>
    <a class="button" href="#/routing/">Настроить маршрутизацию</a>

<?php }else{ ?>

    <div class="s-ibutton-checkbox">
        <ul class="menu-h">
            <li><span id="s-personal-app-disabled-label" class="gray">Выключена</span></li>
            <li>
                <input type="checkbox" id="s-personal-app-status" class="ibutton" <?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>checked<?php }?>>
            </li>
            <li><span id="s-personal-app-enabled-label">Включена</span></li>
        </ul>
    </div>
    
    <br>
    
    <div id="s-app-enabled" <?php if (!$_smarty_tpl->tpl_vars['enabled']->value){?>style="display:none"<?php }?>>
        <p><i class="icon10 status-green top-padded"></i> <?php echo sprintf('«%s» в личном кабинете: <a id="s-app-frontend-link" href="%s" target="_blank">%s</a> <i class="icon10 new-window top-padded"></i>',$_smarty_tpl->tpl_vars['app']->value['name'],'','');?>
</p>
        <?php echo ifset($_smarty_tpl->tpl_vars['personal_settings']->value);?>

    </div>
    
    <div id="s-app-disabled" <?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>style="display:none"<?php }?>>
        <p class="red"><em><i class="icon10 no top-padded"></i> <?php echo sprintf('Личный кабинет приложения «%s» выключен на этом сайте.',$_smarty_tpl->tpl_vars['app']->value['name']);?>
</em></p>
    </div>
    
    <script type="text/javascript">
        $(function () {
            $("#s-personal-app-status").iButton({
                labelOn: "",
                labelOff: "",
                classContainer: 'ibutton-container mini'
            });
            var status_check = function(item) {
                if ($(item).is(':checked')) {
                    $('#s-personal-app-disabled-label').addClass('gray');
                    $('#s-personal-app-enabled-label').removeClass('gray');
                } else {
                    $('#s-personal-app-disabled-label').removeClass('gray');
                    $('#s-personal-app-enabled-label').addClass('gray');
                }
            };
            status_check($('#s-personal-app-status'));
            $('#s-personal-app-status').change(function(){
                status_check(this);
                var enabled = $(this).is(':checked') ? 1 : 0;
                var app_id = "<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
";
                $.post('?module=personal&action=appEnable', { app_id: app_id, enable: enabled}, function () {
                    var li = $('#s-personal-app-' + app_id);
                    if (enabled) {
                        $('#s-app-disabled').hide();
                        $('#s-app-enabled').show();
    
                        li.appendTo('#apps-enabled');
                        li.find('a').removeClass('s-disabled');
                        li.find('.s-onoff').find('.status').removeClass('no').addClass('status-green');
                        li.find('.s-onoff').prepend('<i class="icon16 sort">');
                        if (li.data('auth-app')) {
                            $('#s-personal-profile-link a.s-disabled').removeClass("s-disabled");
                            $('#s-personal-profile-link a i.no').removeClass('no').addClass('status-green');
                        }
                    } else {
                        $('#s-app-enabled').hide();
                        $('#s-app-disabled').show();
                        li.appendTo('#apps-disabled');
                        li.find('a').addClass('s-disabled');
                        li.find('.s-onoff').find('.status').removeClass('status-green').addClass('no');
                        li.find('.s-onoff .sort').remove();
                        if (li.data('auth-app')) {
                            $('#s-personal-profile-link a').addClass("s-disabled");
                            $('#s-personal-profile-link a i.status-green').addClass('no').removeClass('status-green');
                        }
                    }
                }, "json");
            });
        });
    </script>

<?php }?><?php }} ?>