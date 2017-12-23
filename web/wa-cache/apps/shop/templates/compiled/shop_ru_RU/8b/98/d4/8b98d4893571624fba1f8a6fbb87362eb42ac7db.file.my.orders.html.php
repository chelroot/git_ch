<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 15:52:19
         compiled from "/home/it/web/wa-data/public/shop/themes/site_camera/my.orders.html" */ ?>
<?php /*%%SmartyHeaderCode:201099866056ebfa03980744-22034729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b98d4893571624fba1f8a6fbb87362eb42ac7db' => 
    array (
      0 => '/home/it/web/wa-data/public/shop/themes/site_camera/my.orders.html',
      1 => 1456499294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201099866056ebfa03980744-22034729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'orders' => 0,
    'o' => 0,
    'i' => 0,
    'frontend_my_orders' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebfa03a67605_66196310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebfa03a67605_66196310')) {function content_56ebfa03a67605_66196310($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/home/it/web/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><div class="my">
<?php echo $_smarty_tpl->tpl_vars['wa']->value->myNav('menu-h bottom-padded');?>


<h1>Мои заказы</h1>

<table class="table">
<?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
    <tr id="order-<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
">
        <td class="nowrap">
            <a href="<?php echo $_smarty_tpl->tpl_vars['o']->value['url'];?>
" class="bold">
                <?php echo $_smarty_tpl->tpl_vars['o']->value['id_str'];?>

            </a>
        </td>
        <td class="nowrap">
            <span class="nowrap order-status" style="<?php echo $_smarty_tpl->tpl_vars['o']->value['state']->getStyle(1);?>
">
                <?php echo $_smarty_tpl->tpl_vars['o']->value['state']->getName();?>

            </span>
        </td>
        <td>
            <?php if (!empty($_smarty_tpl->tpl_vars['o']->value['items'])){?>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['o']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <span class="gray">x <?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>
</span><br />
                <?php } ?>
            <?php }?>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['o']->value['shipping_name']){?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['shipping_name'], ENT_QUOTES, 'UTF-8', true);?>

            <?php }else{ ?>
                &nbsp;
            <?php }?>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['o']->value['payment_name']){?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['payment_name'], ENT_QUOTES, 'UTF-8', true);?>

            <?php }else{ ?>
                &nbsp;
            <?php }?>
        </td>
        <td>
            <span class="gray"><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['o']->value['create_datetime'],'humandate');?>
</span>
        </td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['o']->_loop) {
?>
	<tr class="no-border">
        <td>Ваша история заказов пуста.</td>
  	</tr>
<?php } ?>
</table>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount',true);?>


<!-- plugin hook: 'frontend_my_orders' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_my_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
</div><?php }} ?>