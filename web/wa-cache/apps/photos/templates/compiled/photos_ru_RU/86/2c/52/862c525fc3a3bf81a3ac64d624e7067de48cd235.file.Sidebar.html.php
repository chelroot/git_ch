<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 15:26:38
         compiled from "/home/it/web/wa-apps/photos/templates/layouts/Sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:165267336256ee96fe3c0c28-06724120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '862c525fc3a3bf81a3ac64d624e7067de48cd235' => 
    array (
      0 => '/home/it/web/wa-apps/photos/templates/layouts/Sidebar.html',
      1 => 1419597248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165267336256ee96fe3c0c28-06724120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar_width' => 0,
    'rights' => 0,
    'top_level_albums_count' => 0,
    'count' => 0,
    'rated_count' => 0,
    'app_albums' => 0,
    'item' => 0,
    'backend_sidebar' => 0,
    'plugin_id' => 0,
    'i' => 0,
    'item_menu' => 0,
    'albums_count' => 0,
    'albums' => 0,
    'cloud' => 0,
    'wa' => 0,
    'template_content' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ee96fe5381d1_06804018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ee96fe5381d1_06804018')) {function content_56ee96fe5381d1_06804018($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/it/web/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><div class="sidebar left<?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
px" id="p-sidebar">

  <div class="block">
    <ul class="menu-v with-icons">
      <?php if ($_smarty_tpl->tpl_vars['rights']->value['upload']){?>
      <li class="bold bottom-padded">
        <a href="?module=upload" id="p-upload-link"><i class="icon16 upload"></i>Загрузить фотографии</a>
      </li>
      <?php }?>
      <li id="sidebar-all-albums">
        <span class="count" id="count"><?php if ($_smarty_tpl->tpl_vars['top_level_albums_count']->value>0){?><?php echo $_smarty_tpl->tpl_vars['top_level_albums_count']->value;?>
<?php }?></span>
        <a href="#/albums/">
          <i class="icon16 apps"></i>Альбомы
        </a>
      </li>
      <li id="sidebar-all-photos">
        <span class="count" id="count"><?php if ($_smarty_tpl->tpl_vars['count']->value>0){?><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
<?php }?></span>
        <a href="#/">
          <i class="icon16 pictures"></i>Фотопоток
        </a>
      </li>
      <li id="sidebar-rated">
        <span class="count" id="rated-count"><?php if ($_smarty_tpl->tpl_vars['rated_count']->value>0){?><?php echo $_smarty_tpl->tpl_vars['rated_count']->value;?>
<?php }?></span>
        <a href="#/search/rate>0/">
          <i class="icon16 star"></i>Избранное
        </a>
      </li>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app_albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li>
            <span class="count"><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</span>
            <a href="#/app/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <img class="p-app16x16icon-menu-v" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

            </a>
        </li>
      <?php } ?>      
      
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['menu'])){?>
            <?php if (is_array($_smarty_tpl->tpl_vars['item']->value['menu'])){?>
                <?php  $_smarty_tpl->tpl_vars['item_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_menu']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_menu']->key => $_smarty_tpl->tpl_vars['item_menu']->value){
$_smarty_tpl->tpl_vars['item_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item_menu']->key;
?>
                    <li id="sidebar-<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item_menu']->value;?>
</li>
                <?php } ?>
            <?php }else{ ?>
                <li id="sidebar-<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
</li>
            <?php }?>
        <?php }?>
      <?php } ?>
    </ul>
  </div>

  <!-- collections -->
  <div class="block p-drop" id="album-list-container">
    <?php if ($_smarty_tpl->tpl_vars['rights']->value['upload']){?>
        <span class="count">
          <a href="#" id="p-new-album" class="p-new-album"><i class="icon16 add" title="Новый альбом"></i></a>
        </span>
    <?php }?>
    <span class="count subtree never-recount" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['albums_count']->value;?>
