<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 15:26:37
         compiled from "/home/it/web/wa-apps/photos/templates/actions/upload/Upload.html" */ ?>
<?php /*%%SmartyHeaderCode:145308002256ee96fdea3886-33312348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee41d68901b78956a0376f59e08853f2b526d83d' => 
    array (
      0 => '/home/it/web/wa-apps/photos/templates/actions/upload/Upload.html',
      1 => 1418044499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145308002256ee96fdea3886-33312348',
  'function' => 
  array (
    'upload_album_menu' => 
    array (
      'parameter' => 
      array (
        'parent' => 0,
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'groups' => 0,
    'g_id' => 0,
    'g_name' => 0,
    'albums' => 0,
    'album' => 0,
    'parent' => 0,
    'level' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ee96fe06a1a6_05895030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ee96fe06a1a6_05895030')) {function content_56ee96fe06a1a6_05895030($_smarty_tpl) {?><div class="dialog width500px height400px p-drop-files-here-zone" id="p-uploader">
    <form id="fileupload" action="?module=upload&amp;action=photo" method="POST" enctype="multipart/form-data">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                    <!-- #1 -->
                    <div class="align-center" id="p-upload-step1">
                        <a href="javascript:void(0);" class="button blue fileinput-button" id="p-upload-step1-select-photos">
                            Выберите фотографии
                            <input type="file" name="files[]" multiple="">
                        </a>
                        <br><br><br>
                        <span class="hint">или перетащите фотографии сюда</span>
                        <br><br>
                        <img class="p-drag-photos-here" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/drag-photos-here.png" alt="или перетащите фотографии сюда">
                        <br><br><br>
                        <span class="hint">или <a href="#" class="cancel" id="p-upload-step1-cancel">отмена</a></span>
                    </div>

                    <!-- #2 -->
                    <div id="p-upload-step2" style="display: none;">

                        <h1>
                            <span class="hint"></span>
                        </h1>

                        <div class="fields p-upload-access-level">

                            <div class="field-group">
                                <div class="field">
                                    <div class="name">
                                        Доступ к фотографиям
                                    </div>
                                    <div class="value">
                                        <label for="u-access-public">
                                            <i class="icon10 yes overhanging"></i>
                                            <input id="u-access-public" type="radio" name="status" value="1" checked="checked">
                                            Опубликованный
                                            <span class="hint">Фотографии автоматически появляются в фотогалерее на сайте</span>
                                        </label>
                                    </div>
                                    <div class="value">
                                        <label for="u-access-private">
                                            <i class="icon10 lock overhanging"></i>
                                            <input id="u-access-all-groups" type="hidden" name="groups[]" value="0">
                                            <input id="u-access-private" type="radio" value="0" name="status" >
                                            Приватный
                                            <span class="hint">
                                                Только авторизованные пользователи бекенда смогут увидеть эти фотографии. Показать фото другим можно будет по временной приватной ссылке.
                                                <a href="#" class="inline-link p-privacy-settings-link"><b><i>Настройки доступа</i></b></a>
                                            </span>
                                        </label>
                                        <div class="hint p-privacy-settings" style="display: none;">
                                            <br><br>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['groups']->value)){?>
                                                Выберите группы пользователей, которым будет предоставлен доступ к фотографиям:
                                                <div class="block">
                                                    <?php  $_smarty_tpl->tpl_vars['g_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g_name']->_loop = false;
 $_smarty_tpl->tpl_vars['g_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g_name']->key => $_smarty_tpl->tpl_vars['g_name']->value){
$_smarty_tpl->tpl_vars['g_name']->_loop = true;
 $_smarty_tpl->tpl_vars['g_id']->value = $_smarty_tpl->tpl_vars['g_name']->key;
?>
                                                    <label for="user-group-<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
"><input id="user-group-<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
" name="groups[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
" checked disabled> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></label><br>
                                                    <?php } ?>
                                                </div>
                                                <em>Выключите галочки для всех групп, чтобы доступ к фото был только у вас.</em>
                                            <?php }else{ ?>
                                                <input type="hidden" name="groups[]" value="0" disabled>
                                                <em>Группы пользователей не созданы, поэтому настройка прав доступа недоступна</em>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-group">
                                <div class="field">
                                    <div class="name">
                                        Альбомы
                                    </div>
                                    <div class="value">
                                        <label for="upload-album-id">
                                            <select name="album_id" id="upload-album-id">
                                                <option value="" selected>
                                                    Не добавлять в альбомы
                                                </option>
                                                <option value="new">
                                                    Создать новый альбом…
                                                </option>
                                                <optgroup label="---">
                                                    <?php if (!function_exists('smarty_template_function_upload_album_menu')) {
    function smarty_template_function_upload_album_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['upload_album_menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                                        <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['album']->value['parent_id']==$_smarty_tpl->tpl_vars['parent']->value){?>
                                                              <option value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['parent']->value){?><?php echo str_repeat("-",$_smarty_tpl->tpl_vars['level']->value);?>
&nbsp;<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                              <?php smarty_template_function_upload_album_menu($_smarty_tpl,array('parent'=>$_smarty_tpl->tpl_vars['album']->value['id'],'level'=>($_smarty_tpl->tpl_vars['level']->value+1)));?>

                                                            <?php }?>
                                                        <?php } ?>
                                                    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                                                    <?php smarty_template_function_upload_album_menu($_smarty_tpl,array());?>

                                                </optgroup>
                                            </select>
                                        </label>

                                        <div id="upload-album-name-field" style="display:none; line-height: 1.3em;">
                                            <br>
                                            <br>
                                            <span class="hint">Введите название альбома для этой загрузки</span>
                                            <br>
                                            <input id="upload-album-name" name="album_name" type="text" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- #3 -->
                    <div id="p-upload-step3" style="display: none;">

                        <div id="p-upload-photolist">
                            <ul class="zebra files"></ul>
                        </div>
                    </div>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">

                <div id="p-upload-step2-buttons" style="display: none;">
                    <input type="button" class="button blue start" value="Начать загрузку" id="p-start-upload-button">
                    или <a href="#" class="cancel">отмена</a>
                </div>

                <div id="p-upload-step3-buttons" style="display: none;">
                    <div class="block float-right" style="padding-top: 13px;">
                        <a href="#" class="hint cancel">Прервать</a>
                    </div>
                    <div class="block">
                        <div class="progressbar blue small width300px float-left">
                            <div class="progressbar-outer">
                                <div class="progressbar-inner fileupload-progressbar" id="my-custom-progressbar-id"></div>
                            </div>
                        </div>
                        <div class="float-left" style="margin-top: 5px;" id="p-upload-filescount"></div>
                        <div id="upload-error" style="display:none" class="block half-padded errormsg">
                            Файлы загружены с ошибками.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <input type="hidden" value="0" id="p-uploader-parent" name="parent_id">
    </form>
</div>

<script type="text/javascript">
    var fileUploadErrors = {
        maxFileSize: 'File is too big',
        minFileSize: 'File is too small',
        acceptFileTypes: 'Filetype not allowed',
        maxNumberOfFiles: 'Max number of files exceeded',
        uploadedBytes: 'Uploaded bytes exceed file size',
        emptyResult: 'Empty file upload result'
    };
</script>
<?php $_smarty_tpl->_capture_stack[0][] = array("template-upload", null, null); ob_start(); ?>

    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <li class="template-upload">
        <div class="p-upload-onephoto-progress">
            <div class="p-photo-filename">
                {%=file.name%}
                <span class="hint">{%=o.formatFileSize(file.size)%}</span>
            </div>
            <span class="start"></span><span class="cancel"></span>
        </div>
        &nbsp;
    </li>
    {% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("template-download", null, null); ob_start(); ?>
    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <li class="template-upload {% if (file.error) { %}error{% } %}">
        {% if (file.error) { %}
            <div class="p-upload-onephoto-progress" style="width:100%">
                <div class="p-photo-filename">
                    <b>{%=file.name%}</b>
                    {% if (typeof file.error === 'object' && file.error instanceof SyntaxError) { %}
                        {% if (file.responseText) { %}
                            {%#file.responseText%}
                        {% } else { %}
                            {%=$_('Failed to upload. Most probably, there were not enough memory to create thumbnails.')%}.
                        {% } %}
                    {% } else { %}
                        {%=file.error%}
                    {% } %}
                </div>
            </div>
        {% } else { %}
            <div class="p-upload-onephoto-progress" style="width:100%">
                <div class="p-photo-filename">
                    {%=file.name%} <span class="hint">{%=o.formatFileSize(file.size)%}</span>
                </div>
            </div>
        {% } %}
        &nbsp;
    </li>
    {% } %}
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/load-image.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery.fileupload.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery.fileupload-wa.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
    $(function () {
        var d = $("#p-uploader");
        $("a.p-privacy-settings-link", d).click(function () {
             if ($("div.p-privacy-settings", d).is(":hidden")) {
                 $("#u-access-all-groups", d).attr('disabled', 'disabled');
                 $("div.p-privacy-settings input", d).removeAttr('disabled');
                 $("div.p-privacy-settings", d).show();
             } else {
                 $("#u-access-all-groups", d).removeAttr('disabled');
                 $("div.p-privacy-settings input", d).attr('disabled', 'disabled');
                 $("div.p-privacy-settings", d).hide();
             }
             return false;
        });
        $('#upload-album-id').change(function() {
            if (this.value != 'new') {
                $('#upload-album-name-field').hide();
            } else {
                $('#upload-album-name-field').show();
            }
        });
        $('#p-upload-step1-cancel').click(function() {
            d.trigger('close');
            return false;
        });
        // Initialize the jQuery File Upload widget:
        $('#fileupload').fileupload({
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
        });
    });
</script><?php }} ?>