<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 20:52:45
         compiled from "/home/it/web/wa-apps/campic/templates/actions/settings/Settings_page.html" */ ?>
<?php /*%%SmartyHeaderCode:188669350156eee36d732714-21873776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c342b055205abdd7f7a99aa60357b2bb75b02092' => 
    array (
      0 => '/home/it/web/wa-apps/campic/templates/actions/settings/Settings_page.html',
      1 => 1448743880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188669350156eee36d732714-21873776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56eee36d79d709_14064156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eee36d79d709_14064156')) {function content_56eee36d79d709_14064156($_smarty_tpl) {?><div class="block">
    <h1>Настройки</h1>
    <form id="campic_settings_form" action="javascript:void(0);" method="post" onsubmit="$.wa.campic.saveSettings(this)">
        <div class="block fields">
            <div class="field-group">
                <div class="field">
                    <div class="name">Помойка</div>
                    <div class="value">
                        <select name="settings[dump]">
                            <option value="0" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['dump'])&&$_smarty_tpl->tpl_vars['settings']->value['dump']==0){?>selected="selected"<?php }?>>Помойка выключена</option>
                            <option value="1" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['dump'])&&$_smarty_tpl->tpl_vars['settings']->value['dump']==1){?>selected="selected"<?php }?>>Помойка включена</option>
                        </select>
                        <br />
                <span class="hint">
                    Если помойка включена, то все файлы со всех камер валятся в одну кучу. Домашние папки не будут созданы.
                </span>
                    </div>
                </div>
                <div class="field">
                    <button id="campic_settings_form_savebutton" class="button">Сохранить</button>
                </div>
            </div>
        </div>
    </form>
</div><?php }} ?>