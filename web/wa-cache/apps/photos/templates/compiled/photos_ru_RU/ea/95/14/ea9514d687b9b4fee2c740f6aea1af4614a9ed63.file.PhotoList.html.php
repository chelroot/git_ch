<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 15:26:38
         compiled from "/home/it/web/wa-apps/photos/templates/actions/photo/PhotoList.html" */ ?>
<?php /*%%SmartyHeaderCode:120272760156ee96fea1cce8-53196929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea9514d687b9b4fee2c740f6aea1af4614a9ed63' => 
    array (
      0 => '/home/it/web/wa-apps/photos/templates/actions/photo/PhotoList.html',
      1 => 1419597248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120272760156ee96fea1cce8-53196929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'big_size' => 0,
    'wa_url' => 0,
    'album' => 0,
    'sidebar_width' => 0,
    'photos' => 0,
    'hash' => 0,
    'title' => 0,
    'frontend_link' => 0,
    'child_albums' => 0,
    'a' => 0,
    'template_content' => 0,
    'template' => 0,
    'offset' => 0,
    'string' => 0,
    'loaded' => 0,
    'total_count' => 0,
    'photos_per_page' => 0,
    'sort_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ee96fed9a995_21332619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ee96fed9a995_21332619')) {function content_56ee96fed9a995_21332619($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/it/web/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include '/home/it/web/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<div class="sidebar right200px" id="p-toolbar">
    <div class="block" id="share-menu-block">
        <h6 class="heading">
            <span class="count indicator" style="display:none"></span>
            Отправить
        </h6>
        <ul class="menu-v with-icons compact p-no-photo-selected123 thumbs-view-menu" id="share-menu">
            <li data-action="embed"><a href="#"><i class="icon16 link"></i>Ссылка / HTML</a></li>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->blog&&($_smarty_tpl->tpl_vars['wa']->value->blog->rights(false)>=blogRightConfig::RIGHT_READ_WRITE)){?>
            <li data-action='blog-post'>
              <script type="text/javascript">
              var blog_smarty_enabled = <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->blog->option('can_use_smarty'));?>
;
              var obligatory_size = <?php echo json_encode($_smarty_tpl->tpl_vars['big_size']->value);?>
;
              </script>
              <a href="#"><i class="icon16" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/blog/img/blog16.png'); background-size: 16px 16px;"></i>Написать в блог</a>
              <div style="display: none"><?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->postForm('blog-post-form');?>
</div>
            </li>
            <?php }?>
        </ul>
    </div>
    <div class="block" id="organize-menu-block">
        <h6 class="heading">
            <span class="count indicator" style="display:none"></span>
            Организовать
        </h6>
        <ul class="menu-v with-icons compact p-no-photo-selected123 thumbs-view-menu" id="organize-menu">
            <li data-action='make-stack'><a href="#"><i class="icon16 stack"></i>Сгруппировать</a></li>
            <li data-action='set-rate'><a href="#;"><i class="icon16 star"></i>Оценить</a></li>
            <li data-action='add-to-album'><a href="#"><i class="icon16 pictures"></i>Альбомы</a></li>
            <li data-action='assign-tags'><a href="#"><i class="icon16 tags"></i>Теги</a></li>
            <?php if (!empty($_smarty_tpl->tpl_vars['album']->value)&&$_smarty_tpl->tpl_vars['album']->value['type']==photosAlbumModel::TYPE_STATIC){?>
                <li data-action='delete-from-album'><a href="#"><i class="icon10 no-bw"></i>Исключить из альбома</a></li>
            <?php }?>
            <!-- plugin hook: backend_toolbar_list_organize_selected_link -->
            <li data-action='manage-access' class="top-padded"><a href="#"><i class="icon16 lock"></i>Доступ</a></li>
            <li data-action='delete-photos'><a href="#"><i class="icon16 delete"></i>Удалить</a></li>
        </ul>
    </div>
    <div class="block" id="save-menu-block" style="display: none;">
        <h6 class="heading">
            <span class="count indicator" style="display:none">0</span>
            Описания
        </h6>
        <ul class="menu-v descriptions-view-menu" id="save-menu">
            <li data-action='save-description'><input type="button" value="Сохранить" class="button green"></li>
            <li data-action='hide-name'>
                <input id="save-menu-hide-name" type="checkbox" value="1">
                <label for="save-menu-hide-name">Скрыть названия</label>
            </li>
        </ul>
    </div>
    <div class="block" id="selector-menu-block" style="display: none;">
        <ul class="menu-v thumbs-view-menu" id="selector-menu">
            <li data-action='select-photos'>
                <a href="#" class="inline-link small">
                    <i class="icon16 checkboxes"></i><b><i><span class="unchecked">Выбрать все фото</span>
                        <span class="checked" style="display:none;">Отменить для всех фото</span>
                    </i></b>
                </a>
            </li>
        </ul>
    </div>
    <div class="block" id="hint-menu-block" style="display:none;">
        <p class="p-sort-order-error-disclaimer upload_datetime" style="display:none;">В этом списке фотографии отсортированы <strong>по времени загрузки</strong>. Вручную задать порядок сортировки в этом списке нельзя.</p>
        <p class="p-sort-order-error-disclaimer rate" style="display:none;">В этом списке фотографии отсортированы <strong>по оценке</strong>. Вручную задать порядок сортировки в этом списке нельзя.</p>
        <p class="p-sort-order-error-disclaimer sort" style="display:none;">У вас недостаточно прав доступа для изменения порядка сортировки фотографий в этом списке.</p>
    </div>
</div>

<div class="content left<?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
px right200px" id="p-content">

    <?php if (empty($_smarty_tpl->tpl_vars['photos']->value)&&empty($_smarty_tpl->tpl_vars['album']->value)&&empty($_smarty_tpl->tpl_vars['hash']->value)){?>
        <div class="block double-padded p-welcome" id="welcome-block">
            <style>
                #p-toolbar { display: none; }
                .p-welcome { margin-right: -150px; }
            </style>
            <h1>Добро пожаловать в вашу новую фотогалерею!</h1>
            <p>Загрузите фотографии, щелкнув по ссылке выше или перетащив фотографии из папки на вашем компьютере прямо на эту страницу.</p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/photos/img/drag-photos-here.png" class="p-drag-photos-here" title="Перетащите фотографии в любое место на этой странице, чтобы начать загрузку." alt="Перетащите фотографии в любое место на этой странице, чтобы начать загрузку.">
        </div>
    <?php }else{ ?>
        <div class="block double-padded" id="p-block">
            <h1>
                <?php if (!empty($_smarty_tpl->tpl_vars['album']->value)){?>
                    <a href="<?php if ($_smarty_tpl->tpl_vars['album']->value['parent_id']){?>#/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['parent_id'];?>
/<?php }else{ ?>#/albums/<?php }?>" class="p-back-to-list">← Назад</a>
                <?php }?>
                <span <?php if (isset($_smarty_tpl->tpl_vars['album']->value)&&!empty($_smarty_tpl->tpl_vars['album']->value['edit_rights'])){?>class="editable"<?php }?> id="photo-list-name"><?php if (isset($_smarty_tpl->tpl_vars['album']->value)&&empty($_smarty_tpl->tpl_vars['title']->value)){?>(без имени)<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
                <input type="text" id="photo-list-name-input" style="display: none;" class="p-photo-h1-edit">
                <?php if (isset($_smarty_tpl->tpl_vars['album']->value)){?>
                    <span class="<?php if (!empty($_smarty_tpl->tpl_vars['album']->value['edit_rights'])){?>editable<?php }?> hint" id="photo-album-note"><?php if ($_smarty_tpl->tpl_vars['album']->value['note']){?><?php echo $_smarty_tpl->tpl_vars['album']->value['note'];?>
<?php }?></span>
                    <input type="text" id="photo-album-note-input" style="display: none;" class="p-photo-h1-edit hint">
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['album']->value)&&$_smarty_tpl->tpl_vars['album']->value['type']==photosAlbumModel::TYPE_DYNAMIC){?>
                    <span class="p-smart-album-criteria">
                        <?php if (isset($_smarty_tpl->tpl_vars['album']->value['conditions']['status'])&&$_smarty_tpl->tpl_vars['album']->value['conditions']['status'][0]=='<='&&$_smarty_tpl->tpl_vars['album']->value['conditions']['status'][1]=='0'){?><i class="icon10 lock-bw"></i><?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['album']->value['conditions']['rate'])){?>
                            <?php echo str_repeat('★',$_smarty_tpl->tpl_vars['album']->value['conditions']['rate'][1]);?>
<?php if ($_smarty_tpl->tpl_vars['album']->value['conditions']['rate'][0]=='>='){?>+<?php }else{ ?>-<?php }?>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['album']->value['conditions']['tag'])){?>
                            <span class="tags small"><?php echo implode($_smarty_tpl->tpl_vars['album']->value['conditions']['tag'][1],', ');?>
</span>
                        <?php }?>
                    </span>
                <?php }?>
            </h1>
            <ul class="menu-h p-content-control">
                <li class="selected">
                    <a href="#" class="album-view" data-action="thumbs-view"><!-- index.php?app=photos --><i class="icon16 view-thumbs"></i></a>
                </li>
                <li>
                    <a href="#" class="album-view" data-action="descriptions-view"><!-- index.php?app=photos&descriptions --><i class="icon16 view-thumb-list"></i></a>
                </li>
                <!-- plugin hook: backend-list-view-toggle -->

                <li class="p-inline-mixed-string">
                    <?php if (isset($_smarty_tpl->tpl_vars['album']->value)){?>
                        <?php if ($_smarty_tpl->tpl_vars['frontend_link']->value){?>
                            <?php if ($_smarty_tpl->tpl_vars['album']->value['status']<=0){?>
                                <i class="icon10 lock-bw"></i>
                                Приватный альбом<?php if ($_smarty_tpl->tpl_vars['album']->value['edit_rights']){?>: <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['frontend_link']->value;?>
" id="photo-list-frontend-link" class="gray"><?php echo $_smarty_tpl->tpl_vars['frontend_link']->value;?>
</a>
                                <i class="icon10 new-window"></i><?php }?>
                            <?php }else{ ?>
                                Опубликованный альбом: <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['frontend_link']->value;?>
" id="photo-list-frontend-link"><?php echo $_smarty_tpl->tpl_vars['frontend_link']->value;?>
</a>
                                <i class="icon10 new-window"></i>
                            <?php }?>
                            &nbsp;&nbsp;
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['album']->value['edit_rights']){?>
                            <i class="icon10 settings p-published-album-layout-icon"></i>
                            <a href="#" id="p-album-settings" class="gray">Настройки альбома</a>
                            &nbsp;
                            <i class="icon10 delete-bw"></i>
                            <a href="#" id="p-album-delete" class="gray">Удалить альбом</a>
                        <?php }?>
                    <?php }elseif((!empty($_smarty_tpl->tpl_vars['frontend_link']->value))){?>
                        Ссылка: <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['frontend_link']->value;?>
" id="photo-list-frontend-link"><?php echo $_smarty_tpl->tpl_vars['frontend_link']->value;?>
</a>
                        <i class="icon10 new-window"></i>
                    <?php }?>
                </li>
            </ul>

            <div id="place-for-messages"></div>

            <?php if (!empty($_smarty_tpl->tpl_vars['album']->value)){?>
                <?php if (!empty($_smarty_tpl->tpl_vars['album']->value['description'])){?>
                    <p class="small"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['album']->value['description']),512);?>
</p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['child_albums']->value){?>
                    <ul class="thumbs li150px p-albums" id="album-thumbs-list">
                        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                            <li data-album-id="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
">
                                <div class="p-image">
                                    <div class="p-image-corner top left"></div>
                                    <div class="p-image-corner top right"></div>
                                    <a href="#/album/<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
/">
                                        <?php if ($_smarty_tpl->tpl_vars['a']->value['key_photo']){?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['a']->value['key_photo']['thumb_96x96']['url'];?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['key_photo']['edit_datetime']){?>?<?php echo strtotime($_smarty_tpl->tpl_vars['a']->value['key_photo']['edit_datetime']);?>
<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php }else{ ?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/album-dummy.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" style="max-width:100px">
                                        <?php }?>
                                    </a>
                                </div>
                                <div class="p-details">
                                    <strong<?php if ($_smarty_tpl->tpl_vars['a']->value['status']<=0){?> class="gray" title="Приватный альбом"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? "(без имени)" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</strong>
                                    <span class="p-count"><?php echo sprintf(_w('%d photo','%d photos',$_smarty_tpl->tpl_vars['a']->value['count']),$_smarty_tpl->tpl_vars['a']->value['count']);?>
</span>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <h5 class="heading">В этом альбоме</h5>
                <?php }?>
            <?php }?>


            <ul class="thumbs li250px" id="photo-list"></ul>
            <div class="lazyloading-wrapper"></div>
        </div>
    <?php }?>
    <div id="cover" class="dialog-background" style="display:none;">
        <i class="icon16 loading"></i>
    </div>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-thumbs", null, null); ob_start(); ?>
    {% var last_login_time = o.last_login_time; %}
    {% for (var i=0, p=o.photos[0], n=o.photos.length; i<n; p=o.photos[++i]) { %}
    <li class="{% if (p.stack_count > 0) { %} stacked{% } %}
                {% if (i == n - 1) { %} last{% } %}
                {% if (last_login_time < p.upload_timestamp) { %}highlighted{% } %}
                {% if ($.photos.album && $.photos.album.key_photo_id == p.id) { %}key-photo{% } %}
                {% if (o.selected) { %}selected{% } %}"
                data-photo-id="{%#p.id%}"
    >
        <div class="p-image">{% if (p.stack_count > 0) { %}
            <div class="p-stack layer1"></div>
            <div class="p-stack layer2"></div>
            <div class="p-stack layer3"></div>{% } %}
                <div class="p-image-corner top left">
                    
                    {% for (var plugin in p.hooks.top_left) { %}
                       {%# p.hooks.top_left[plugin] %}
                    {% } %}
                    {% if (p.status <= 0) { %}<i class="icon16 lock-bw p-private-photo" title="Приватная фотография"></i>{% } %}
                </div>
                <div class="p-image-corner top right">
                    {% if (p.stack_count > 0) { %}<span class="indicator">{%#p.stack_count%}</span>{% } %}
                    {% if ($.photos.album) { %}<i class="icon16 medal key-photo-icon" title="Фото на обложке альбома"></i>{% } %}

                    
                    {% for (var plugin in p.hooks.top_right) { %}
                       {%# p.hooks.top_right[plugin] %}
                    {% } %}
                </div>
            <a href="#{%#o.hash%}/photo/{%#p.id%}/">
                <img src="{%#p.thumb.url%}{% if (p.edit_datetime) { %}?{%#Date.parseISO(p.edit_datetime)%}{% } %}" alt="" {% if ($.photos.album && $.photos.album.status == 1 && p.status <= 0) { %} style="opacity: 0.5" title="Приватные фотографии не видны в общедоступных опубликованных альбомах"{% } %} />
            </a>
        </div>
        <div class="p-details">
            <input type="checkbox" id="photos-checkbox-{%#p.id%}" name="photo_id[]" value="{%#p.id%}"
                        {% if (o.selected) { %}checked="checked"{% } %}
            >
            <label>
                <strong{% if (p.status <= 0) { %} class="gray" title="Приватная фотография"{% } %}>{%#p.name%}</strong>
            </label>
            <span class="p-rate" {% if (p.rate == 0) { %}style="display: none;"{% } %}>
                {%#$.photos.getRatingHtml(p.rate, 10, true)%}
            </span>
        </div>
        <div class="p-description">
            {% if (p.description) { %}
                <div class="small {% if (p.edit_rights) { %}editable{% } %}">{%#p.description.truncate(255)%}</div>
                <div class="full-description" style="display:none;">{%#p.description%}</div>
            {% } else { %}
                {% if (p.edit_rights) { %}
                    <div class="small gray editable">добавить описание</div>
                {% } else { %}
                    <div class="small gray"></div>
                {% } %}
                <div class="full-description" style="display:none;"></div>
            {% } %}
            {% if ($.photos.album && $.photos.album.edit_rights) { %}
                <div class="small make-key-photo-link"><a href="javascript:void(0)" class="inline-link"><b><i>сделать обложкой альбома</i></b></a></div>
            {% } %}
        </div>
        <p class="tags">
            <span class="small">
                {% include ('template-photo-list-photo-tags', {tags: p.tags}); %}
            </span>
        </p>
        <div id="photo-list-hook-thumb-{%#p.id%}" class="photo-list-hook-thumb">

        
        {% for (var plugin in p.hooks.thumb) { %}
           {%# p.hooks.thumb[plugin].replace(/\{%[#=]{1}\s*o.([\w_]+)%\s*\}/g,function(string,match){ return o[match];}) %}
        {% } %}
        </div>
    </li>
    {% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-counter", null, null); ob_start(); ?>
    {%=o.string.loaded%}&nbsp;{%=o.string.of%}
    {% if (o.count < o.total_count) { %}
      <br>
      <br>
      <a href="#next" class="lazyloading-link">Показать еще</a>
      <span class="lazyloading-progress" style="display:none">
           <i class="icon16 loading"></i>
           Загружаю{% if (o.string.chunk) { %}&nbsp;{%=o.string.chunk%}{% } %}...
      </span>
    {% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-descriptions", null, null); ob_start(); ?>
    {% var height; %}
    {% for (var i=0, p=o.photos[0], n=o.photos.length; i<n; p=o.photos[++i]) { %}
    <li class="{% if (p.stack_count > 0) { %} stacked{% } %}
                {% if (i == n - 1) { %} last{% } %}"
                data-photo-id="{%#p.id%}"
    >
        <div class="p-image">{% if (p.stack_count > 0) { %}
            <div class="p-stack layer1"></div>
            <div class="p-stack layer2"></div>
            <div class="p-stack layer3"></div>{% } %}
            <a href="#{%#o.hash%}/photo/{%#p.id%}/">
                <div class="p-image-corner top left">
                    {% if (p.status <= 0) { %}
                    <i class="icon16 lock-bw p-private-photo" title="Приватная фотография"></i>
                    {% } %}
                </div>
                <div class="p-image-corner top right">
                    {% if (p.stack_count > 0) { %}<span class="indicator">{%#p.stack_count%}</span>{% } %}
                </div>
                <img src="{%#p.thumb.url%}{% if (p.edit_datetime) { %}?{%#Date.parseISO(p.edit_datetime)%}{% } %}" />
            </a>
        </div>

        <div class="p-photo-details">
            {% if (p.edit_rights) { %}
                {%
                   if (typeof p.thumb.size === 'object' && p.thumb.size && p.thumb.size) {
                     height = p.thumb.size.height
                   } else {
                     height = p.thumb.bound.height || p.thumb.bound.width;
                   }
                %}
                <input name="photo[{%#p.id%}][name]" value="{%#p.name%}" class="bold"{% if (o.options.hide_name) { %} style="display:none;"{% } %}>
                <textarea name="photo[{%#p.id%}][description]" class="js-{%=o.options.hide_name?'big':'small'%}" style="height: {%=height-(o.options.hide_name?6:33)%}px;" >{%#p.description%}</textarea>
            {% } else { %}
                <span class="title p-name{% if (p.edit_rights) { %} editable{% } %}" id="p-name-{%#p.id%}">{%#p.name%}</span>
                <div class="small p-description">{%#p.description%}</div>
            {% } %}
        </div>

    </li>
    {% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("template-photo-list-photo-tags", null, null); ob_start(); ?>
{% var tags = o.tags, i = 0; %}
{% if (!tags || ($.isArray(tags) && !tags.length)) return ''; %}
{% for (var tag_id in tags) { %}{% var t = tags[tag_id]; %}{% if (i++ > 0) { %},{% } %} <a href='#/tag/{%=encodeURIComponent(t)%}/'>{%=t%}</a>{% } %}
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
<?php if (empty($_smarty_tpl->tpl_vars['offset']->value)){?>
<?php $_smarty_tpl->tpl_vars['loaded'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['photos']->value), null, 0);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['loaded'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['photos']->value)+$_smarty_tpl->tpl_vars['offset']->value, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['album']->value)){?><?php $_smarty_tpl->tpl_vars['total_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['album']->value['count'], null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars['photos_per_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->photos->option("photos_per_page"), null, 0);?>
<script type="text/javascript">
    <?php if (!empty($_smarty_tpl->tpl_vars['string']->value)){?>
        $.photos.photo_list_string = <?php echo json_encode($_smarty_tpl->tpl_vars['string']->value);?>
;
    <?php }else{ ?>
        $.photos.photo_list_string = {
            'loaded':'<?php echo _w('%d photo','%d photos',$_smarty_tpl->tpl_vars['loaded']->value);?>
',
            'of':'<?php if (!empty($_smarty_tpl->tpl_vars['total_count']->value)){?><?php echo sprintf("из %d",$_smarty_tpl->tpl_vars['total_count']->value);?>
<?php }else{ ?><?php }?>',
            'chunk':'<?php echo _w('%d photo','%d photos',min($_smarty_tpl->tpl_vars['total_count']->value-$_smarty_tpl->tpl_vars['loaded']->value,$_smarty_tpl->tpl_vars['photos_per_page']->value));?>
'
        };
    <?php }?>

    $.photos.setAlbum(<?php if (isset($_smarty_tpl->tpl_vars['album']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['album']->value);?>
<?php }else{ ?>null<?php }?>);
    $.photos.photo_stream_cache.set(<?php echo json_encode(array_values($_smarty_tpl->tpl_vars['photos']->value));?>
);
    $.photos.total_count = <?php if (!empty($_smarty_tpl->tpl_vars['total_count']->value)){?><?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
<?php }else{ ?>null<?php }?>;
    $.photos.photos_per_page = <?php echo $_smarty_tpl->tpl_vars['photos_per_page']->value;?>
;
    $.photos.setOption('sort_method', '<?php echo $_smarty_tpl->tpl_vars['sort_method']->value;?>
');
    <?php if (!empty($_smarty_tpl->tpl_vars['album']->value)&&$_smarty_tpl->tpl_vars['child_albums']->value){?>
        $.photos.initAlbumThumbsDragAndDrop($('#album-thumbs-list'), <?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
);
    <?php }?>

    //
    // see js/photos.js -> $.photos.onLoadPhotoList()
    // for additional JS that runs after this template is loaded.
    //
</script><?php }} ?>