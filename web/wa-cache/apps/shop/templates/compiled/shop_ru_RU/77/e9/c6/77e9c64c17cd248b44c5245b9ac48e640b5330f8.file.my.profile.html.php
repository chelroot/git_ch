<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 17:36:22
         compiled from "/home/it/web/wa-data/public/site/themes/site_camera/my.profile.html" */ ?>
<?php /*%%SmartyHeaderCode:162918545456ec126633bb99-76859594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77e9c64c17cd248b44c5245b9ac48e640b5330f8' => 
    array (
      0 => '/home/it/web/wa-data/public/site/themes/site_camera/my.profile.html',
      1 => 1456499206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162918545456ec126633bb99-76859594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'saved' => 0,
    'form' => 0,
    'user_info' => 0,
    'info' => 0,
    'auth_adapters' => 0,
    'a' => 0,
    'linked_adapters' => 0,
    'other_adapters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ec1266487ed0_24379107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ec1266487ed0_24379107')) {function content_56ec1266487ed0_24379107($_smarty_tpl) {?><div class="container my">
<?php echo $_smarty_tpl->tpl_vars['wa']->value->myNav('menu-h bottom-padded');?>


<h1>Мой профиль</h1>

<?php if ($_smarty_tpl->tpl_vars['saved']->value){?>
    <strong><i class="icon16 saved"></i><span style="color:green">Контактная информация успешно обновлена!</span></strong>
<?php }?>

<?php if (isset($_GET['emailconfirmed'])&&$_GET['emailconfirmed']==1){?>
    <strong><i class="icon16 saved"></i><span style="color:green">Контактная информация успешно обновлена!</span></strong>
<?php }?>

<div id="wa-my-info-wrapper">
    <div class="wa-form" id="wa-my-info-read-wrapper"<?php if (!empty($_smarty_tpl->tpl_vars['form']->value->errors)){?> style="display: none;"<?php }?>>

        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
            <div class="wa-field">
                <div class="wa-name"><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</div>
                <div class="wa-value"><?php echo $_smarty_tpl->tpl_vars['info']->value['value'];?>
</div>
            </div>
        <?php } ?>

        <div class="wa-field">
            <div class="wa-value">
                <input type="button" class="button" id="wa-my-info-edit" value="Редактировать"/>
            </div>
        </div>

    </div>

    <div class="clear-both"></div>

    <form action="" enctype="multipart/form-data" method="post"<?php if (empty($_smarty_tpl->tpl_vars['form']->value->errors)){?> style="display: none;"<?php }?> id="wa-my-info-edit-wrapper">
        <div class="wa-form">

            <?php echo $_smarty_tpl->tpl_vars['form']->value->html();?>


            <div class="wa-field">
                <div class="wa-value">
                    <input type="submit" value="Сохранить">
                    <a href="#" id="wa-my-info-cancel">отмена</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $_smarty_tpl->tpl_vars['auth_adapters'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->authAdapters(true), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['auth_adapters']->value){?>
    <div class="clear-both"></div>
    <div class="wa-auth-adapters wa-connect">
        <h3>Связанные аккаунты</h3>

        <?php $_smarty_tpl->tpl_vars['linked_adapters'] = new Smarty_variable(array(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['other_adapters'] = new Smarty_variable(array(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auth_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->user(((string)$_smarty_tpl->tpl_vars['a']->value->getId())."_id")){?>
                <?php $_smarty_tpl->createLocalArrayVariable('linked_adapters', null, 0);
$_smarty_tpl->tpl_vars['linked_adapters']->value[] = $_smarty_tpl->tpl_vars['a']->value;?>
            <?php }else{ ?>
                <?php $_smarty_tpl->createLocalArrayVariable('other_adapters', null, 0);
$_smarty_tpl->tpl_vars['other_adapters']->value[] = $_smarty_tpl->tpl_vars['a']->value;?>
            <?php }?>
        <?php } ?>

        <?php if ($_smarty_tpl->tpl_vars['linked_adapters']->value){?>
            <ul>
            <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linked_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                <li><span><img alt="<?php echo $_smarty_tpl->tpl_vars['a']->value->getName();?>
" src="<?php echo $_smarty_tpl->tpl_vars['a']->value->getIcon();?>
"/><?php echo $_smarty_tpl->tpl_vars['a']->value->getName();?>
</span></li>
            <?php } ?>
            </ul>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['other_adapters']->value){?>
            <p>Подключите этот аккаунт к вашим аккаунтам в соцсетях, чтобы в следующий раз входить на сайт без ввода пароля:</p>
            <div class="wa-auth-adapters"><ul>
                <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value->getUrl();?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['a']->value->getName();?>
" src="<?php echo $_smarty_tpl->tpl_vars['a']->value->getIcon();?>
"/><?php echo $_smarty_tpl->tpl_vars['a']->value->getName();?>
</a></li>
                <?php } ?>
            </ul></div>
            <script type="text/javascript">
                $("div.wa-auth-adapters a").click(function () {
                    var left = (screen.width - 600) / 2;
                    var top = (screen.height - 400) / 2;
                    window.open($(this).attr('href'),'oauth', "width=600,height=400,left="+left+",top="+top+",status=no,toolbar=no,menubar=no");
                    return false;
                });
            </script>
        <?php }?>

    </div>
<?php }?>

<script>
    (function () {
        var $wrapper = $('#wa-my-info-wrapper'),
            $form = $wrapper.find('#wa-my-info-edit-wrapper'),
            $info = $wrapper.find('#wa-my-info-read-wrapper'),
            $password = $form.find('.wa-field-password'),
            $photo = $form.find('.wa-field-photo');

        if ($password.length) {
            var $change_link = $('<span><a href="#">Сменить пароль</a></span>'),
                $password_inputs = $password.find('p');

            $password.find('.wa-value').prepend($change_link);

            $change_link.on('click', 'a', function(e) {
                e.preventDefault();
                $change_link.hide();
                $password_inputs.slideDown();
            });
        }

        if ($photo.length) {
            var $delete_photo = $('<span><a href="#">Удалить фото</a></span>'),
                $photo_input = $photo.find('[name="profile[photo]"]'),
                $user_photo = $photo.find('img:first'),
                $default_photo = $photo.find('img:last');

            if ($user_photo[0] != $default_photo[0]) {
                $default_photo
                        .hide()
                        .after($delete_photo);

                $delete_photo.on('click', 'a', function(e) {
                    e.preventDefault();
                    $default_photo.show();
                    $user_photo.hide();
                    $delete_photo.hide();
                    $photo_input.val('');
                });
            } else {
                $default_photo.show();
            }
        }

        $wrapper
                .on('click', '#wa-my-info-edit', function (e) {
                    e.preventDefault();
                    if ($password.length) {
                        $change_link.show();
                        $password_inputs.hide();
                    }
                    if ($photo.length) {
                        if ($user_photo[0] != $default_photo[0]) {
                            $delete_photo.show();
                            $default_photo.hide();
                        }
                    }
                    $form.show();
                    $info.hide();
                })
                .on('click', '#wa-my-info-cancel', function(e){
                    e.preventDefault();
                    $form.hide();
                    $info.show();
                });
    })();
</script>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount',true);?>

</div><?php }} ?>