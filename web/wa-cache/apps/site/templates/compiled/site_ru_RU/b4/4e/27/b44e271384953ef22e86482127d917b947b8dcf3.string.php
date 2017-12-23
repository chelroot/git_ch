<?php /* Smarty version Smarty-3.1.14, created on 2016-03-26 08:22:35
         compiled from "b44e271384953ef22e86482127d917b947b8dcf3" */ ?>
<?php /*%%SmartyHeaderCode:178635126856f61c9b0b6352-36155343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b44e271384953ef22e86482127d917b947b8dcf3' => 
    array (
      0 => 'b44e271384953ef22e86482127d917b947b8dcf3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '178635126856f61c9b0b6352-36155343',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56f61c9b0fb080_79264405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f61c9b0fb080_79264405')) {function content_56f61c9b0fb080_79264405($_smarty_tpl) {?><p><span style="font-size: 24px;"><span style="font-family: Arial;">Камера
периодически отправляет снимок в виде
файла на специальный сервер. 
</span></span></p><p><span style="font-size: 24px;"><span style="font-family: Arial;">Сервер
присваивает уникальное имя этому файлу
и делает доступным для скачивания. 
</span></span></p><p><span style="font-size: 24px;"><span style="font-family: Arial;">Веб мастер
вставляет на сайт HTML — код, в виде внешней
ссылки. 
</span></span></p><p><span style="font-size: 24px;"><span style="font-family: Arial;">Сайт, передавая
страничку пользователю, вставляет
последний актуальный снимок, полученный
от камеры.     
</span></span></p><p><span style="font-size: 24px;"><span style="font-family: Arial;">Некоторые
технические подробности:</span></span></p><p><span style="font-size: 24px;"><span style="font-family: Arial;">Современные
видеокамеры имеют встроенный FTP-клиент,
который никаким образом не влияет на
работу других функций камеры. То есть
регистраторы, трансляция видеопотока
продолжают работать как обычно.</span></span></p><p><span style="font-size: 24px;"><span style="font-family: Arial;">Если нет
внутреннего FTP-клиента, можно подключать
через внешнюю программку. Пример
подключения распространенных  веб-камер,
 для которых написано много бесплатных
приложений. 
</span></span></p><p><br></p><p><br>
</p><p><span style="font-size: 24px;">Современные сетевые видеокамеры помимо трансляции видеопотока могут </span></p><p><span style="font-size: 24px;">делать скриншоты в виде обычных фотографий. Это не перегружает каналы </span></p><p><span style="font-size: 24px;">связи и не влияет на традиционное использование видеорегистраторов. А в </span></p><p><span style="font-size: 24px;">некоторых случаях могут их заменять. Например, если вам достаточно иметь</span></p><p><span style="font-size: 24px;"> запись в виде отдельных изображений. Более того скриншоты удобно </span></p><p><span style="font-size: 24px;">разместить на вашем сайте в виде внешних ссылок.</span></p><?php }} ?>