</span>
    <h5 class="heading collapse-handler" id="album-list-handler">
      <i class="icon16 darr"></i><a href="javascript:void(0);">Альбомы</a>
    </h5>
    <div class="hierarchical" id="album-list">
      <?php echo $_smarty_tpl->tpl_vars['albums']->value;?>

      <div class="block p-empty-album-list" <?php if ($_smarty_tpl->tpl_vars['albums']->value){?>style="display: none;"<?php }?>>
        <p class="hint align-center">Создайте новый альбом с помощью зеленой иконки выше.</p>
      </div>
    </div>
  </div>
  <div class="block" <?php if (!isset($_smarty_tpl->tpl_vars['cloud']->value)||empty($_smarty_tpl->tpl_vars['cloud']->value)){?>style="display:none;"<?php }?> id="tag-cloud-block">
    <h5 class="heading collapse-handler">
      <i class="icon16 darr"></i>Теги
    </h5>
    <div class="block tags p-plugin-tag-cloud collapsible-content" id="tag-cloud"></div>
  </div>

  
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['section'])){?>
    <div class="block" id="sidebar-section-<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['section'];?>
</div>
  <?php }?><?php } ?>

  <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->getRights($_smarty_tpl->tpl_vars['wa']->value->app(),'pages')||$_smarty_tpl->tpl_vars['wa']->value->user()->getRights($_smarty_tpl->tpl_vars['wa']->value->app(),'design')||$_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin('photos')){?>
    <div class="hr"></div>

    <!-- not-that-frequently-accessed app sections -->
    <div class="block">
      <ul class="menu-v with-icons">
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->getRights($_smarty_tpl->tpl_vars['wa']->value->app(),'pages')){?>
        <li id="sidebar-pages"><a href="#/pages/"><i class="icon16 notebook"></i>Страницы</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->getRights($_smarty_tpl->tpl_vars['wa']->value->app(),'design')){?>
        <li id="sidebar-design"><a href="#/design/"><i class="icon16 design"></i>Дизайн</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin('photos')){?>
            <li id="sidebar-settings" class="top-padded"><a href="#/settings/"><i class="icon16 settings"></i>Настройки</a></li>
            <li id="sidebar-plugins"><a href="#/plugins/"><i class="icon16 plugins"></i>Плагины</a></li>
        <?php }?>
      </ul>
    </div>
  <?php }?>

  <br><br><br>

  <!-- sidebar width control -->
  <div id="p-sidebar-width-control" class="block p-sidebar-width-control">
    <a href="#" class="arrow left">&larr;</a>
    <a href="#" class="arrow right">&rarr;</a>
  </div>

</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("template-album-list-item", null, null); ob_start(); ?>
  <li class="drag-newposition new-item"></li>
  <li class="dr {%#o.type == Album.TYPE_STATIC ? 'static' : 'dynamic'%}" rel="{%#o.id%}">
    <span class="count"></span>
    <a href="#/album/{%#o.id%}" class="new-item"><i class="icon16 {%#o.type == Album.TYPE_STATIC ? 'pictures' : 'funnel' %}"></i>{%#o.name%}
         {% if (o.status <= 0) { %}<i class="icon10 lock-bw no-overhanging"></i>{% } %}
         <strong class="small highlighted count-new"></strong>
    </a>
  </li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("template-tag-cloud", null, null); ob_start(); ?>
    {% for (var i = 0, n = o.cloud.length, tag = o.cloud[i]; i < n; tag = o.cloud[++i]) { %}
        <a href="#/tag/{%=tag.uri_name%}/" style="font-size: {%#tag.size%}%; opacity: {%#tag.opacity%}" data-id="{%#tag.id%}">{%=tag.name%}</a>
    {% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php  $_smarty_tpl->tpl_vars['template_content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template_content']->_loop = false;
 $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template_content']->key => $_smarty_tpl->tpl_vars['template_content']->value){
$_smarty_tpl->tpl_vars['template_content']->_loop = true;
 $_smarty_tpl->tpl_vars['template']->value = $_smarty_tpl->tpl_vars['template_content']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['template_content']->value&&(strpos($_smarty_tpl->tpl_vars['template']->value,'template-')===0)){?>
<script id="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" type="text/html">
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_content']->value,'</','<\/');?>

</script><?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['template']->value, null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php } ?>

<script type="text/javascript">
    $('#tag-cloud').html(tmpl('template-tag-cloud', {
        cloud: <?php echo json_encode($_smarty_tpl->tpl_vars['cloud']->value);?>

    }));
    $.photos_sidebar.init({
        width: <?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>

    });
</script><?php }} ?>