<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 17:52:27
         compiled from "7394e8cf2ad9448f477796e52060eef9ad4ca297" */ ?>
<?php /*%%SmartyHeaderCode:73696550256ec162b047984-70629189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7394e8cf2ad9448f477796e52060eef9ad4ca297' => 
    array (
      0 => '7394e8cf2ad9448f477796e52060eef9ad4ca297',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '73696550256ec162b047984-70629189',
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
  'unifunc' => 'content_56ec162b0f4860_66408670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ec162b0f4860_66408670')) {function content_56ec162b0f4860_66408670($_smarty_tpl) {?><div id="main-website-sections">
  <div class="container">
    <div class="menu-slogan">
      Часто задаваемые вопросы
    </div>
    <ul class="menu-buttons closed">
        <?php $_smarty_tpl->tpl_vars['mainurl'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages('infopages'), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainurl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['a']->value['infopage'])&&isset($_smarty_tpl->tpl_vars['a']->value['childs'])){?>
            <?php  $_smarty_tpl->tpl_vars['amain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['amain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['amain']->key => $_smarty_tpl->tpl_vars['amain']->value){
$_smarty_tpl->tpl_vars['amain']->_loop = true;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['amain']->value['url']==$_smarty_tpl->tpl_vars['wa']->value->currentUrl()){?> class="selected"<?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['amain']->value['url'];?>
">
                <div class="menu-block">
                  <?php if (!empty($_smarty_tpl->tpl_vars['amain']->value['img'])){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['amain']->value['img'];?>
" />
                  <?php }?>
                  <div class="menu-title">
                    <span><?php echo $_smarty_tpl->tpl_vars['amain']->value['name'];?>
</span>
                  </div>
                </div>
              </a>
            </li>
            <?php } ?>
            <?php }else{ ?>
            <?php continue 1?>
            <?php }?>
        <?php } ?>
    </ul>
    <div class="show-all-menu">
    <a href="#">Показать все</a>
    </div>
  </div>
</div>
<div class="clear-both"></div><?php }} ?>