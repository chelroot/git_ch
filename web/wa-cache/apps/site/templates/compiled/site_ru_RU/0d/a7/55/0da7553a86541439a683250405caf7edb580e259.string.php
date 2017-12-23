<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 17:50:03
         compiled from "0da7553a86541439a683250405caf7edb580e259" */ ?>
<?php /*%%SmartyHeaderCode:97601331356ec159b772da9-89331803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da7553a86541439a683250405caf7edb580e259' => 
    array (
      0 => '0da7553a86541439a683250405caf7edb580e259',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '97601331356ec159b772da9-89331803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'mainurl' => 0,
    'a' => 0,
    'amain' => 0,
    'wa_theme_url' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ec159b842b37_11895987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ec159b842b37_11895987')) {function content_56ec159b842b37_11895987($_smarty_tpl) {?>
<div id="main-website-sections">
  <div class="container">
    <div class="menu-slogan">
      Примеры работы камер
    </div>
    <ul class="menu-buttons closed">
        <?php $_smarty_tpl->tpl_vars['mainurl'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainurl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['a']->value['mainmenu']&&isset($_smarty_tpl->tpl_vars['a']->value['childs'])){?>
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
<div class="clear-both"></div>


<div id="camera-connection">
  <div class="container">
    <div class="connections-title">
      Подключить камеру легко
    </div>
    <ul class="connection-steps">
      <li class="step step_act">
        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/connection-step-one.png">
        <a href="#">Получаете ссылку для сайта <br> и настройки для камеры</a>
      </li>
      <li class="step step_arrow">
        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/connection-step-arrow.png">
      </li>
      <li class="step step_act">
        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/connection-step-two.png">
        <a href="#">Размещаете ссылку на сайте<br> как обычное фото</a>
      </li>
      <li class="step step_arrow">
        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/connection-step-arrow.png">
      </li>
      <li class="step step_act">
        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/connection-step-three.png">
        <a href="#">Настраиваете камеру</a>
      </li>
    </ul>
  </div>
</div>
<div class="clear-both"></div>


<div id="description">
  <div class="container">
  <div class="container-left">
      <p>В отличии от видеопотока пересылаются снимки, отдельными файлами и с учетом загрузки каналов связи.</p>
      <p>Современные камеры подключаются к интернет напрямую и передают файлы через облако. А сайт уже беспрепятственно массово раздает страницы, в обработанном виде, с хорошим качеством и с автоматическим обновлением.</p>
      <p class="bold">Хорошее дополнение к онлайн-консультантам, интернет продажам и другим приложениям.</p>
    </div><div class="container-right"> 
      
      <div class="request-form" id="middleform">
        <div class="submit-wrapper">
          <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
shop/signup/" class="submit-middle">Бесплатно <span class="submit-text-fix">подключить камеру</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clear-both"></div>



<?php }} ?>