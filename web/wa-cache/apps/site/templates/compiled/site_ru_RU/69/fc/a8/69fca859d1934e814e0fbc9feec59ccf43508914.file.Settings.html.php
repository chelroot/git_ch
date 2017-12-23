<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 15:41:52
         compiled from "/home/it/web/wa-system/plugin/templates/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:206000574656ebf7900f3098-02269017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fca859d1934e814e0fbc9feec59ccf43508914' => 
    array (
      0 => '/home/it/web/wa-system/plugin/templates/Settings.html',
      1 => 1452519810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206000574656ebf7900f3098-02269017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin_id' => 0,
    'settings_controls' => 0,
    'plugin_info' => 0,
    'wa' => 0,
    'control' => 0,
    'plugins_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebf79013fd26_69753581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebf79013fd26_69753581')) {function content_56ebf79013fd26_69753581($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['plugin_id']->value)){?>
<?php if (!empty($_smarty_tpl->tpl_vars['settings_controls']->value)){?>
<h1><?php echo $_smarty_tpl->tpl_vars['plugin_info']->value['name'];?>
</h1>
<div class="fields form">
    <form action="?module=plugins&id=<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
&action=save" method="post" id="plugins-settings-form" enctype="multipart/form-data" target="plugins-settings-iframe">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        <?php  $_smarty_tpl->tpl_vars['control'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['control']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings_controls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['control']->key => $_smarty_tpl->tpl_vars['control']->value){
$_smarty_tpl->tpl_vars['control']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['control']->key;
?>
        <div class="field">
            <?php echo $_smarty_tpl->tpl_vars['control']->value;?>

        </div>
        <?php } ?>

        <div class="field">
            <div class="value submit">
                <input type="submit" class="button green" value="Сохранить">
                <span id="plugins-settings-form-status" style="display:none"><!-- message placeholder --></span>
            </div>
        </div>

    </form>
    <iframe style="display:none" name="plugins-settings-iframe" id="plugins-settings-iframe"></iframe>
</div>
<?php }else{ ?>
<div class="block double-padded align-center gray">
    <p>
        <strong><?php echo sprintf('Плагин «%s» установлен и работает.',(($tmp = @$_smarty_tpl->tpl_vars['plugin_info']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['plugin_id']->value : $tmp));?>
</strong>
        <br>
        <br>
        Этот плагин не предоставляет возможность изменения настроек.
    </p>

</div>

<?php }?>
<?php }elseif(($_smarty_tpl->tpl_vars['plugins_count']->value>0)){?>
    Неизвестный плагин
<?php }?>

<div class="clear-left"></div>
<?php }} ?>