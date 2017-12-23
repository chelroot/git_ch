<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 15:37:17
         compiled from "/home/it/web/wa-data/public/site/themes/site_camera/error.html" */ ?>
<?php /*%%SmartyHeaderCode:114892933256ebf67d59ff36-04612732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '429fea5bd08d63be6050990e3011830c438ab80f' => 
    array (
      0 => '/home/it/web/wa-data/public/site/themes/site_camera/error.html',
      1 => 1455621954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114892933256ebf67d59ff36-04612732',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebf67d603505_24006317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebf67d603505_24006317')) {function content_56ebf67d603505_24006317($_smarty_tpl) {?><div class="content">
  <div id="page" role="main">
    <h1>
    	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
    	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
    </h1>
    Запрашиваемый ресурс недоступен.
  </div>
</div>
<?php }} ?>