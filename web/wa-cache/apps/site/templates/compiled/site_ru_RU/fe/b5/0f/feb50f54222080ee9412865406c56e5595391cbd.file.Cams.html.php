<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 20:40:25
         compiled from "/home/it/web/wa-apps/site/plugins/campic/templates/Cams.html" */ ?>
<?php /*%%SmartyHeaderCode:154578387956eee08978d722-40448121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb50f54222080ee9412865406c56e5595391cbd' => 
    array (
      0 => '/home/it/web/wa-apps/site/plugins/campic/templates/Cams.html',
      1 => 1450083076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154578387956eee08978d722-40448121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cams' => 0,
    'cam' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56eee0898826b1_40063796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eee0898826b1_40063796')) {function content_56eee0898826b1_40063796($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['cams']->value)){?>
    Не добавлено ни одной камеры
<?php }else{ ?>
    <table class="zebra">
        <tr>
            <th width="10%">Номер</th>
            <th width="20%">Пользователь</th>
            <th width="20%">Пароль</th>
            <th width="25%">Адрес</th>
            <th width="20%">Ftp</th>
            <th width="5%">Удалить</th>
        </tr>

        <?php  $_smarty_tpl->tpl_vars['cam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cam']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cam']->key => $_smarty_tpl->tpl_vars['cam']->value){
$_smarty_tpl->tpl_vars['cam']->_loop = true;
?>
            <?php $_smarty_tpl->createLocalArrayVariable('cam', null, 0);
$_smarty_tpl->tpl_vars['cam']->value['host'] = parse_url($_smarty_tpl->tpl_vars['cam']->value['url']);?>
            <?php $_smarty_tpl->createLocalArrayVariable('cam', null, 0);
$_smarty_tpl->tpl_vars['cam']->value['host'] = $_smarty_tpl->tpl_vars['cam']->value['host']['host'];?>

            <tr>
                <td><?php if (isset($_smarty_tpl->tpl_vars['cam']->value['cam_num'])){?><?php echo $_smarty_tpl->tpl_vars['cam']->value['cam_num'];?>
<?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cam']->value['password'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['cam']->value['strategy']==1){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['cam']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
.jpg" target="_blank"><?php echo $_smarty_tpl->tpl_vars['cam']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
.jpg</a>
                    <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['cam']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
/<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
.jpg" target="_blank"><?php echo $_smarty_tpl->tpl_vars['cam']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
/<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
.jpg</a>
                    <?php }?>
                </td>
                <td>
                    <a href="ftp://<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
:<?php echo $_smarty_tpl->tpl_vars['cam']->value['password'];?>
@<?php echo $_smarty_tpl->tpl_vars['cam']->value['host'];?>
" target="_blank">ftp://<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
:<?php echo $_smarty_tpl->tpl_vars['cam']->value['password'];?>
@<?php echo $_smarty_tpl->tpl_vars['cam']->value['host'];?>
</a>
                </td>
                <td>
                    <a href="javascript:void(0);" onclick="$.Campic.deletecam(<?php echo $_smarty_tpl->tpl_vars['cam']->value['id'];?>
);"><i class="icon16 delete"></i></a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php }?><?php }} ?>