<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 20:52:57
         compiled from "/home/it/web/wa-apps/campic/templates/actions/servers/Ftp_servers.html" */ ?>
<?php /*%%SmartyHeaderCode:33287756eee3794e6668-70178880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '870f7a3178b0d9e245b82366c24c64fe01c3792c' => 
    array (
      0 => '/home/it/web/wa-apps/campic/templates/actions/servers/Ftp_servers.html',
      1 => 1449791666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33287756eee3794e6668-70178880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'servers' => 0,
    'server' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56eee3795a94f9_63053797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eee3795a94f9_63053797')) {function content_56eee3795a94f9_63053797($_smarty_tpl) {?><table class="zebra">
    <tr>
        <th width="8%">ID</th>
        <th width="10%">Имя</th>
        <th width="10%">FTP Type</th>
        <th width="15%">Адрес</th>
        <th width="10%">Путь</th>
        <th width="7%">Host</th>
        <th width="4%">Port</th>
        <th width="5%">User</th>
        <th width="10%">Password</th>
        <th width="5%">Database</th>
        <th width="5%">Тип</th>
        <th width="5%">Стратегия</th>
        <th width="2%">Загружен</th>
        <th width="2%">Ред.</th>
        <th width="2%">Удалить</th>
    </tr>
    <?php if (empty($_smarty_tpl->tpl_vars['servers']->value)){?>
        <tr>
            <td colspan="14">
                Нет ни одного сервера. Добавьте хотя бы один.
            </td>
        </tr>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['server'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['server']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['server']->key => $_smarty_tpl->tpl_vars['server']->value){
$_smarty_tpl->tpl_vars['server']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['ftp_type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['url'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['path'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['host'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['port'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['user'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['password'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['db'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['server']->value['strategy'];?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['server']->value['busy']==0){?>
                    <a href="javascript:void(0);" onclick="$.wa.campic.busyServer(<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
)">
                        <i class="icon16 status-green"></i>
                    </a>
                <?php }else{ ?>
                    <a href="javascript:void(0);" onclick="$.wa.campic.busyServer(<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
)">
                        <i class="icon16 status-red"></i>
                    </a>
                <?php }?>
            </td>
            <td><a href="javascript:void(0);" onclick="$.wa.campic.editServer(<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
)"><i class="icon16 edit"></i></a</td>
            <td><a href="javascript:void(0);" onclick="$.wa.campic.deleteServer(<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
)"><i class="icon16 delete"></i></a></td>
        </tr>
    <?php } ?>
</table><?php }} ?>