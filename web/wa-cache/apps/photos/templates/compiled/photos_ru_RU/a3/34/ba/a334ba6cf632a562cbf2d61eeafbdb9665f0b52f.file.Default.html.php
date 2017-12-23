<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 15:26:38
         compiled from "/home/it/web/wa-apps/photos/templates/layouts/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:1174737756ee96fe0ad0b0-49805602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a334ba6cf632a562cbf2d61eeafbdb9665f0b52f' => 
    array (
      0 => '/home/it/web/wa-apps/photos/templates/layouts/Default.html',
      1 => 1419597248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174737756ee96fe0ad0b0-49805602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
    'backend_assets' => 0,
    'item' => 0,
    'sidebar_width' => 0,
    'big_size' => 0,
    'backend_photo_toolbar' => 0,
    'menu_item' => 0,
    'popular_tags' => 0,
    'tag' => 0,
    'wa_backend_url' => 0,
    'template_content' => 0,
    'template' => 0,
    'content' => 0,
    'last_login_datetime' => 0,
    'rights' => 0,
    'upload_dialog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ee96fe348f95_46382499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ee96fe348f95_46382499')) {function content_56ee96fe348f95_46382499($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/home/it/web/wa-system/vendors/smarty-plugins/block.wa_js.php';
if (!is_callable('smarty_modifier_replace')) include '/home/it/web/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/photos.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
">
    <!--[if lte IE 9]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/photos.ie.css">
    <![endif]-->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tagsinput/jquery.tagsinput.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-autocomplete/jquery.autocomplete.css">

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/photos-jquery.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/photos-jquery.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.history.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.json.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.draggable.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.droppable.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tagsinput/jquery.tagsinput.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-autocomplete/jquery.autocomplete.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/sidebar.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/dragndrop.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tmpl.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/inline.editable.widget.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/active.menu.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/rate.widget.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/common.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/photo.stream.slider.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/photos.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/list.menu.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/photo.menu.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/loupe.widget.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery-fieldselection.min.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/photos-jquery.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <script type="text/javascript" src="?action=loc&amp;v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js(false);?>

    
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_assets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

    <?php } ?>
</head>
<body>

<script type="text/javascript">
    var wa_url = "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
";
</script>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo", null, null); ob_start(); ?>
        {% var  p = o.photo,
                stack = o.stack,
                albums = o.albums,
                frontend_link_template = o.frontend_link_template,
                hooks = o.hooks;
        %}
        <h1>
            <a href="#{%#o.hash%}/" class="p-back-to-list">{%#$_('← Back')%}</a>
            <span class="editable title" id="photo-name">{%#p.name%}</span>
            <input type="text" id="photo-name-input" class="p-photo-h1-edit" style="display:none;">
            <span class="p-rate">
                <a href="javascript: void(0);" title="Оценить" id="photo-rate" class="p-rate-photo" data-rate="{%#p.rate%}">
                    {%#$.photos.getRatingHtml(p.rate, 16, true)%}
                </a>
                <!-- plugin hook: "backend_photo.after_rate" -->
                {% if (hooks.backend_photo) { %}
                    {% for (var plugin in hooks.backend_photo) { %}
                        {%# hooks.backend_photo[plugin].after_rate %}
                    {% } %}
                {% } %}
                <!-- end plugin hook: "backend_photo.after_rate" -->
            </span>
        </h1>
        <div class="block half-padded float-right hint" id="photo-albums">
            {% include('template-photo-albums', { albums: albums }); %}
        </div>
        <ul class="menu-h p-content-control" id="photo-content-control">
            {% include('template-photo-content-control', { frontend_link_template: frontend_link_template, url: p.url, status: p.status, photo: p }); %}
        </ul>
        <div class="align-center">
        <div class="p-image p-one-photo">
            <div class="p-image-corner top left">
                <!-- plugin hook: backend-photo-image-corner-top-left -->
            </div>
            <div class="p-image-corner top right">
                {% if(p.edit_rights) { %}
                    <a href="#" id="photo-loupe-link" style="display:none;">
                        <img class="maximize" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/mode-maximize.png" alt="Полный размер">
                        <img class="minimize" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/mode-minimize.png" alt="Обычный размер" style="display:none;">
                    </a>
                {% } %}
                <!-- plugin hook: backend-photo-image-corner-top-right -->
            </div>
            <i class="p-image-nav p-rewind" title="← Предыдущая"></i>
            <i class="p-image-nav p-ff" title="Далее →"></i>
            <a href="#" class="next" title="Далее →"><img src="{%#p.thumb.url %}{% if (p.edit_datetime) { %}?{%#Date.parseISO(p.edit_datetime)%}{% } %}" id="photo" {% if (typeof p.thumb.size === 'object' && p.thumb.size) { %}style="{% if (p.thumb.size.width) { %}width: {%#p.thumb.size.width %}px; {% } %} {% if (p.thumb.size.height) { %}height: {%#p.thumb.size.height%}px;{% } %}"{% } %}
            /></a>
        </div>
        </div>
        <!-- stacks only -->
        <ul class="thumbs p-mini-stream" id="stack-stream">
        </ul><br>
        <div class="p-description">
            <span class="editable" id="photo-description">{%#p.description%}</span>
            <a href="javascript:void(0);" class="hint inline-link" id="photo-description-edit-link"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>
        </div>
        <div id="photo-hook-bottom">
        <!-- plugin hook: "backend_photo.bottom" -->
        {% if (hooks.backend_photo) { %}
            {% for (var plugin in hooks.backend_photo) { %}
                {%# hooks.backend_photo[plugin].bottom %}
            {% } %}
        {% } %}
        <!-- end plugin hook: "backend_photo.bottom" -->
        </div>
        <img id="preload-photo" src="" data-photo-id="" style="display:none;">
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-content-control", null, null); ob_start(); ?>
    {% var photo = o.photo, frontend_link_template = o.frontend_link_template; %}
    <li class="p-inline-mixed-string">
        {% if (o.frontend_link_template) { %}
            {% if (photo.status <= 0 && photo.hash) { %}
                <i class="icon10 lock-bw"></i>
                <span class="hink">Приватная ссылка: <a id="photo-frontend-link" target="_blank" href="{%#frontend_link_template.replace('%url%', photo.private_url)%}" class="gray">{%#frontend_link_template.replace('%url%', photo.private_url)%}</a></span>
            {% } else if (photo.status > 0) { %}
                Ссылка:
                <a id="photo-frontend-link" target="_blank" href="{%#frontend_link_template.replace('%url%', photo.url)%}">{%#frontend_link_template.replace('%url%/', '<span id="photo-frontend-url">%url%</span>').replace('%url%', photo.url+'/')%}</a><input type="text" id="photo-frontend-url-input" style="display:none;"><span class="slash" style="display:none;">/<em class="errormsg" style="display:none;"></em></span>
                <i class="icon10 new-window"></i>
                <a href="javascript:void(0);" class="gray inline-link" id="photo-frontend-url-edit-link">
                    <i class="icon10 edit"></i><b><i>edit</i></b>
                </a>
            {% } %}
        {% } %}
    </li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-stack", null, null); ob_start(); ?>
    {% for (var i = 0, s = o.stack[0], n = o.stack.length; i < n; s = o.stack[++i]) { %}
        <li class='dr{%#(s.id == o.photo_id) ? ' selected' : ''%}' data-photo-id={%#s.id%}><a href="#{%#o.hash%}/photo/{%#s.id%}/"><img src="{%#s.thumb_crop.url%}{% if (s.edit_datetime) { %}?{%#Date.parseISO(s.edit_datetime)%}{% } %}"></a><img src="{%#s.thumb.url%}{% if (s.edit_datetime) { %}?{%#Date.parseISO(s.edit_datetime)%}{% } %}" style="display:none;" class="thumb"></li>
    {% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-albums", null, null); ob_start(); ?>
    {% if (o.albums.length) { %}
    Альбомы:
    {% for (var i = 0, a = o.albums[0], n = o.albums.length; i < n; a = o.albums[++i]) { %}{% if (i > 0) { %}, {% } %}<a href="#/album/{%#a.id%}/">{%=a.name%}</a>{% } %}
    {% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-p-block", null, null); ob_start(); ?>
<div class="sidebar right200px" id="p-toolbar"></div>
<div class="content left<?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
px right200px" id="p-content">
    <div class="block double-padded" id="p-block"></div>
    <div id="changable-area"></div>
    <div id="cover" class="dialog-background" style="display:none;">
        <i class="icon16 loading"></i>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-toolbar", null, null); ob_start(); ?>

    {% var photo = o.photo, author = o.author, exif = o.exif; %}

    <div class="block" id="photo-stream"></div>
    <div class="block">
        <h6 class="heading">Отправить</h6>
        <ul class="menu-v with-icons compact" id="share-menu">
            <li data-action='embed'><a href="#"><i class="icon16 link"></i>Ссылка / HTML</a></li>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->blog&&($_smarty_tpl->tpl_vars['wa']->value->blog->rights(false)>=blogRightConfig::RIGHT_READ_WRITE)){?>
            <li data-action='blog-post'>
              <script type="text/javascript">
              var blog_smarty_enabled = <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->blog->option('can_use_smarty'));?>
;
              var obligatory_size = <?php echo json_encode($_smarty_tpl->tpl_vars['big_size']->value);?>
;
              </script>
              <a href="#"><i class="icon16" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/blog/img/blog16.png');"></i>Написать в блог</a>
              <div style="display: none"><?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->postForm('blog-post-form');?>
</div>
            </li>
            <?php }?>

            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_photo_toolbar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['share_menu'])){?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['item']->value['share_menu'])){?>
                        <?php  $_smarty_tpl->tpl_vars['menu_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['share_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_item']->key => $_smarty_tpl->tpl_vars['menu_item']->value){
$_smarty_tpl->tpl_vars['menu_item']->_loop = true;
?>
                            <?php echo $_smarty_tpl->tpl_vars['menu_item']->value;?>

                        <?php } ?>
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['share_menu'];?>

                    <?php }?>
                <?php }?>
            <?php } ?>
            <!-- plugin hook: backend_photo_toolbar_share -->
        </ul>
    </div>

    <div class="block">
        <h6 class="heading">Редактировать</h6>
        <ul class="menu-v with-icons compact" id="edit-menu">
            <li data-action='rotate-left'><a href="javascript:void(0);"><i class="icon16 rotate-left"></i>Влево</a></li>
            <li data-action='rotate-right'><a href="javascript:void(0);"><i class="icon16 rotate-right"></i>Вправо</a></li>
            <!-- plugin hook: backend_photo_toolbar_edit -->
            <!-- plugin hook: "backend_photo_toolbar.edit_menu" -->
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_photo_toolbar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['edit_menu'])){?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['item']->value['edit_menu'])){?>
                        <?php  $_smarty_tpl->tpl_vars['menu_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['edit_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_item']->key => $_smarty_tpl->tpl_vars['menu_item']->value){
$_smarty_tpl->tpl_vars['menu_item']->_loop = true;
?>
                            <?php echo $_smarty_tpl->tpl_vars['menu_item']->value;?>

                        <?php } ?>
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['edit_menu'];?>

                    <?php }?>
                <?php }?>
            <?php } ?>
            <!-- end plugin hook: "backend_photo_toolbar.edit_menu" -->
        </ul>
    </div>
    <div class="block">
        <h6 class="heading">Организовать</h6>
        <ul class="menu-v with-icons compact" id="photo-organize-menu">
            <li data-action='unstack'><a href="#"><i class="icon16 stack"></i>Разгруппировать</a></li>
            <li data-action='add-to-album'><a href="#"><i class="icon16 pictures"></i>Альбомы</a></li>
            <li data-action='manage-access'><a href="#"><i class="icon16 lock"></i>Доступ</a></li>
            <li data-action="delete-photo"><a href="#"><i class="icon16 delete"></i>Удалить фотографию</a></li>
        </ul>
    </div>

    <div class="block">
        <h6 class="heading">Теги</h6>
        <input id="photo-tags" value="">
        <span class="hint">Разделяйте теги запятой (,)</span><br>
        <div id="photos-photo-popular-tags" class="tags">
            
            <?php if ($_smarty_tpl->tpl_vars['popular_tags']->value){?>
                Популярные теги:
                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popular_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                    <span><a data-tag-id="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
" href="javascript:void(0);" class="inline-link"><b><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i></b></a></span>
                <?php } ?>
                <br>
            <?php }?>
            
        </div>
        <input type="button" id="photo-save-tags" value="Сохранить">
        <span id="photo-save-tags-status" style="display:none;">
        </span>
    </div>
    <div class="hr"></div>
    <div class="block profile image32px" id="photo-author">
          {% if (author && photo) { %}
              {% include('template-photo-author', { author: author, photo: photo }); %}
          {% } %}
    </div>
    <div class="block p-exif" id="photo-exif">
        {% if (exif) { %}
            {% include('template-photo-exif', { exif: exif}); %}
        {% } %}
    </div>
    <div class="block p-original" id="photo-original">
        {% if (photo) { %}
            {% include('template-photo-original', { photo: photo}); %}
        {% } %}
    </div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-stream", null, null); ob_start(); ?>
    <ul class="thumbs p-mini-stream photostream">
    <li class="stream-nav rewind"><a href="javascript:void(0);"><i></i></a></li>
    <li class="stream-nav ff"><a href="javascript:void(0);"><i></i></a></li>
    <li class="stream-wrapper">
        <ul>
            {% include('template-photo-stream-list', { photos: o.photos, current_photo: o.current_photo || null, hash: o.hash }); %}
        </ul>
    </li>
    </ul>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-stream-list", null, null); ob_start(); ?>
{% var wa_static_url = '<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
',
       photos = o.photos,
       current_photo_id = o.current_photo ? o.current_photo.id : null,
       hash = o.hash;
%}
{% if (current_photo_id) { %}
    {% for (var i = 0, n = photos.length, photo = photos[i]; i < n; photo = photos[++i]) { %}
        {% if (!photo) { photos[i] = photo = { id: null }; } %}
        {% if (current_photo_id == photo.id) { %}
            {%
               if (typeof photos[i-1] == 'object') {
                   if (!photos[i-1]) {
                       photos[i-1] = { id: null };
                   }
                   photos[i-1].visible = true;
               }
               photo.visible = true;
               if (typeof photos[i+1] == 'object') {
                   if (!photos[i+1]) {
                       photos[i+1] = { id: null };
                   }
                   photos[i+1].visible = true;
               }
            %}
        {% } %}
    {% } %}
{% } %}
{% for (var i = 0, n = photos.length, photo = photos[i]; i < n; photo = photos[++i]) { %}
    {% if (photo && photo.id) { %}
        <li class="{% if (photo.visible) { delete photo.visible; %}visible{% } %} {% if (current_photo_id == photo.id) { %}selected{% } %}" data-photo-id="{%#photo.id%}">
            <a href="{% if (hash) { %}#{%#hash%}{% }else{ %}#{% } %}/photo/{%#photo.id%}/"><img src="{%#photo.thumb_crop.url%}{% if (photo.edit_datetime) { %}?{%#Date.parseISO(photo.edit_datetime)%}{% } %}"><img src="{%#photo.thumb.url%}{% if (photo.edit_datetime) { %}?{%#Date.parseISO(photo.edit_datetime)%}{% } %}" style="display:none;" class="thumb"></a>
        </li>
    {% } else { %}
        <li class="dummy {% if (photo && photo.visible) { %}visible{% } %}"><img src="{%#wa_static_url%}img/image-not-found.png"></li>
    {% } %}
{% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-author", null, null); ob_start(); ?>
    {% if (o.author.id) { %}
        <div class="image">
            <a href="{%#o.author.backend_url%}" title="{%#$_('Photo downloaded by') + ' ' + o.author.name + ' ' + o.photo.upload_datetime_formatted %}"><img src="{%#o.author.photo_url%}" class="userpic"></a>
        </div>
        <div class="details">
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
contacts/#/contact/{%#o.author.id%}">{%#o.author.name%}</a><br>загружена {%#o.photo.upload_datetime_formatted %}
        </div>
    {% } else { %}
        <p>загружена {%#o.photo.upload_datetime_formatted %}</p>
    {% } %}

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-original", null, null); ob_start(); ?>

{% var photo = o.photo; %}
{% if (photo.edit_rights) { %}Полный размер:
<a href="?module=photo&action=download&photo_id={%# photo.id %}"><strong id="photo-name-original">{%# photo.name + '.' + photo.ext %}</strong></a><br>
{% } %}
Исходный размер: <strong>{%# photo.width %}x{%# photo.height %}</strong><br>
Файл: <strong>{%# $.wa.util.formatFileSize(photo.size) %}</strong><br>
{% if (photo.original_exists && photo.edit_rights ) { %}
<br>
<ul class="menu-h original-info">
    <li>Оригинал: </li>
    <li><i class="icon10 lock-bw"></i><a href="?module=photo&action=download&photo_id={%# photo.id %}&original=1">{%# photo.name + '.' + photo.ext %}</a><br><a href="javascript:void(0);" id="restore-original" class="hint">Восстановить</a></li>
</ul>
{% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-exif", null, null); ob_start(); ?>
{% var exif = o.exif; %}
{% if (exif.Model) { %}
    Камера: <strong>{%# exif.Model %}</strong><br>
{% } %}
{% if (exif.ISOSpeedRatings) { %}
    ISO: <strong>{%# exif.ISOSpeedRatings %}</strong><br>
{% } %}
{% if (exif.ExposureTime) { %}
    Выдержка: <strong>{%# exif.ExposureTime %}</strong><br>
{% } %}
{% if (exif.FNumber) { %}
    Диафрагма: <strong>{%# exif.FNumber %}</strong><br>
{% } %}
{% if (exif.FocalLength) { %}
    Фокусное расстояние: <strong>{%# exif.FocalLength %}</strong><br>
{% } %}
{% if (exif.DateTimeOriginal) { %}
    Снято: <strong>{%# exif.DateTimeOriginal %}</strong><br>
{% } %}
<div id="photo-map" style="display:none;"></div>
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


<div id="wa">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

    <div id="wa-app">
        <?php echo $_smarty_tpl->getSubTemplate ("templates/layouts/Sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div id="content"><?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php }?></div>
    </div>
</div>
<script type="text/javascript">
    $.photos.init({
        last_login_datetime: Date.parseISO('<?php echo $_smarty_tpl->tpl_vars['last_login_datetime']->value;?>
'),
        last_login_time: <?php echo json_encode(strtotime($_smarty_tpl->tpl_vars['last_login_datetime']->value));?>
,
        title_suffix: " — <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
",
        retina_2x_enabled: <?php if ($_smarty_tpl->tpl_vars['wa']->value->photos->config('enable_2x')){?>1<?php }else{ ?>0<?php }?>,
        photo_list_render_chunk: 25
    });
    var Album = {
        TYPE_STATIC: '<?php echo photosAlbumModel::TYPE_STATIC;?>
',
        TYPE_DYNAMIC: '<?php echo photosAlbumModel::TYPE_DYNAMIC;?>
'
    };
</script>
<?php if ($_smarty_tpl->tpl_vars['rights']->value['upload']){?><?php echo $_smarty_tpl->tpl_vars['upload_dialog']->value;?>
<?php }?>
<div id="photo-list-tags-dialog" class="dialog width400px height300px">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <form action="">
            <div class="dialog-content">
               <div class="dialog-content-indent">
                    <h1>Теги <span class="gray js-selected-counter">(N)</span></h1>
                    <textarea id="photos-list-tags" cols="30" rows="5"></textarea>
                    <span id="photos-popular-tags" class="tags small">
                        <?php if ($_smarty_tpl->tpl_vars['popular_tags']->value){?>
                            Популярные теги:
                            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popular_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                <span><a data-tag-id="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
" href="javascript:void(0);" class="inline-link"><b><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i></b></a></span>
                            <?php } ?>
                        <?php }?>
                    </span>
                    <div id="photo-tags-remove" style="display: none">
                        <br>
                        <h3>Убрать теги</h3>
                        <div id="photos-tags-remove-list">
                        </div>
                    </div>
               </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input class="button green" type="submit" value="Сохранить"> или <a class="cancel" href="javascript:void(0);">отмена</a>
                </div>
            </div>
        </form>
    </div>
</div>


<div id="photo-blog-dialog" class="dialog width400px height200px">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <form action="">
            <div class="dialog-content">
               <div class="dialog-content-indent">
                  <h1>Выбраны приватные фотографии <i class="icon16 exclamation"></i></h1>
                  <p>Для приватных фотографий используются временные адреса. Использовать приватные фотографии для публикации не рекомендуется.</p>
               </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input class="button yellow" type="submit" value="Опубликовать все равно"> или <a class="cancel" href="javascript:void(0);">отмена</a>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html><?php }} ?>