<?php /* Smarty version Smarty-3.1.14, created on 2016-04-03 20:17:57
         compiled from "/home/it/web/wa-data/public/site/themes/site_camera/index.html" */ ?>
<?php /*%%SmartyHeaderCode:74041447556ebf01f3ac082-78621307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9023d703dfa51a7e93bcd8c5e418e2d4aa6fe7' => 
    array (
      0 => '/home/it/web/wa-data/public/site/themes/site_camera/index.html',
      1 => 1459703871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74041447556ebf01f3ac082-78621307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebf01f4e2b57_91203227',
  'variables' => 
  array (
    'wa' => 0,
    'canonical' => 0,
    'rss' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_static_url' => 0,
    'wa_active_theme_path' => 0,
    'wa_app' => 0,
    'wa_url' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebf01f4e2b57_91203227')) {function content_56ebf01f4e2b57_91203227($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->title(), ENT_QUOTES, 'UTF-8', true);?>
</title>
    <meta name="Keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('keywords'), ENT_QUOTES, 'UTF-8', true);?>
" />
    <meta name="Description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
" />
    <meta name="viewport" content="width=device-width, initial-scale=1<?php if ($_smarty_tpl->tpl_vars['wa']->value->isMobile()){?>, maximum-scale=1, user-scalable=0<?php }?>" />

    <?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?>
        <!-- rss -->
        <?php $_smarty_tpl->tpl_vars['rss'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->rssUrl(), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['rss']->value){?><link rel="alternate" type="application/rss+xml" title="RSS &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['rss']->value;?>
"><?php }?>
    <?php }?>

    <!-- css -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
site_camera.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css"/>
    
    
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
 

    <!-- js -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
site_camera.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
jquery.bxslider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
 

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <?php echo $_smarty_tpl->tpl_vars['wa']->value->head();?>
 

    <!--[if lt IE 9]>
    <script>
    document.createElement('header');
    document.createElement('nav');
    document.createElement('section');
    document.createElement('article');
    document.createElement('aside');
    document.createElement('footer');
    document.createElement('figure');
    document.createElement('hgroup');
    document.createElement('menu');
    </script>
    <![endif]-->

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['wa_app']->value;?>
">
    <div id="header">
        <div class="container" role="navigation">
          <div class="h-left">
            <div class="logo">
              <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
">site.camera</a>
            </div>
          </div><div class="h-right">  
          <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>
              <ul class="auth">
                  <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                      <?php if ($_smarty_tpl->tpl_vars['wa']->value->myUrl()){?>
                          <li>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->myUrl();?>
campic/">Личный кабинет</a>
                          </li>
                      <?php }else{ ?>
                           <li>Личный кабинет</li>
                      <?php }?>
                      <li><a href="?logout">Выйти</a></li>
                  <?php }else{ ?>
                      <li><a id="login-signup-btn" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Вход</a></li>
                      <li><a id="login-signup-btn" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
">Регистрация</a></li>
                  <?php }?>
              </ul>
          <?php }?>
            
          </div>
        </div>
    </div>
    <div class="clear-both"></div>
    <?php if (isset($_smarty_tpl->tpl_vars['page']->value['headform'])){?>
    <div id="under-header">
      <div class="container">
        <div class="uh-left">
          <img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['background'];?>
">
        </div><div class="uh-right">
          
          
           <div class="request-form">
           <div class="head-form-text">
              <span>Транслируй фотографии на сайт</span> с любых камер в режиме реального времени
            </div>
            <div class="submit-wrapper">
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
shop/signup/" class="submit-head">Бесплатно <span class="submit-text-fix">подключить камеру</span></a>
            </div>
          </div>
          

          <div class="form-bg-img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['background'];?>
">
          </div>
        </div>
      </div>
    </div>
    <div class="clear-both"></div>
    <div id="faq-info-block">
      <div class="container">
        <ul><li<?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()=='/kupit-nastroennuyu-kameru/'){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
kupit-nastroennuyu-kameru/">Купить настроенную камеру</a></li><li<?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()=='/chasto-zadavaemye-voprosy/'){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
chasto-zadavaemye-voprosy/">Часто задаваемые вопросы</a></li><li<?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()=='/instruktsii-po-podklyucheniyu-kamer/'){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
instruktsii-po-podklyucheniyu-kamer/">Инструкции по подключению камер</a></li></ul>
      </div>
    </div>
    <div class="clear-both"></div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/content.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="clear-both"></div>
    <?php if (isset($_smarty_tpl->tpl_vars['page']->value['feedback'])){?>
    <div id="feedback">
      <div class="container">
        <div class="feedback-title">Напишите нам</div>
        <form class="feedback-form" method="post" action="" id="footerform">
          <div class="feedback-hint">
            
            <p>Напишите вопрос и мы ответим Вам в течении 15 мин.</p>
          </div>
          <input type="text" name="footeremail" id="footeremail" placeholder="Ваш e-mail" value="">
          <textarea name="message" id="message" placeholder="Ваш вопрос"></textarea>
          <input type="submit" value="Отправить сообщение" class="submit-footer">
        </form>
      </div>
    </div>
    <div class="clear-both"></div>
    <?php }?>
    <div id="footer">
      <div class="footer-line"></div>
      <div class="container">
          <div class="h-left">
            <div class="logo">
              <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
" rel="nofollow">site.camera</a>
            </div>
          </div><div class="h-right">
            
            <div class="confidentional"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
politika-konfidencialnosti/">Политика конфиденциальности</a></div>
          </div>
        </div>
    </div>
    
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=ap2VXMSU9xfsJVpfgSUoCJeQNyrW1CLrG/rz/cpuXc2nRxMfFo9WSMl9Nej90tn9w0zjFhOCAHx6p2ZwgaqhDq5KAvYpXRX*jxqHHbMve/VGWLsgPmgcHx5en/dZOEiNW6EjmhjG/z7nO3ubP3/4JuGhh4ZDOy0NfL71WkXgUhg-';</script>
    <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter36356130 = new Ya.Metrika({ id:36356130, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/36356130" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    
</body>
</html><?php }} ?>