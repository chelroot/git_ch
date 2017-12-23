<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 20:52:47
         compiled from "/home/it/web/wa-apps/campic/templates/actions/servers/Servers_page.html" */ ?>
<?php /*%%SmartyHeaderCode:189278370256eee36fdbd628-38665124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09612e24662920affe70fcf979b9059d03ab2d60' => 
    array (
      0 => '/home/it/web/wa-apps/campic/templates/actions/servers/Servers_page.html',
      1 => 1448651682,
      2 => 'file',
    ),
    '870f7a3178b0d9e245b82366c24c64fe01c3792c' => 
    array (
      0 => '/home/it/web/wa-apps/campic/templates/actions/servers/Ftp_servers.html',
      1 => 1449791666,
      2 => 'file',
    ),
    '967a8cadb736871a8a1a03b21833e340fcc12106' => 
    array (
      0 => '/home/it/web/wa-apps/campic/templates/actions/servers/Ftp_servers_form.html',
      1 => 1449791502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189278370256eee36fdbd628-38665124',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56eee3700474a3_38605924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eee3700474a3_38605924')) {function content_56eee3700474a3_38605924($_smarty_tpl) {?><div class="block">
    <h1>Серверы</h1>
    <div id="campic_servers_container">
        <?php /*  Call merged included template "./Ftp_servers.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Ftp_servers.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '189278370256eee36fdbd628-38665124');
content_56eee36fe0b703_92222476($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Ftp_servers.html" */?>
    </div>
    <div id="campic_servers_form_container"  style="margin-top: 20px;">
        <?php /*  Call merged included template "./Ftp_servers_form.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Ftp_servers_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '189278370256eee36fdbd628-38665124');
content_56eee36fe8d7f2_23265978($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Ftp_servers_form.html" */?>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 20:52:47
         compiled from "/home/it/web/wa-apps/campic/templates/actions/servers/Ftp_servers.html" */ ?>
<?php if ($_valid && !is_callable('content_56eee36fe0b703_92222476')) {function content_56eee36fe0b703_92222476($_smarty_tpl) {?><table class="zebra">
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
</table><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 20:52:47
         compiled from "/home/it/web/wa-apps/campic/templates/actions/servers/Ftp_servers_form.html" */ ?>
<?php if ($_valid && !is_callable('content_56eee36fe8d7f2_23265978')) {function content_56eee36fe8d7f2_23265978($_smarty_tpl) {?><p>
    <?php if ($_smarty_tpl->tpl_vars['edit']->value==0){?>
        Добавить новый сервер
    <?php }else{ ?>
        Редактировать сервер (<?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
)
    <?php }?>
</p>

<form id="campic_servers_form" action="javascript:void(0);" method="post" onsubmit="$.wa.campic.saveServer(this)">
    <div class="field-group">
        <div class="field">
            <div class="name">Имя сервера</div>
            <div class="value">
                <input type="text" name="servers[name]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                <br />
                <span class="hint">
                    Имя сервера нужно только для нашего удобства. Здесь можно писать все, что угодно.
                </span>
            </div>
        </div>
        <div class="field">
            <div class="name">FTP server type</div>
            <div class="value">
                <select name="servers[ftp_type]">
                    <option value="proftpd" <?php if (isset($_smarty_tpl->tpl_vars['server']->value['ftp_type'])&&$_smarty_tpl->tpl_vars['server']->value['ftp_type']==='proftpd'){?>selected="selected"<?php }?>>proftpd</option>
                    <option value="vsftp" <?php if (isset($_smarty_tpl->tpl_vars['server']->value['ftp_type'])&&$_smarty_tpl->tpl_vars['server']->value['ftp_type']==='vsftp'){?>selected="selected"<?php }?>>vsftp</option>
                </select>
                <br />
                <span class="hint">
                    Select the type of FTP server.
                </span>
            </div>
        </div>
        <div class="field">
            <div class="name">Адрес сервера</div>
            <div class="value">
                <input type="text" name="servers[url]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['url'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                <br />
                <span class="hint">
                    Это адрес, которому соответствует домашняя папка, в которой находятся пользовательские файлы. Адрес всегда должен заканчиваться символом /
                </span>
            </div>
        </div>
        <div class="field">
            <div class="name">Путь на сервере</div>
            <div class="value">
                <input type="text" name="servers[path]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['path'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value['path'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                <br />
                <span class="hint">
                    Путь корневой папки фтп сервера.  Путь всегда должен заканчиваться символом /
                </span>
            </div>
        </div>
        <div class="field">
            <div class="name">Server host</div>
            <div class="value">
                <input type="text" name="servers[host]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['host'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value['host'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>localhost<?php }?>"/>
            </div>
        </div>
        <div class="field">
            <div class="name">Server port</div>
            <div class="value">
                <input type="text" name="servers[port]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['port'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value['port'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>3306<?php }?>" />
            </div>
        </div>
        <div class="field">
            <div class="name">User</div>
            <div class="value">
                <input type="text" name="servers[user]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['user'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value['user'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
            </div>
        </div>
        <div class="field">
            <div class="name">Password</div>
            <div class="value">
                <input type="text" name="servers[password]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['password'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value['password'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
            </div>
        </div>
        <div class="field">
            <div class="name">Database</div>
            <div class="value">
                <input type="text" name="servers[db]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['db'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value['db'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
            </div>
        </div>
        <div class="field">
            <div class="name">Тип</div>
            <div class="value">
                <input type="text" name="servers[type]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['type'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value['type'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>mysqli<?php }?>" />
            </div>
        </div>
        <div class="field">
            <div class="name">Стратегия</div>
            <div class="value">
                <select name="servers[strategy]">
                    <option value="1" <?php if (isset($_smarty_tpl->tpl_vars['server']->value['strategy'])&&$_smarty_tpl->tpl_vars['server']->value['strategy']==1){?>selected="selected"<?php }?>>Стратегия 1</option>
                    <option value="2" <?php if (isset($_smarty_tpl->tpl_vars['server']->value['strategy'])&&$_smarty_tpl->tpl_vars['server']->value['strategy']==2){?>selected="selected"<?php }?>>Стратегия 2</option>
                </select>
                <br />
                <span class="hint">
                    Стратегия 1:<br>Все изображения находятся в одной папке. Url изображения камеры в таком случае выглядит примерно так: http://78.29.17.198/vova3-3.jpg<br><br>Стратегия 2:<br>Каждая камера находится в своей домашней папке. Url изображения камеры в таком случае выглядит примерно так: http://78.29.17.198/vova3-3/vova3-3.jpg
                </span>
            </div>
        </div>
        <div class="field">
            <input type="hidden" name="servers[id]" value="<?php if (isset($_smarty_tpl->tpl_vars['server']->value['id'])){?><?php echo intval($_smarty_tpl->tpl_vars['server']->value['id']);?>
<?php }else{ ?>0<?php }?>">
            <button id="campic_servers_form_savebutton" class="button">Сохранить</button>
        </div>
    </div>
</form><?php }} ?>