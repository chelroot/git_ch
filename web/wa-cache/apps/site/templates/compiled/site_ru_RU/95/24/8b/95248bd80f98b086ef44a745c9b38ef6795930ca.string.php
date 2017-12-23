<?php /* Smarty version Smarty-3.1.14, created on 2016-03-24 22:29:14
         compiled from "95248bd80f98b086ef44a745c9b38ef6795930ca" */ ?>
<?php /*%%SmartyHeaderCode:98609889256f4400a26d649-60544374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95248bd80f98b086ef44a745c9b38ef6795930ca' => 
    array (
      0 => '95248bd80f98b086ef44a745c9b38ef6795930ca',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '98609889256f4400a26d649-60544374',
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
  'unifunc' => 'content_56f4400a314512_67499601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4400a314512_67499601')) {function content_56f4400a314512_67499601($_smarty_tpl) {?><div id="main-website-sections">
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
      if ($('.faq-instructions-buttons li.active').length) { 
        $('.faq-instructions-buttons li.active').removeClass('active')
        $(this).addClass('active');
        return false;
      };
      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        return false;
      };
    });
  });
</script><?php }} ?>