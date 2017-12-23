<?php /* Smarty version Smarty-3.1.14, created on 2016-03-24 22:19:25
         compiled from "298af600d66c4d67ed1907e1cb435a37784aa98b" */ ?>
<?php /*%%SmartyHeaderCode:155483207456f43dbdb326c3-44862148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '298af600d66c4d67ed1907e1cb435a37784aa98b' => 
    array (
      0 => '298af600d66c4d67ed1907e1cb435a37784aa98b',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '155483207456f43dbdb326c3-44862148',
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
  'unifunc' => 'content_56f43dbdbd87c4_89642789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f43dbdbd87c4_89642789')) {function content_56f43dbdbd87c4_89642789($_smarty_tpl) {?><div id="main-website-sections">
  <div class="container">
    <div class="menu-slogan">
      Часто задаваемые вопросы
    </div>
    <ul class="faq-instructions-buttons">
        <?php $_smarty_tpl->tpl_vars['mainurl'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainurl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['a']->value['infopage'])&&isset($_smarty_tpl->tpl_vars['a']->value['childs'])&&!$_smarty_tpl->tpl_vars['a']->value['mainmenu']){?>
            <?php  $_smarty_tpl->tpl_vars['amain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['amain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['amain']->key => $_smarty_tpl->tpl_vars['amain']->value){
$_smarty_tpl->tpl_vars['amain']->_loop = true;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['amain']->value['url']==$_smarty_tpl->tpl_vars['wa']->value->currentUrl()){?> class="selected"<?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['amain']->value['url'];?>
">
                <div class="menu-block">
                  <div class="menu-title">
                    <span class="menu-title-icon"></span><span> <?php echo $_smarty_tpl->tpl_vars['amain']->value['name'];?>
</span>
                  </div>
                  <div class="hidden-content">
                    <span class="please-wait"><span class="please-wait-icon"></span> Пожалуйста подождите...</span>
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
  </div>
</div>
<div class="clear-both"></div>
<script>
  $(function() {
    $('.faq-instructions-buttons li').click(function(){
      if ($('.faq-instructions-buttons li.active').length) { $('.faq-instructions-buttons li.active').removeClass('active') };
      $(this).addClass('active');
      return false;
    });
  });
</script><?php }} ?>