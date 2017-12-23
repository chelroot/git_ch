<?php /* Smarty version Smarty-3.1.14, created on 2016-04-03 15:34:42
         compiled from "2de26d41940e2e764a146c87263b1a7451a21acd" */ ?>
<?php /*%%SmartyHeaderCode:31636674457010de29447b6-92828090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2de26d41940e2e764a146c87263b1a7451a21acd' => 
    array (
      0 => '2de26d41940e2e764a146c87263b1a7451a21acd',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '31636674457010de29447b6-92828090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'mainurl' => 0,
    'a' => 0,
    'amain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57010de29e3404_16654375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57010de29e3404_16654375')) {function content_57010de29e3404_16654375($_smarty_tpl) {?><div id="main-website-sections">
  <div class="container">
    <div class="menu-slogan">
      Купить настроенную камеру
    </div>
    <ul class="faq-instructions-buttons">
        <?php $_smarty_tpl->tpl_vars['mainurl'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainurl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['a']->value['buycam'])&&isset($_smarty_tpl->tpl_vars['a']->value['childs'])&&!$_smarty_tpl->tpl_vars['a']->value['mainmenu']&&!$_smarty_tpl->tpl_vars['a']->value['infopage']&&!$_smarty_tpl->tpl_vars['a']->value['instructions']){?>
            <?php  $_smarty_tpl->tpl_vars['amain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['amain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['amain']->key => $_smarty_tpl->tpl_vars['amain']->value){
$_smarty_tpl->tpl_vars['amain']->_loop = true;
?>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['amain']->value['url'];?>
">
                  <div class="menu-title">
                    <span class="menu-title-icon"></span><span> <?php echo $_smarty_tpl->tpl_vars['amain']->value['name'];?>
</span>
                  </div>
              </a>
                  <div class="hidden-content">
                    <span class="please-wait"><span class="please-wait-icon"></span> Пожалуйста подождите...</span>
                  </div>
            </li>
            <?php } ?>
            <?php }else{ ?>
            <?php continue 1?>
            <?php }?>
        <?php } ?>
    </ul>
  </div>
</div>
<div class="clear-both"></div><?php }} ?>