<?php /* Smarty version Smarty-3.1.14, created on 2016-03-20 15:27:31
         compiled from "/home/it/web/wa-apps/photos/templates/actions/settings/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:113283813656ee97338cd443-06790693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67036e578fb8be9d98a68daff2a459b27f3632c7' => 
    array (
      0 => '/home/it/web/wa-apps/photos/templates/actions/settings/Settings.html',
      1 => 1398339196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113283813656ee97338cd443-06790693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar_width' => 0,
    'saved' => 0,
    'settings' => 0,
    'sizes_set' => 0,
    'size_item' => 0,
    'type' => 0,
    'size' => 0,
    'set_type' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ee9733a249e6_35265131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ee9733a249e6_35265131')) {function content_56ee9733a249e6_35265131($_smarty_tpl) {?><div class="content left<?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
px">
    <div class="shadowed">
        <?php if (isset($_smarty_tpl->tpl_vars['saved']->value)&&$_smarty_tpl->tpl_vars['saved']->value){?>
            <div class="block double-padded p-message-success bordered-bottom">
                <i class="icon16 yes"></i>Настройки сохранены
            </div>
        <?php }?>
        <div class="block double-padded blank" id="settings-block">
            <form action="" method="post" id="settings-form">
                <div class="fields form">
                    <h6 class="heading">Эскизы</h6>
                    <div class="field-group">
                        <div class="field" id="thumpnail-size">
                            <div class="name">
                                Создание эскизов при загрузке изображений
                            </div>
                            <div class="value">
                                <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['sizes'])){?>
                                <div class="thumbnail-size-set" id="saved-thumpnail-size">
                                    <ul class="zebra">
                                    <?php  $_smarty_tpl->tpl_vars['sizes_set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sizes_set']->_loop = false;
 $_smarty_tpl->tpl_vars['set_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['sizes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sizes_set']->key => $_smarty_tpl->tpl_vars['sizes_set']->value){
$_smarty_tpl->tpl_vars['sizes_set']->_loop = true;
 $_smarty_tpl->tpl_vars['set_type']->value = $_smarty_tpl->tpl_vars['sizes_set']->key;
?>
                                        <?php  $_smarty_tpl->tpl_vars['size_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['size_item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sizes_set']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['size_item']->key => $_smarty_tpl->tpl_vars['size_item']->value){
$_smarty_tpl->tpl_vars['size_item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['size_item']->key;
?>
                                            <li>
                                                <?php  $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['size']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['size_item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['size']->key => $_smarty_tpl->tpl_vars['size']->value){
$_smarty_tpl->tpl_vars['size']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['size']->key;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['type']->value=='crop'){?>
                                                        Квадратная обрезка: <strong><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
x<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 px</strong>
                                                    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='max'){?>
                                                        Макс ( Ширина, Высота ) = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 px</strong>
                                                    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='width'){?>
                                                        Ширина = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 px</strong>, Высота = авто
                                                    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='height'){?>
                                                        Ширина = авто, Высота = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 px</strong>
                                                    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='rectangle'){?>
                                                        Ширина = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value[0];?>
 px</strong>, Высота = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
 px</strong>
                                                    <?php }?>
                                                <?php } ?>
                                                <?php if ($_smarty_tpl->tpl_vars['set_type']->value=='custom'){?>
                                                    <a href="javascript:void(0)" class="delete-action hint inline-link" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><b><i>удалить</i></b></a>
                                                <?php }?>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                    </ul>
                                </div>
                                <?php }?>
                            </div>
                            <div class="thumbnail-size-set block" id="thumbnail-size-set" style="display:none">
                                <div class="value no-shift">
                                    <label class="s-label-with-check">
                                        <input type="radio" name="size_type[0]" value="max">
                                        Макс ( Ширина, Высота ) = <strong><span>*</span></strong><input type="text" name="size[0]" value="" size="4" class="small-int" style="display:none;" disabled>px
                                    </label>
                                </div>
                                <div class="value">
                                    <label class="s-label-with-check">
                                        <input type="radio" name="size_type[0]" value="width">
                                        Ширина = <strong><span>*</span></strong><input type="text" name="size[0]" value="" size="4" class="small-int" style="display:none;" disabled>px, Высота = <span class="gray">авто</span>
                                    </label>
                                </div>
                                <div class="value">
                                    <label class="s-label-with-check">
                                        <input type="radio" name="size_type[0]" value="height">
                                        Ширина = <span class="gray">авто</span>, Высота = <strong><span>*</span></strong><input type="text" name="size[0]" value="" size="4" class="small-int" style="display:none;" disabled>px
                                    </label>
                                </div>
                                <div class="value">
                                    <label class="s-label-with-check">
                                        <input type="radio" name="size_type[0]" value="crop">
                                        Квадратная обрезка: Файл = <strong><span>*</span></strong><input type="text" name="size[0]" value="" size="4" class="small-int" style="display:none;" disabled>px
                                    </label>
                                </div>
                                <div class="value">
                                    <label class="s-label-with-check">
                                        <input type="radio" name="size_type[0]" value="rectangle">
                                        Прямоугольная обрезка: Ширина = <strong><span>*</span></strong><input type="text" name="width[0]" value="" size="4" class="small-int" style="display:none;" disabled>px, Высота = <strong><span>*</span></strong><input type="text" name="height[0]" value="" size="4" class="small-int" style="display:none;" disabled>px
                                    </label>
                                </div>
                            </div>
                            <div class="value block">
                                <a id="add-action" href="javascript:void(0);" class="small inline-link"><i class="icon10 add"></i><b><i>Добавить</i></b></a>
                            </div>
                        </div>
                    </div>

                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Эскизы произвольных размеров
                            </div>
                            <div class="value no-shift">
                                <label>
                                    <input type="checkbox" name="thumbs_on_demand" id="allow_gen_thumbs_on_demand" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['thumbs_on_demand'])){?>checked<?php }?>> Разрешить создание эскизов произвольных размеров по требованию<br>
                                    <span class="hint">Включите, чтобы позволить приложению «на лету» создавать эскизы фотографий произвольных размеров (размер эскиза указывается в URL файла).</span>
                                </label>
                            </div>
                            <div class="value" id="max_available_size_control" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['thumbs_on_demand']){?>style="display:none;"<?php }?>>
                                Максимальный размер эскиза<br>
                                <input type="text" name="max_size" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['max_size'];?>
" size="4" class="small-int"> px<br>
                                <span class="hint">Максимальный возможный размер эскиза изображения, созданного по требованию. Не должен превышать 970 пикселей.</span>
                            </div>
                    </div>

                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Резкость
                            </div>
                            <div class="value no-shift">
                                <label><input type="checkbox" name="sharpen" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['sharpen'])){?>checked<?php }?>> Применить фильтр резкости при создании эскизов изображений (рекомендуется)</label>
                            </div>

                        </div>
                        <div class="field">
                            <div class="name">
                                Качество эскизов
                            </div>
                            <div class="value">
                                <input type="input" name="save_quality" value="<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['save_quality'])){?><?php echo str_replace(',','.',$_smarty_tpl->tpl_vars['settings']->value['save_quality']);?>
<?php }?>"><br>
                                <span class="hint">Коэффициент качества сжатия JPEG при создании эскизов изображений. От 0 (минимальное качество, минимальный размер файлов) до 100 (максимальное качество, максимальный размер файлов). Рекомендуемое значение — 90.</span>
                            </div>

                        </div>
                    </div>
                            
                    <h6 class="heading">Оригиналы</h6>
                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Оригиналы
                            </div>
                            <div class="value no-shift">
                                <label><input type="checkbox" name="save_original" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['save_original'])){?>checked<?php }?>> Хранить оригиналы фотографий</label>
                                <br>
                                <span class="hint">Оригинальные изображения будут сохранены отдельно от полноразмерной версии и не будут меняться, когда вы редактируете фотографию (например, при поворотах изображения, применении к изображению фильтров, наложению водяных знаков). Плюсы: у каждой фотографии есть резервная копия, бекап. Минусы: для хранения оригиналов требуется примерно в два раза больше места на диске.</span>
                            </div>

                        </div>
                    </div>

                    <h6 class="heading">@2x</h6>
                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Эскизы изображений @2x
                            </div>
                            <div class="value no-shift">
                                <label><input type="checkbox" name="enable_2x" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['enable_2x'])){?>checked<?php }?>> Разрешить создание эскизов @2x по требованию (рекомендуется)</label>
                                <br>
                                <span class="hint">Включение этой настройки позволит автоматически создавать эскизы изображений для устройств с высокой плотностью пикселей, например, для устройств с Retina-дисплеем. Формирование таких изображений требует больше оперативной памяти сервера и больше места для хранения файлов, однако это существенно улучшит отображение товаров на современных мониторах.</span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">
                                Качество эскизов @2x
                            </div>
                            <div class="value">
                                <input type="input" name="save_quality_2x" value="<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['save_quality_2x'])){?><?php echo str_replace(',','.',$_smarty_tpl->tpl_vars['settings']->value['save_quality_2x']);?>
<?php }?>"><br>
                                <span class="hint">Качество сжатия JPEG для эскизов. От 0 (низкое качество, минимальный размер файла) до 100 (выше качество, больше размер файла). Рекомендуемое значение: 70.</span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="value submit">
                                <input type="submit" name="save" class="button green" value="Сохранить">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {

        var controls_set = $('.thumbnail-size-set').data('checked', $());
        checkHandlerAddSizeForm.call(controls_set.find('input[type=radio]').filter(':checked'));

        $('#thumpnail-size label').die('click');
        $('#thumpnail-size label').live('click', function(e) {
            if (e.target.tagName == 'INPUT') {
                if (e.target.type == 'text') {
                    return false;
                }
                checkHandlerAddSizeForm.call(e.target);
            }
        });

        $('#add-action').click(function() {
            var size_set = $('#thumbnail-size-set');
            if (size_set.is(':hidden')) {
                size_set.show()
                if ($('#saved-thumpnail-size').length) {
                    size_set.before('<br>');
                }
                return false;
            }
            var last_set = $('#settings-form .thumbnail-size-set:last');
            var cloned_set = last_set.clone();

            cloned_set.find('input[type=radio], input[type=text]').each(function() {
                this.name = this.name.replace(/(\d+)/, function(m) {
                    return +m[0]+1;
                });
            });
            last_set.after(cloned_set).after('<br>');
            cloned_set.data('checked', $());
            checkHandlerAddSizeForm.call(cloned_set.find('input[type=radio]').filter(':checked'));
            return false;
        });

        var length = $('.delete-action').length;
        $('.delete-action').click(function() {
            var self = $(this),
                li = self.parents('li:first');
            if (li.find('span.strike').length) {
                return;
            }
            $('#settings-form').append('<input type="hidden" name="delete[]" value="' + self.attr('data-key') + '">');

            var inner_html = li.html();
            li.html('<span class="strike">'+inner_html+'</span>').append('<em class="small">'+$_('Click “Save” button below to apply this change.')+'</em>');
        });

        $('#allow_gen_thumbs_on_demand').click(function() {
            if (this.checked) {
                $('#max_available_size_control').show(200);
            } else {
                $('#max_available_size_control').hide(200);
            }
        });

        $('#settings-form').submit(function() {
            $.post("?module=settings", $(this).serialize(), function (html) {
                $("#content").html(html);
            })
            return false;
        });

        function checkHandlerAddSizeForm() {
            var self = $(this);
            if (!self.length) {
                return;
            }
            var controls_set = self.parents('.thumbnail-size-set');
            var prev_checked = self.parents('.thumbnail-size-set').data('checked');
            checkSizeControl(self);
            if (self.get(0) != prev_checked.get(0)) {
                uncheckSizeControl(prev_checked);
            }
            controls_set.data('checked', self);
        }
        function checkSizeControl(input) {
            input.nextAll().filter('span').hide().end().filter('input').show().attr('disabled', false);
        }
        function uncheckSizeControl(input) {
            input.nextAll().filter('span').show().end().filter('input').hide().attr('disabled', true);
        }
    });
</script><?php }} ?>