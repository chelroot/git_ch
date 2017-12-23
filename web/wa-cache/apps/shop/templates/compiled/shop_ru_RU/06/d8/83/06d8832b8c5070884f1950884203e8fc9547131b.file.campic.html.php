<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 17:24:38
         compiled from "/home/it/web/wa-apps/shop/plugins/campic/templates/actions/frontend/campic.html" */ ?>
<?php /*%%SmartyHeaderCode:177937364456ebe841397505-48248769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06d8832b8c5070884f1950884203e8fc9547131b' => 
    array (
      0 => '/home/it/web/wa-apps/shop/plugins/campic/templates/actions/frontend/campic.html',
      1 => 1458306818,
      2 => 'file',
    ),
    '16ed6eba204ab8c4d78e1c795e0a7507c44a3838' => 
    array (
      0 => '/home/it/web/wa-apps/shop/plugins/campic/templates/actions/frontend/cams.html',
      1 => 1458311077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177937364456ebe841397505-48248769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebe8414fc3d5_21380229',
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'server' => 0,
    'shop_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebe8414fc3d5_21380229')) {function content_56ebe8414fc3d5_21380229($_smarty_tpl) {?><div class="my">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
plugins/campic/css/campic.css?<?php echo time();?>
">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
plugins/campic/js/campic.js?<?php echo time();?>
"></script>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount',true);?>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->myNav('menu-h bottom-padded');?>


<h2>Мои камеры видеонаблюдения</h2>
<p class="campic-head-hint">Это полная таблица ваших камер видеонаблюдения. Здесь вы можете добавлять или удалять камеры.</p>

<div id="campic_cams" class="campic_table_m"  style="border: 2px solid #006bc3; border-radius: 5px; margin-top: 10px; width: 90%">
    <?php /*  Call merged included template "./cams.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./cams.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '177937364456ebe841397505-48248769');
content_56ec0fa6c7db38_14565959($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./cams.html" */?>
</div>
<p style="margin-top: 20px;">
    <a href="javascript:void(0);" class="button blue" onclick="$.Campic.addcam();">Добавить камеру</a>
    <a href="javascript:void(0);" class="button blue" onclick="$.Campic.getcams();">Обновить камеры из <?php echo $_smarty_tpl->tpl_vars['server']->value;?>
</a>
</p>
<style>
/*#campic_cams tr a[href^="http"]{ position: relative; }*/
/*.popup { background: #fff none repeat scroll 0 0; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3); display: block; height: 175px; overflow: hidden; position: absolute; width: 240px; z-index: 1; }*/
/*.popup img{ max-width: 100%; }*/
</style>
<script>
    // $(document).ready(function() {
    //   $('#campic_cams tr a[href^="http"]').hover(function() {
    //       var self = $(this);
    //       var url = self.attr("href");
    //       var popup = self.after('<div class="popup"><img src='+url+' /></div>');
    //   }, function() {
    //       $('.popup').hide().remove();
    //   });
    //   return false;
    // });
    $.Campic.shop_url = '<?php echo $_smarty_tpl->tpl_vars['shop_url']->value;?>
';
    $.Campic.local = {
        shure: 'Вы уверены?'
    };
</script>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 17:24:38
         compiled from "/home/it/web/wa-apps/shop/plugins/campic/templates/actions/frontend/cams.html" */ ?>
<?php if ($_valid && !is_callable('content_56ec0fa6c7db38_14565959')) {function content_56ec0fa6c7db38_14565959($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['cams']->value)){?>
    Нет камер видеонаблюдения
<?php }else{ ?>
    <table class="camera-custom">
        <tr>


            <th width="20%" class="img">Камеры<i class="hint-icon"></i><span class="hidden-cams-hint">Изображения с камер наблюдения. Нажмите обновить чтобы получить самую актуальную фотографию с камер. Пока камера не подключена выводится изображение-заглушка.</span></th>
            <th width="25%" class="settings">Настройки<i class="hint-icon"></i><span class="hidden-cams-hint">Вы можете распечатать эти данные и передать их мастеру по установке камер. Этих данных достаточно.</span></th>
            
            <th width="20%" class="url">Ссылки для сайта<i class="hint-icon"></i><span class="hidden-cams-hint">Эта данные вы можете распечатать и передать администратору сайта для размещения изображений на вашем сайте. Этих данных достаточно.</span></th>
            <th width="20%" class="download">Скачать<i class="hint-icon"></i><span class="hidden-cams-hint">Эти данные вы можете распечатать и использовать, если пожелаете сохранять архивы с камер на вашем компьютере.</span></th>
            <th width="10%" class="delete">Удалить<i class="hint-icon"></i><span class="hidden-cams-hint">Удаление камеры.</span></th>
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
                <td width="20%" class="img">
                    <img width="240" src="<?php if ($_smarty_tpl->tpl_vars['cam']->value['strategy']==1){?><?php echo $_smarty_tpl->tpl_vars['cam']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
.jpg<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cam']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
/<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
.jpg<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['cam']->value['cam_num'])){?> alt="<?php echo $_smarty_tpl->tpl_vars['cam']->value['cam_num'];?>
"<?php }?>>
                    <a href="javascript:void(0);" class="refresh-btn" onclick="$.Campic.getcams();">Обновить</a>
                </td>
                <td width="25%" class="settings">
                    Сервер FTP: <?php echo $_smarty_tpl->tpl_vars['cam']->value['host'];?>
<br>
                    Пользователь: <?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
<br>
                    Пароль: <?php echo $_smarty_tpl->tpl_vars['cam']->value['password'];?>

                </td>
                
                <td width="20%" class="url">
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
                <td width="20%" class="download">
                    <a href="ftp://<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
:<?php echo $_smarty_tpl->tpl_vars['cam']->value['password'];?>
@<?php echo $_smarty_tpl->tpl_vars['cam']->value['host'];?>
" target="_blank">ftp://<?php echo $_smarty_tpl->tpl_vars['cam']->value['user'];?>
:<?php echo $_smarty_tpl->tpl_vars['cam']->value['password'];?>
@<?php echo $_smarty_tpl->tpl_vars['cam']->value['host'];?>
</a>
                </td>
                <td width="10%" class="delete">
                    <a href="javascript:void(0);" onclick="$.Campic.deletecam(<?php echo $_smarty_tpl->tpl_vars['cam']->value['id'];?>
);"><i class="delete"></i></a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <style>
            table img{
                max-width: 100%;
            }
    </style>
<?php }?><?php }} ?>