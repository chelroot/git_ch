-- MySQL dump 10.13  Distrib 5.5.43, for Linux (i686)
--
-- Host: localhost    Database: it
-- ------------------------------------------------------
-- Server version	5.5.43-alt0.M70P.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacts_history`
--

DROP TABLE IF EXISTS `contacts_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hash` text NOT NULL,
  `contact_id` bigint(20) unsigned NOT NULL,
  `position` int(11) unsigned NOT NULL DEFAULT '0',
  `accessed` datetime DEFAULT NULL,
  `cnt` int(11) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`),
  KEY `contact_id` (`contact_id`),
  KEY `accessed` (`contact_id`,`accessed`),
  KEY `hash` (`contact_id`,`hash`(24)),
  KEY `position` (`contact_id`,`position`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts_history`
--

LOCK TABLES `contacts_history` WRITE;
/*!40000 ALTER TABLE `contacts_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts_rights`
--

DROP TABLE IF EXISTS `contacts_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts_rights` (
  `group_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `writable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`,`category_id`),
  KEY `list_id` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts_rights`
--

LOCK TABLES `contacts_rights` WRITE;
/*!40000 ALTER TABLE `contacts_rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_block`
--

DROP TABLE IF EXISTS `site_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_block` (
  `id` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `create_datetime` datetime NOT NULL,
  `description` text NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_block`
--

LOCK TABLES `site_block` WRITE;
/*!40000 ALTER TABLE `site_block` DISABLE KEYS */;
INSERT INTO `site_block` VALUES ('mainpage','{* Примеры работы камер - начало *}\r\n<div id=\"main-website-sections\">\r\n  <div class=\"container\">\r\n    <div class=\"menu-slogan\">\r\n      Примеры работы камер\r\n    </div>\r\n    <ul class=\"menu-buttons closed\">\r\n        {foreach $wa->site->pages() as $a}\r\n            {if $a.mainmenu}\r\n            <li{if $a.url==$wa->currentUrl()} class=\"selected\"{/if}>\r\n              <a href=\"{$a.url}\">\r\n                <div class=\"menu-block\">\r\n                  {if !empty($a.img)}\r\n                    <img src=\"{$a.img}\" />\r\n                  {/if}\r\n                  <div class=\"menu-title\">\r\n                    <span>{$a.name}</span>\r\n                  </div>\r\n                </div>\r\n              </a>\r\n            </li>\r\n            {/if}\r\n        {/foreach}\r\n    </ul>\r\n    <div class=\"show-all-menu\">\r\n    <a href=\"#\">Показать все</a>\r\n    </div>\r\n  </div>\r\n</div>\r\n<div class=\"clear-both\"></div>\r\n{* Примеры работы камер - конец *}\r\n{* Подключить камеру легко - начало *}\r\n<div id=\"camera-connection\">\r\n  <div class=\"container\">\r\n    <div class=\"connections-title\">\r\n      Подключить камеру легко\r\n    </div>\r\n    <ul class=\"connection-steps\">\r\n      <li class=\"step step_act\">\r\n        <img src=\"{$wa_theme_url}img/connection-step-one.png\">\r\n        <a href=\"#\">Регистрируетесь на сайте</a>\r\n      </li>\r\n      <li class=\"step step_arrow\">\r\n        <img src=\"{$wa_theme_url}img/connection-step-arrow.png\">\r\n      </li>\r\n      <li class=\"step step_act\">\r\n        <img src=\"{$wa_theme_url}img/connection-step-two.png\">\r\n        <a href=\"#\">Настраиваете камеру</a>\r\n      </li>\r\n      <li class=\"step step_arrow\">\r\n        <img src=\"{$wa_theme_url}img/connection-step-arrow.png\">\r\n      </li>\r\n      <li class=\"step step_act\">\r\n        <img src=\"{$wa_theme_url}img/connection-step-three.png\">\r\n        <a href=\"#\">Размещаете на сайте</a>\r\n      </li>\r\n    </ul>\r\n  </div>\r\n</div>\r\n<div class=\"clear-both\"></div>\r\n{* Подключить камеру легко - конец *}\r\n{* Форма в середине с описанием - начало *}\r\n<div id=\"description\">\r\n  <div class=\"container\">\r\n  <div class=\"container-left\">\r\n      <p>В отличии от видеопотока пересылаются снимки, отдельными файлами и с учетом загрузки каналов связи.</p>\r\n      <p>Современные камеры подключаются к интернет напрямую и передают файлы через облако. А сайт уже беспрепятственно массово раздает страницы, в обработанном виде, с хорошим качеством и с автоматическим обновлением.</p>\r\n      <p class=\"bold\">Хорошее дополнение к онлайн-консультантам, интернет продажам и другим приложениям.</p>\r\n    </div><div class=\"container-right\"> \r\n      <form class=\"request-form\" method=\"post\" action=\"\" id=\"middleform\">\r\n        <input type=\"text\" name=\"email\" id=\"middleemail\" placeholder=\"Ваш e-mail\" value=\"\">\r\n        <div class=\"submit-wrapper\">\r\n          <input type=\"submit\" value=\"Бесплатно\" class=\"submit-middle\"><span class=\"submit-text-fix\">подключить камеру</span>\r\n        </div>\r\n      </form>\r\n    </div>\r\n  </div>\r\n</div>\r\n<div class=\"clear-both\"></div>\r\n{* Форма в середине с описанием - конец *}\r\n{* Наши клиенты - начало *}\r\n<div id=\"our-clients\">\r\n  <div class=\"container\">\r\n    <div class=\"clients-title\">\r\n      Наши клиенты\r\n    </div>\r\n    <ul class=\"clients-show\">\r\n      <li><img src=\"{$wa_theme_url}img/clients/adidas.png\"></li>\r\n      <li><img src=\"{$wa_theme_url}img/clients/ea.png\"></li>\r\n      <li><img src=\"{$wa_theme_url}img/clients/mcdonalds.png\"></li>\r\n      <li><img src=\"{$wa_theme_url}img/clients/yukos.png\"></li>\r\n      <li><img src=\"{$wa_theme_url}img/clients/adidas.png\"></li>\r\n      <li><img src=\"{$wa_theme_url}img/clients/ea.png\"></li>\r\n      <li><img src=\"{$wa_theme_url}img/clients/mcdonalds.png\"></li>\r\n      <li><img src=\"{$wa_theme_url}img/clients/yukos.png\"></li>\r\n    </ul>\r\n    <script>\r\n    $(\'.clients-show\').bxSlider({\r\n      adaptiveHeight: true,\r\n      auto:true,\r\n      controls: false,\r\n      maxSlides: 4,\r\n      minSlides: 4,\r\n      moveSlides: 1,\r\n      pager: false,\r\n      pause: 4000,\r\n      slideMargin: 200,\r\n      slideWidth: 100\r\n    });\r\n    </script>\r\n  </div>\r\n</div>\r\n<div class=\"clear-both\"></div>\r\n{* Наши клиенты - конец *}','2016-02-16 14:27:38','Главная страница, вывод через блоки т.к. стандартный функционал редактора побьет верстку',0),('construction','    <div id=\"connect-camera\">\r\n      <div class=\"container\">\r\n        <div class=\"connect-title\">\r\n          <p class=\"large\">Вам следует подключить камеру</p>\r\n          <p class=\"small\">к строительному обьекту потому что</p>\r\n        </div>\r\n        <ul>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-1.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Ваши клиенты всегда будут знать <span class=\"color-bold\">в какой стадии строительства находится дом</span></p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-2.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Онлайн-камера привлечет <span class=\"color-bold\">дополнительных клиентов</span> на Ваш сайт</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-3.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Онлайн-камера создаст <span class=\"color-bold\">дополнительный имидж</span> солидной, открытой и честной организации</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-4.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Подойдет <span class=\"color-bold\">для удаленных стационарных площадок</span> где не быстрый интернет и ограниченый трафик</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-5.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Вы будете <span class=\"color-bold\">на шаг впереди конкурентов</span></p>\r\n            </div>\r\n          </li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"photo-with-form\">\r\n      <div class=\"container\">\r\n        <div class=\"container-left\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-3.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-4.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-5.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-6.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div><div class=\"container-right\">\r\n          <form class=\"request-form\" method=\"post\" action=\"\" id=\"middleform\">\r\n            <input type=\"text\" name=\"email\" id=\"middleemail\" placeholder=\"Ваш e-mail\" value=\"\">\r\n            <div class=\"submit-wrapper\">\r\n              <input type=\"submit\" value=\"Бесплатно\" class=\"submit-middle\"><span class=\"submit-text-fix\">подключить камеру</span>\r\n            </div>\r\n          </form>\r\n        </div><div class=\"container-right-photo\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"information\">\r\n      <div class=\"container\">\r\n        <div class=\"information-title\">Полезная информация</div>\r\n        <div class=\"container-left\">\r\n          <p>В отличии от видеопотока пересылаются снимки, отдельными файлами и с учетом загрузки каналов связи.</p>\r\n          <p>Современные камеры подключаются к интернет напрямую и передают файлы через облако. А сайт уже беспрепятственно массово раздает страницы, в обработанном виде, с хорошим качеством и с автоматическим обновлением.</p>\r\n          <p>Хорошее дополнение к онлайн-консультантам, интернет продажам и другим приложениям.</p>\r\n        </div><div class=\"container-right\">\r\n          <ul class=\"information-ul\">\r\n            <li><a href=\"#\">Регистрация камеры</a></li>\r\n            <li><a href=\"#\">Как выбрать подходящую камеру</a></li>\r\n            <li><a href=\"#\">Сколько камер я могу подключить</a></li>\r\n            <li><a href=\"#\">Как установить странсляцию на сайт</a></li>\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>','2016-02-16 14:28:38','Строитель организации',0),('shopping_centers','    <div id=\"connect-camera\">\r\n      <div class=\"container\">\r\n        <div class=\"connect-title\">\r\n          <p class=\"large\">Вам следует подключить камеру</p>\r\n          <p class=\"small\">к строительному обьекту потому что</p>\r\n        </div>\r\n        <ul>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-1.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Ваши клиенты всегда будут знать <span class=\"color-bold\">в какой стадии строительства находится дом</span></p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-2.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Онлайн-камера привлечет <span class=\"color-bold\">дополнительных клиентов</span> на Ваш сайт</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-3.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Онлайн-камера создаст <span class=\"color-bold\">дополнительный имидж</span> солидной, открытой и честной организации</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-4.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Подойдет <span class=\"color-bold\">для удаленных стационарных площадок</span> где не быстрый интернет и ограниченый трафик</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-5.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Вы будете <span class=\"color-bold\">на шаг впереди конкурентов</span></p>\r\n            </div>\r\n          </li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"photo-with-form\">\r\n      <div class=\"container\">\r\n        <div class=\"container-left\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-3.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-4.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-5.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-6.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div><div class=\"container-right\">\r\n          <form class=\"request-form\" method=\"post\" action=\"\" id=\"middleform\">\r\n            <input type=\"text\" name=\"email\" id=\"middleemail\" placeholder=\"Ваш e-mail\" value=\"\">\r\n            <div class=\"submit-wrapper\">\r\n              <input type=\"submit\" value=\"Бесплатно\" class=\"submit-middle\"><span class=\"submit-text-fix\">подключить камеру</span>\r\n            </div>\r\n          </form>\r\n        </div><div class=\"container-right-photo\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"information\">\r\n      <div class=\"container\">\r\n        <div class=\"information-title\">Полезная информация</div>\r\n        <div class=\"container-left\">\r\n          <p>В отличии от видеопотока пересылаются снимки, отдельными файлами и с учетом загрузки каналов связи.</p>\r\n          <p>Современные камеры подключаются к интернет напрямую и передают файлы через облако. А сайт уже беспрепятственно массово раздает страницы, в обработанном виде, с хорошим качеством и с автоматическим обновлением.</p>\r\n          <p>Хорошее дополнение к онлайн-консультантам, интернет продажам и другим приложениям.</p>\r\n        </div><div class=\"container-right\">\r\n          <ul class=\"information-ul\">\r\n            <li><a href=\"#\">Регистрация камеры</a></li>\r\n            <li><a href=\"#\">Как выбрать подходящую камеру</a></li>\r\n            <li><a href=\"#\">Сколько камер я могу подключить</a></li>\r\n            <li><a href=\"#\">Как установить странсляцию на сайт</a></li>\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>','2016-02-16 16:52:33','Торгов центры',0),('delivery','    <div id=\"connect-camera\">\r\n      <div class=\"container\">\r\n        <div class=\"connect-title\">\r\n          <p class=\"large\">Вам следует подключить камеру</p>\r\n          <p class=\"small\">к строительному обьекту потому что</p>\r\n        </div>\r\n        <ul>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-1.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Ваши клиенты всегда будут знать <span class=\"color-bold\">в какой стадии строительства находится дом</span></p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-2.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Онлайн-камера привлечет <span class=\"color-bold\">дополнительных клиентов</span> на Ваш сайт</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-3.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Онлайн-камера создаст <span class=\"color-bold\">дополнительный имидж</span> солидной, открытой и честной организации</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-4.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Подойдет <span class=\"color-bold\">для удаленных стационарных площадок</span> где не быстрый интернет и ограниченый трафик</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-5.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Вы будете <span class=\"color-bold\">на шаг впереди конкурентов</span></p>\r\n            </div>\r\n          </li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"photo-with-form\">\r\n      <div class=\"container\">\r\n        <div class=\"container-left\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-3.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-4.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-5.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-6.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div><div class=\"container-right\">\r\n          <form class=\"request-form\" method=\"post\" action=\"\" id=\"middleform\">\r\n            <input type=\"text\" name=\"email\" id=\"middleemail\" placeholder=\"Ваш e-mail\" value=\"\">\r\n            <div class=\"submit-wrapper\">\r\n              <input type=\"submit\" value=\"Бесплатно\" class=\"submit-middle\"><span class=\"submit-text-fix\">подключить камеру</span>\r\n            </div>\r\n          </form>\r\n        </div><div class=\"container-right-photo\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"information\">\r\n      <div class=\"container\">\r\n        <div class=\"information-title\">Полезная информация</div>\r\n        <div class=\"container-left\">\r\n          <p>В отличии от видеопотока пересылаются снимки, отдельными файлами и с учетом загрузки каналов связи.</p>\r\n          <p>Современные камеры подключаются к интернет напрямую и передают файлы через облако. А сайт уже беспрепятственно массово раздает страницы, в обработанном виде, с хорошим качеством и с автоматическим обновлением.</p>\r\n          <p>Хорошее дополнение к онлайн-консультантам, интернет продажам и другим приложениям.</p>\r\n        </div><div class=\"container-right\">\r\n          <ul class=\"information-ul\">\r\n            <li><a href=\"#\">Регистрация камеры</a></li>\r\n            <li><a href=\"#\">Как выбрать подходящую камеру</a></li>\r\n            <li><a href=\"#\">Сколько камер я могу подключить</a></li>\r\n            <li><a href=\"#\">Как установить странсляцию на сайт</a></li>\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>','2016-02-16 16:53:21','Службы доставк',0),('videokons','<div id=\"connect-camera\">\r\n      <div class=\"container\">\r\n        <div class=\"connect-title\">\r\n          <p class=\"large\">Вам следует подключить камеру</p>\r\n          <p class=\"small\">к строительному обьекту потому что</p>\r\n        </div>\r\n        <ul>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-1.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Ваши клиенты всегда будут знать <span class=\"color-bold\">в какой стадии строительства находится дом</span></p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-2.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Онлайн-камера привлечет <span class=\"color-bold\">дополнительных клиентов</span> на Ваш сайт</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-3.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Онлайн-камера создаст <span class=\"color-bold\">дополнительный имидж</span> солидной, открытой и честной организации</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-4.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Подойдет <span class=\"color-bold\">для удаленных стационарных площадок</span> где не быстрый интернет и ограниченый трафик</p>\r\n            </div>\r\n          </li>\r\n          <li>\r\n            <div class=\"connect-image-item\">\r\n              <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-5.png\">\r\n            </div>\r\n            <div class=\"connect-text-item\">\r\n              <p>Вы будете <span class=\"color-bold\">на шаг впереди конкурентов</span></p>\r\n            </div>\r\n          </li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"photo-with-form\">\r\n      <div class=\"container\">\r\n        <div class=\"container-left\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-3.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-4.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-5.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-6.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div><div class=\"container-right\">\r\n          <form class=\"request-form\" method=\"post\" action=\"\" id=\"middleform\">\r\n            <input type=\"text\" name=\"email\" id=\"middleemail\" placeholder=\"Ваш e-mail\" value=\"\">\r\n            <div class=\"submit-wrapper\">\r\n              <input type=\"submit\" value=\"Бесплатно\" class=\"submit-middle\"><span class=\"submit-text-fix\">подключить камеру</span>\r\n            </div>\r\n          </form>\r\n        </div><div class=\"container-right-photo\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"information\">\r\n      <div class=\"container\">\r\n        <div class=\"information-title\">Полезная информация</div>\r\n        <div class=\"container-left\">\r\n          <p>В отличии от видеопотока пересылаются снимки, отдельными файлами и с учетом загрузки каналов связи.</p>\r\n          <p>Современные камеры подключаются к интернет напрямую и передают файлы через облако. А сайт уже беспрепятственно массово раздает страницы, в обработанном виде, с хорошим качеством и с автоматическим обновлением.</p>\r\n          <p>Хорошее дополнение к онлайн-консультантам, интернет продажам и другим приложениям.</p>\r\n        </div><div class=\"container-right\">\r\n          <ul class=\"information-ul\">\r\n            <li><a href=\"#\">Регистрация камеры</a></li>\r\n            <li><a href=\"#\">Как выбрать подходящую камеру</a></li>\r\n            <li><a href=\"#\">Сколько камер я могу подключить</a></li>\r\n            <li><a href=\"#\">Как установить странсляцию на сайт</a></li>\r\n          </ul>\r\n        </div>','2016-02-16 18:43:52','Видеоконсультант',0),('mainpage_backup','<div id=\"main-website-sections\">\r\n      <div class=\"container\">\r\n        <div class=\"menu-slogan\">\r\n          Примеры работы камер\r\n        </div>\r\n        <ul class=\"menu-buttons closed\">\r\n            {foreach $wa->site->pages() as $a}\r\n                {if $a.mainmenu}\r\n                <li{if $a.url==$wa->currentUrl()} class=\"selected\"{/if}>\r\n                  <a href=\"{$a.url}\">\r\n                    <div class=\"menu-block\">\r\n                      {if !empty($a.img)}\r\n                        <img src=\"{$a.img}\" />\r\n                      {/if}\r\n                      <div class=\"menu-title\">\r\n                        {$a.name}\r\n                      </div>\r\n                    </div>\r\n                  </a>\r\n                </li>\r\n                {/if}\r\n            {/foreach}\r\n        </ul>\r\n        <div class=\"show-all-menu\">\r\n        <a href=\"#\">Показать все</a>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"camera-connection\">\r\n      <div class=\"container\">\r\n        <div class=\"connections-title\">\r\n          Подключить камеру легко\r\n        </div>\r\n        <ul class=\"connection-steps\">\r\n          <li class=\"step step_act\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-one.png\">\r\n            <span>Регистрируетесь на сайте</span>\r\n          </li>\r\n          <li class=\"step step_arrow\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-arrow.png\">\r\n          </li>\r\n          <li class=\"step step_act\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-two.png\">\r\n            <span>Настраиваете камеру</span>\r\n          </li>\r\n          <li class=\"step step_arrow\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-arrow.png\">\r\n          </li>\r\n          <li class=\"step step_act\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-three.png\">\r\n            <span>Размещаете на сайте</span>\r\n          </li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"description\">\r\n      <div class=\"container\">\r\n      <div class=\"container-left\">\r\n          <p>В отличии от видеопотока пересылаются снимки, отдельными файлами и с учетом загрузки каналов связи.</p>\r\n          <p>Современные камеры подключаются к интернет напрямую и передают файлы через облако. А сайт уже беспрепятственно массово раздает страницы, в обработанном виде, с хорошим качеством и с автоматическим обновлением.</p>\r\n          <p class=\"bold\">Хорошее дополнение к онлайн-консультантам, интернет продажам и другим приложениям.</p>\r\n        </div><div class=\"container-right\"> \r\n          <form class=\"request-form\" method=\"post\" action=\"\" id=\"middleform\">\r\n            <input type=\"text\" name=\"email\" id=\"middleemail\" placeholder=\"Ваш e-mail\" value=\"\">\r\n            <div class=\"submit-wrapper\">\r\n              <input type=\"submit\" value=\"Бесплатно\" class=\"submit-middle\"><span class=\"submit-text-fix\">подключить камеру</span>\r\n            </div>\r\n          </form>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"our-clients\">\r\n      <div class=\"container\">\r\n        <div class=\"clients-title\">\r\n          Наши клиенты\r\n        </div>\r\n        <ul class=\"clients-show\">\r\n          <li><img src=\"{$wa_theme_url}img/clients/adidas.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/ea.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/mcdonalds.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/yukos.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/adidas.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/ea.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/mcdonalds.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/yukos.png\"></li>\r\n        </ul>\r\n        <script>\r\n        $(\'.clients-show\').bxSlider({\r\n          adaptiveHeight: true,\r\n          auto:true,\r\n          controls: false,\r\n          maxSlides: 4,\r\n          minSlides: 4,\r\n          moveSlides: 1,\r\n          pager: false,\r\n          pause: 4000,\r\n          slideMargin: 200,\r\n          slideWidth: 100\r\n        });\r\n        </script>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>','2016-02-16 19:01:09','Бэкап контента главной страницы',0),('template_pages','{* Вам следует подключить камеру - начало *}\r\n<div id=\"connect-camera\">\r\n  <div class=\"container\">\r\n    <div class=\"connect-title\">\r\n      <p class=\"large\">Вам следует подключить камеру</p>\r\n      <p class=\"small\">к строительному обьекту потому что</p>\r\n    </div>\r\n    <ul>\r\n      <li>\r\n        <div class=\"connect-image-item\">\r\n          <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-1.png\">\r\n        </div>\r\n        <div class=\"connect-text-item\">\r\n          <p>Ваши клиенты всегда будут знать <span class=\"color-bold\">в какой стадии строительства находится дом</span></p>\r\n        </div>\r\n      </li>\r\n      <li>\r\n        <div class=\"connect-image-item\">\r\n          <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-2.png\">\r\n        </div>\r\n        <div class=\"connect-text-item\">\r\n          <p>Онлайн-камера привлечет <span class=\"color-bold\">дополнительных клиентов</span> на Ваш сайт</p>\r\n        </div>\r\n      </li>\r\n      <li>\r\n        <div class=\"connect-image-item\">\r\n          <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-3.png\">\r\n        </div>\r\n        <div class=\"connect-text-item\">\r\n          <p>Онлайн-камера создаст <span class=\"color-bold\">дополнительный имидж</span> солидной, открытой и честной организации</p>\r\n        </div>\r\n      </li>\r\n      <li>\r\n        <div class=\"connect-image-item\">\r\n          <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-4.png\">\r\n        </div>\r\n        <div class=\"connect-text-item\">\r\n          <p>Подойдет <span class=\"color-bold\">для удаленных стационарных площадок</span> где не быстрый интернет и ограниченый трафик</p>\r\n        </div>\r\n      </li>\r\n      <li>\r\n        <div class=\"connect-image-item\">\r\n          <img src=\"{$wa_theme_url}img/connections-icons/constructions/item-5.png\">\r\n        </div>\r\n        <div class=\"connect-text-item\">\r\n          <p>Вы будете <span class=\"color-bold\">на шаг впереди конкурентов</span></p>\r\n        </div>\r\n      </li>\r\n    </ul>\r\n  </div>\r\n</div>\r\n<div class=\"clear-both\"></div>\r\n{* Вам следует подключить камеру - конец *}\r\n{* Форма с фото - начало *}\r\n<div id=\"photo-with-form\">\r\n  <div class=\"container\">\r\n    <div class=\"container-left\">\r\n      <ul>\r\n        <li>\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n        </li>\r\n        <li>\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-3.jpg\">\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-4.jpg\">\r\n        </li>\r\n        <li>\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-5.jpg\">\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-6.jpg\">\r\n        </li>\r\n        <li>\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n        </li>\r\n      </ul>\r\n    </div><div class=\"container-right\">\r\n      <form class=\"request-form\" method=\"post\" action=\"\" id=\"middleform\">\r\n        <input type=\"text\" name=\"email\" id=\"middleemail\" placeholder=\"Ваш e-mail\" value=\"\">\r\n        <div class=\"submit-wrapper\">\r\n          <input type=\"submit\" value=\"Бесплатно\" class=\"submit-middle\"><span class=\"submit-text-fix\">подключить камеру</span>\r\n        </div>\r\n      </form>\r\n    </div><div class=\"container-right-photo\">\r\n      <ul>\r\n        <li>\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n        </li>\r\n        <li>\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n          <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n        </li>\r\n      </ul>\r\n    </div>\r\n  </div>\r\n</div>\r\n<div class=\"clear-both\"></div>\r\n{* Форма с фото - конец *}\r\n{* Полезная информация - начало *}\r\n<div id=\"information\">\r\n  <div class=\"container\">\r\n    <div class=\"information-title\">Полезная информация</div>\r\n    <div class=\"container-left\">\r\n      <p>В отличии от видеопотока пересылаются снимки, отдельными файлами и с учетом загрузки каналов связи.</p>\r\n      <p>Современные камеры подключаются к интернет напрямую и передают файлы через облако. А сайт уже беспрепятственно массово раздает страницы, в обработанном виде, с хорошим качеством и с автоматическим обновлением.</p>\r\n      <p>Хорошее дополнение к онлайн-консультантам, интернет продажам и другим приложениям.</p>\r\n    </div><div class=\"container-right\">\r\n      <ul class=\"information-ul\">\r\n        <li><a href=\"#\">Регистрация камеры</a></li>\r\n        <li><a href=\"#\">Как выбрать подходящую камеру</a></li>\r\n        <li><a href=\"#\">Сколько камер я могу подключить</a></li>\r\n        <li><a href=\"#\">Как установить странсляцию на сайт</a></li>\r\n      </ul>\r\n    </div>\r\n  </div>\r\n</div>\r\n<div class=\"clear-both\"></div>\r\n{* Полезная информация - конец *}','2016-02-16 19:01:58','Шаблон для создания блоков страниц, на основе блока construction',0),('primer','<div id=\"camera-connection\">\r\n      <div class=\"container\">\r\n        <div class=\"connections-title\">\r\n          Подключить камеру легко\r\n        </div>\r\n        <ul class=\"connection-steps\">\r\n          <li class=\"step step_act\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-one.png\">\r\n            <span>Регистрируетесь на сайте</span>\r\n          </li>\r\n          <li class=\"step step_arrow\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-arrow.png\">\r\n          </li>\r\n          <li class=\"step step_act\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-two.png\">\r\n            <span>Настраиваете камеру</span>\r\n          </li>\r\n          <li class=\"step step_arrow\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-arrow.png\">\r\n          </li>\r\n          <li class=\"step step_act\">\r\n            <img src=\"{$wa_theme_url}img/connection-step-three.png\">\r\n            <span>Размещаете на сайте</span>\r\n          </li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n        <div id=\"information\">\r\n      <div class=\"container\">\r\n        <div class=\"information-title\">Полезная информация</div>\r\n        <div class=\"container-left\">\r\n          <p>В отличии от видеопотока пересылаются снимки, отдельными файлами и с учетом загрузки каналов связи.</p>\r\n          <p>Современные камеры подключаются к интернет напрямую и передают файлы через облако. А сайт уже беспрепятственно массово раздает страницы, в обработанном виде, с хорошим качеством и с автоматическим обновлением.</p>\r\n          <p>Хорошее дополнение к онлайн-консультантам, интернет продажам и другим приложениям.</p>\r\n        </div><div class=\"container-right\">\r\n          <ul class=\"information-ul\">\r\n            <li><a href=\"#\">Регистрация камеры</a></li>\r\n            <li><a href=\"#\">Как выбрать подходящую камеру</a></li>\r\n            <li><a href=\"#\">Сколько камер я могу подключить</a></li>\r\n            <li><a href=\"#\">Как установить странсляцию на сайт</a></li>\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n        <div id=\"our-clients\">\r\n      <div class=\"container\">\r\n        <div class=\"clients-title\">\r\n          Наши клиенты\r\n        </div>\r\n        <ul class=\"clients-show\">\r\n          <li><img src=\"{$wa_theme_url}img/clients/adidas.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/ea.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/mcdonalds.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/yukos.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/adidas.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/ea.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/mcdonalds.png\"></li>\r\n          <li><img src=\"{$wa_theme_url}img/clients/yukos.png\"></li>\r\n        </ul>\r\n        <script>\r\n        $(\'.clients-show\').bxSlider({\r\n          adaptiveHeight: true,\r\n          auto:true,\r\n          controls: false,\r\n          maxSlides: 4,\r\n          minSlides: 4,\r\n          moveSlides: 1,\r\n          pager: false,\r\n          pause: 4000,\r\n          slideMargin: 200,\r\n          slideWidth: 100\r\n        });\r\n        </script>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>\r\n    <div id=\"photo-with-form\">\r\n      <div class=\"container\">\r\n        <div class=\"container-left\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-3.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-4.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-5.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-6.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div><div class=\"container-right\">\r\n          <form class=\"request-form\" method=\"post\" action=\"\" id=\"middleform\">\r\n            <input type=\"text\" name=\"email\" id=\"middleemail\" placeholder=\"Ваш e-mail\" value=\"\">\r\n            <div class=\"submit-wrapper\">\r\n              <input type=\"submit\" value=\"Бесплатно\" class=\"submit-middle\"><span class=\"submit-text-fix\">подключить камеру</span>\r\n            </div>\r\n          </form>\r\n        </div><div class=\"container-right-photo\">\r\n          <ul>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-1.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-2.jpg\">\r\n            </li>\r\n            <li>\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-7.jpg\">\r\n              <img src=\"{$wa_theme_url}img/photos/construction/photo-8.jpg\">\r\n            </li>\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear-both\"></div>','2016-02-16 21:53:12','Пример сборного блока',0);
/*!40000 ALTER TABLE `site_block` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_domain`
--

DROP TABLE IF EXISTS `site_domain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(128) NOT NULL DEFAULT '',
  `style` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_domain`
--

LOCK TABLES `site_domain` WRITE;
/*!40000 ALTER TABLE `site_domain` DISABLE KEYS */;
INSERT INTO `site_domain` VALUES (1,'it.site.camera','','');
/*!40000 ALTER TABLE `site_domain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_page`
--

DROP TABLE IF EXISTS `site_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain_id` int(11) NOT NULL,
  `route` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) DEFAULT NULL,
  `full_url` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `create_datetime` datetime NOT NULL,
  `update_datetime` datetime NOT NULL,
  `create_contact_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `url` (`domain_id`,`route`,`full_url`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_page`
--

LOCK TABLES `site_page` WRITE;
/*!40000 ALTER TABLE `site_page` DISABLE KEYS */;
INSERT INTO `site_page` VALUES (1,1,'*','Главная','','','','{$wa->block(\"mainpage\")} ','2016-02-16 14:26:48','2016-02-16 19:11:16',1,1,1,NULL),(2,1,'*','Строительные организации','','stroitelnye-organizatsii/','stroitelnye-organizatsii/','<p>{$wa->block(\"construction\")}</p>','2016-02-16 14:29:25','2016-02-16 21:27:53',1,2,1,NULL),(3,1,'*','Торговые центры','','torgovye-tsentry/','torgovye-tsentry/','<p>{$wa->block(\"shopping_centers\")}</p>','2016-02-16 14:59:33','2016-02-16 21:04:21',1,3,1,NULL),(4,1,'*','Службы доставки','','sluzhby-dostavki/','sluzhby-dostavki/','<p>{$wa->block(\"delivery\")}</p>','2016-02-16 14:59:51','2016-02-16 20:12:04',1,4,1,NULL),(5,1,'*','Видеоконсультант','','videokonsultant/','videokonsultant/','<p>{$wa->block(\"videokons\")}</p>','2016-02-16 18:45:05','2016-02-16 21:49:23',1,5,1,NULL),(6,1,'*','Строительные организайции','','stroitelnye-organizaytsii1/','stroitelnye-organizaytsii1/','<p style=\"text-align: center;\"><span style=\"font-family: Verdana;\"><span style=\"font-size: 18px;\">Так будет выглядеть обычная страница если не вставлять html код из блока. Просто текст и можно вручную вставить картинки аля ворд:\r\n</span></span></p><p style=\"text-align: center;\"><img src=\"/wa-data/public/site/img/connection-step-two.png\">\r\n<img src=\"/wa-data/public/site/img/connection-step-one.png\">\r\n<img src=\"/wa-data/public/site/img/connection-step-three.png\">\r\n</p>','2016-02-16 21:28:17','2016-02-16 21:55:03',1,6,1,NULL),(7,1,'*','Торговые центры','','torgovye-tsentry1/','torgovye-tsentry1/','{$wa->block(\"primer\")}','2016-02-16 21:28:37','2016-02-16 21:54:21',1,7,1,NULL),(8,1,'*','Примеры работы камер','','primery-raboty-kamer/','primery-raboty-kamer/','<p style=\"text-align: center;\"><em><strong></strong></em><strong><span style=\"font-size: 20px;\"><span style=\"color: rgb(31, 73, 125);\">Внимание!!! Только у нас!!! Новое слово в торговле!!! </span></span></strong><em><strong></strong></em>\r\n</p><p style=\"text-align: center;\"><em><strong><span style=\"font-size: 14px;\">Вы звоните по телефону, а мы  показываем товар.</span></strong></em><span style=\"font-size: 14px;\"></span><em><strong><span style=\"font-size: 14px;\">Общайтесь! Смотрите!</span></strong></em>\r\n</p><p style=\"text-align: center;\"><em><strong> <span style=\"font-size: 14px;\">Нажмите прямо сейчас!  Камеры передвижные!</span></strong></em>\r\n</p><p style=\"text-align: center;\"><a target=\"_blank\" href=\"http://chelsi174.ru/vk/gl\"><img style=\"width: 588px; height: 452px;\" src=\"http://chelsi174.ru/foto/gr1.jpg\" alt=\"Видеоконсультант\" height=\"452\" width=\"588\"><strong></strong></a><strong><a href=\"http://chelsi174.ru/vk/gl1/\"><img style=\"width: 598px; height: 451px;\" src=\"http://chelsi174.ru/foto/os1.jpg\" alt=\"Видеоконсультант\" height=\"452\" width=\"598\"></a></strong>\r\n</p><p style=\"text-align: center;\"><a href=\"http://chelsi174.ru/vk/gl2\"><img style=\"width: 839px; height: 474px;\" src=\"http://chelsi174.ru/foto/tb1.jpg\" alt=\"Видеоконсультант\" height=\"474\" width=\"839\"></a><a href=\"http://chelsi174.ru/vk/gl3\"><img style=\"width: 354px; height: 473px;\" src=\"http://chelsi174.ru/foto/gg2.jpg\" alt=\"Видеоконсультант\" height=\"473\" width=\"354\"></a>\r\n</p><p><strong> Как это работает:</strong>\r\n</p><p>Вы звоните по тел. 222-88-88 (либо <em><a href=\"http://chelsi174.ru/oz/\">\"ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК\"</a></em>)\r\n и продавец общаясь в живую,  по телефону все расскажет.  Одновременно \r\nпо камере покажет то, что  интересует, уточнит наличие, подсчитает \r\nколичество, предложит скидку.  Работает уже сейчас!\r\n</p><p>Заходите\r\n на сайт, открывайте раздел «Видеоконсультант», и на любом компьютере, \r\nпланшете, мобильнике получаете  доступ к нашим камерам с видом на \r\nвитрины.\r\n</p><p><em>Индивидуальное обслуживание покупателя. </em><em>Действительно,\r\n настоящий магазин на диване. Не интернет, а реальный магазин. Размываем\r\n границы между реальной и виртуальной продажей. \r\n	</em>\r\n</p><p><em>Помогаем даже тогда, когда у Вас нет времени. К нам не обязательно приезжать и присутствовать лично.</em>\r\n</p><p><em>Присматривайте, прикидываете, вместе с продавцом выбирайте  наиболее подходящий вариант именно для Вас. </em>\r\n</p><p><em>Для бережливого, вдумчивого покупателя!<strong></strong></em>\r\n</p>','2016-02-17 10:03:28','2016-02-17 10:25:45',1,8,1,NULL);
/*!40000 ALTER TABLE `site_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_page_params`
--

DROP TABLE IF EXISTS `site_page_params`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_page_params` (
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`page_id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_page_params`
--

LOCK TABLES `site_page_params` WRITE;
/*!40000 ALTER TABLE `site_page_params` DISABLE KEYS */;
INSERT INTO `site_page_params` VALUES (1,'keywords',''),(1,'description',''),(2,'keywords',''),(2,'description',''),(2,'background','http://it.site.camera/wa-data/public/site/themes/site_camera/img/banners_pages/construction-banner.jpg'),(2,'img','http://a.chelsi174.ru/str2/str2a.jpg'),(2,'mainmenu','1'),(1,'background','http://it.site.camera/wa-data/public/site/themes/site_camera/img/banners_pages/main-banner.jpg'),(3,'keywords',''),(3,'description',''),(4,'keywords',''),(4,'description',''),(3,'mainmenu','1'),(4,'mainmenu','1'),(3,'img','http://chelsi174.ru/foto/gr1a.jpg'),(6,'background','http://it.site.camera/wa-data/public/site/themes/site_camera/img/banners_pages/construction-banner.jpg'),(4,'img','http://chelsi174.ru/foto/kp2a.jpg'),(5,'keywords',''),(5,'description',''),(6,'description',''),(5,'img','http://chelsi174.ru/foto/kp1a.jpg'),(6,'keywords',''),(5,'mainmenu','1'),(6,'img','http://a.chelsi174.ru/str2/str2a.jpg'),(6,'mainmenu','1'),(7,'keywords',''),(7,'description',''),(7,'img','http://chelsi174.ru/foto/gr1a.jpg'),(7,'mainmenu','1'),(5,'background','http://it.site.camera/wa-data/public/site/themes/site_camera/img/banners_pages/videoconsultant.jpg'),(8,'keywords',''),(8,'description',''),(8,'background','http://it.site.camera/wa-data/public/site/themes/site_camera/img/banners_pages/camera_work.jpg'),(8,'img','http://it.site.camera/wa-data/public/site/themes/site_camera/img/menu-images/camera_work_menu.jpg'),(8,'container','1'),(8,'mainmenu','1');
/*!40000 ALTER TABLE `site_page_params` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_announcement`
--

DROP TABLE IF EXISTS `wa_announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` varchar(32) NOT NULL,
  `text` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `app_datetime` (`datetime`,`app_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_announcement`
--

LOCK TABLES `wa_announcement` WRITE;
/*!40000 ALTER TABLE `wa_announcement` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_api_auth_codes`
--

DROP TABLE IF EXISTS `wa_api_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_api_auth_codes` (
  `code` varchar(32) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `client_id` varchar(32) NOT NULL,
  `scope` text NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_api_auth_codes`
--

LOCK TABLES `wa_api_auth_codes` WRITE;
/*!40000 ALTER TABLE `wa_api_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_api_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_api_tokens`
--

DROP TABLE IF EXISTS `wa_api_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_api_tokens` (
  `contact_id` int(11) NOT NULL,
  `client_id` varchar(32) NOT NULL,
  `token` varchar(32) NOT NULL,
  `scope` text NOT NULL,
  `create_datetime` datetime NOT NULL,
  `expires` datetime DEFAULT NULL,
  PRIMARY KEY (`token`),
  UNIQUE KEY `contact_client` (`contact_id`,`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_api_tokens`
--

LOCK TABLES `wa_api_tokens` WRITE;
/*!40000 ALTER TABLE `wa_api_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_api_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_app_settings`
--

DROP TABLE IF EXISTS `wa_app_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_app_settings` (
  `app_id` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`app_id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_app_settings`
--

LOCK TABLES `wa_app_settings` WRITE;
/*!40000 ALTER TABLE `wa_app_settings` DISABLE KEYS */;
INSERT INTO `wa_app_settings` VALUES ('webasyst','update_time','1441812718'),('webasyst','locale','ru_RU'),('webasyst','name','it.site.camera'),('contacts','update_time','1427287662'),('installer','update_time','1'),('site','update_time','1391507082'),('installer','update_counter',''),('installer','update_counter_timestamp','1455901139'),('site','preview_hash','56c73d274f2d3.1455897895'),('site','theme_hash','56c3496c1bf4f.1455638892');
/*!40000 ALTER TABLE `wa_app_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_contact`
--

DROP TABLE IF EXISTS `wa_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `middlename` varchar(50) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `company` varchar(150) NOT NULL DEFAULT '',
  `jobtitle` varchar(50) NOT NULL DEFAULT '',
  `company_contact_id` int(11) NOT NULL DEFAULT '0',
  `is_company` tinyint(1) NOT NULL DEFAULT '0',
  `is_user` tinyint(1) NOT NULL DEFAULT '0',
  `login` varchar(32) DEFAULT NULL,
  `password` varchar(128) NOT NULL DEFAULT '',
  `last_datetime` datetime DEFAULT NULL,
  `sex` enum('m','f') DEFAULT NULL,
  `birth_day` tinyint(2) unsigned DEFAULT NULL,
  `birth_month` tinyint(2) unsigned DEFAULT NULL,
  `birth_year` smallint(4) DEFAULT NULL,
  `about` text,
  `photo` int(10) unsigned NOT NULL DEFAULT '0',
  `create_datetime` datetime NOT NULL,
  `create_app_id` varchar(32) NOT NULL DEFAULT '',
  `create_method` varchar(32) NOT NULL DEFAULT '',
  `create_contact_id` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(8) NOT NULL DEFAULT '',
  `timezone` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  KEY `name` (`name`),
  KEY `id_name` (`id`,`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_contact`
--

LOCK TABLES `wa_contact` WRITE;
/*!40000 ALTER TABLE `wa_contact` DISABLE KEYS */;
INSERT INTO `wa_contact` VALUES (1,'it.site.camera','it.site.camera','','','','','',0,0,1,'adminsitecamera','37391121d59032c47f16b7b9ee9f330b','2016-02-19 19:48:00',NULL,NULL,NULL,NULL,NULL,0,'2016-02-10 12:20:36','webasyst','install',0,'ru_RU','');
/*!40000 ALTER TABLE `wa_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_contact_categories`
--

DROP TABLE IF EXISTS `wa_contact_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_contact_categories` (
  `category_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`contact_id`),
  KEY `contact_id` (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_contact_categories`
--

LOCK TABLES `wa_contact_categories` WRITE;
/*!40000 ALTER TABLE `wa_contact_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_contact_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_contact_category`
--

DROP TABLE IF EXISTS `wa_contact_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_contact_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `system_id` varchar(64) DEFAULT NULL,
  `app_id` varchar(32) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `cnt` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `system_id` (`system_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_contact_category`
--

LOCK TABLES `wa_contact_category` WRITE;
/*!40000 ALTER TABLE `wa_contact_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_contact_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_contact_data`
--

DROP TABLE IF EXISTS `wa_contact_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_contact_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `field` varchar(32) NOT NULL,
  `ext` varchar(32) NOT NULL DEFAULT '',
  `value` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact_field_sort` (`contact_id`,`field`,`sort`),
  KEY `contact_id` (`contact_id`),
  KEY `value` (`value`),
  KEY `field` (`field`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_contact_data`
--

LOCK TABLES `wa_contact_data` WRITE;
/*!40000 ALTER TABLE `wa_contact_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_contact_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_contact_data_text`
--

DROP TABLE IF EXISTS `wa_contact_data_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_contact_data_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `field` varchar(32) NOT NULL,
  `ext` varchar(32) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact_field_sort` (`contact_id`,`field`,`sort`),
  KEY `contact_id` (`contact_id`),
  KEY `field` (`field`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_contact_data_text`
--

LOCK TABLES `wa_contact_data_text` WRITE;
/*!40000 ALTER TABLE `wa_contact_data_text` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_contact_data_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_contact_emails`
--

DROP TABLE IF EXISTS `wa_contact_emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_contact_emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ext` varchar(32) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `status` enum('unknown','confirmed','unconfirmed','unavailable') NOT NULL DEFAULT 'unknown',
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact_sort` (`contact_id`,`sort`),
  KEY `email` (`email`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_contact_emails`
--

LOCK TABLES `wa_contact_emails` WRITE;
/*!40000 ALTER TABLE `wa_contact_emails` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_contact_emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_contact_field_values`
--

DROP TABLE IF EXISTS `wa_contact_field_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_contact_field_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_field` varchar(64) NOT NULL,
  `parent_value` varchar(255) NOT NULL,
  `field` varchar(64) NOT NULL,
  `value` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_field` (`parent_field`,`parent_value`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_contact_field_values`
--

LOCK TABLES `wa_contact_field_values` WRITE;
/*!40000 ALTER TABLE `wa_contact_field_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_contact_field_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_contact_rights`
--

DROP TABLE IF EXISTS `wa_contact_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_contact_rights` (
  `group_id` int(11) NOT NULL,
  `app_id` varchar(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`app_id`,`name`),
  KEY `name_value` (`name`,`value`,`group_id`,`app_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_contact_rights`
--

LOCK TABLES `wa_contact_rights` WRITE;
/*!40000 ALTER TABLE `wa_contact_rights` DISABLE KEYS */;
INSERT INTO `wa_contact_rights` VALUES (-1,'webasyst','backend',1);
/*!40000 ALTER TABLE `wa_contact_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_contact_settings`
--

DROP TABLE IF EXISTS `wa_contact_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_contact_settings` (
  `contact_id` int(11) NOT NULL,
  `app_id` varchar(32) NOT NULL DEFAULT '',
  `name` varchar(32) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`contact_id`,`app_id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_contact_settings`
--

LOCK TABLES `wa_contact_settings` WRITE;
/*!40000 ALTER TABLE `wa_contact_settings` DISABLE KEYS */;
INSERT INTO `wa_contact_settings` VALUES (1,'webasyst','dashboard','1'),(1,'webasyst','widget_tutorial_closed','1'),(1,'webasyst','backend_url','http://it.site.camera/webasyst/'),(1,'site','last_domain_id','1');
/*!40000 ALTER TABLE `wa_contact_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_country`
--

DROP TABLE IF EXISTS `wa_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_country` (
  `name` varchar(255) NOT NULL,
  `iso3letter` varchar(3) NOT NULL,
  `iso2letter` varchar(2) NOT NULL,
  `isonumeric` varchar(3) NOT NULL,
  `fav_sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`iso3letter`),
  UNIQUE KEY `isonumeric` (`isonumeric`),
  UNIQUE KEY `iso2letter` (`iso2letter`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_country`
--

LOCK TABLES `wa_country` WRITE;
/*!40000 ALTER TABLE `wa_country` DISABLE KEYS */;
INSERT INTO `wa_country` VALUES ('Afghanistan','afg','af','004',NULL),('Åland Islands','ala','ax','248',NULL),('Albania','alb','al','008',NULL),('Algeria','dza','dz','012',NULL),('American Samoa','asm','as','016',NULL),('Andorra','and','ad','020',NULL),('Angola','ago','ao','024',NULL),('Anguilla','aia','ai','660',NULL),('Antigua and Barbuda','atg','ag','028',NULL),('Argentina','arg','ar','032',NULL),('Armenia','arm','am','051',NULL),('Aruba','abw','aw','533',NULL),('Australia','aus','au','036',NULL),('Austria','aut','at','040',NULL),('Azerbaijan','aze','az','031',NULL),('Bahamas','bhs','bs','044',NULL),('Bahrain','bhr','bh','048',NULL),('Bangladesh','bgd','bd','050',NULL),('Barbados','brb','bb','052',NULL),('Belarus','blr','by','112',NULL),('Belgium','bel','be','056',NULL),('Belize','blz','bz','084',NULL),('Benin','ben','bj','204',NULL),('Bermuda','bmu','bm','060',NULL),('Bhutan','btn','bt','064',NULL),('Bolivia, Plurinational State of','bol','bo','068',NULL),('Bosnia and Herzegovina','bih','ba','070',NULL),('Botswana','bwa','bw','072',NULL),('Bouvet Island','bvt','bv','074',NULL),('Brazil','bra','br','076',NULL),('British Indian Ocean Territory','iot','io','086',NULL),('Brunei Darussalam','brn','bn','096',NULL),('Bulgaria','bgr','bg','100',NULL),('Burkina Faso','bfa','bf','854',NULL),('Burundi','bdi','bi','108',NULL),('Côte d\'Ivoire','civ','ci','384',NULL),('Cambodia','khm','kh','116',NULL),('Cameroon','cmr','cm','120',NULL),('Canada','can','ca','124',NULL),('Cape Verde','cpv','cv','132',NULL),('Cayman Islands','cym','ky','136',NULL),('Central African Republic','caf','cf','140',NULL),('Chad','tcd','td','148',NULL),('Chile','chl','cl','152',NULL),('China','chn','cn','156',NULL),('Christmas Island','cxr','cx','162',NULL),('Cocos (Keeling) Islands','cck','cc','166',NULL),('Colombia','col','co','170',NULL),('Comoros','com','km','174',NULL),('Congo','cog','cg','178',NULL),('Congo, the Democratic Republic of the','cod','cd','180',NULL),('Cook Islands','cok','ck','184',NULL),('Costa Rica','cri','cr','188',NULL),('Croatia','hrv','hr','191',NULL),('Cuba','cub','cu','192',NULL),('Cyprus','cyp','cy','196',NULL),('Czech Republic','cze','cz','203',NULL),('Denmark','dnk','dk','208',NULL),('Djibouti','dji','dj','262',NULL),('Dominica','dma','dm','212',NULL),('Dominican Republic','dom','do','214',NULL),('Ecuador','ecu','ec','218',NULL),('Egypt','egy','eg','818',NULL),('El Salvador','slv','sv','222',NULL),('Equatorial Guinea','gnq','gq','226',NULL),('Eritrea','eri','er','232',NULL),('Estonia','est','ee','233',NULL),('Ethiopia','eth','et','231',NULL),('Falkland Islands (Malvinas)','flk','fk','238',NULL),('Faroe Islands','fro','fo','234',NULL),('Fiji','fji','fj','242',NULL),('Finland','fin','fi','246',NULL),('France','fra','fr','250',NULL),('French Guiana','guf','gf','254',NULL),('French Polynesia','pyf','pf','258',NULL),('French Southern Territories','atf','tf','260',NULL),('Gabon','gab','ga','266',NULL),('Gambia','gmb','gm','270',NULL),('Georgia','geo','ge','268',NULL),('Germany','deu','de','276',NULL),('Ghana','gha','gh','288',NULL),('Gibraltar','gib','gi','292',NULL),('Greece','grc','gr','300',NULL),('Greenland','grl','gl','304',NULL),('Grenada','grd','gd','308',NULL),('Guadeloupe','glp','gp','312',NULL),('Guam','gum','gu','316',NULL),('Guatemala','gtm','gt','320',NULL),('Guinea','gin','gn','324',NULL),('Guinea-Bissau','gnb','gw','624',NULL),('Guyana','guy','gy','328',NULL),('Haiti','hti','ht','332',NULL),('Heard Island and McDonald Islands','hmd','hm','334',NULL),('Holy See (Vatican City State)','vat','va','336',NULL),('Honduras','hnd','hn','340',NULL),('Hong Kong','hkg','hk','344',NULL),('Hungary','hun','hu','348',NULL),('Iceland','isl','is','352',NULL),('India','ind','in','356',NULL),('Indonesia','idn','id','360',NULL),('Iran, Islamic Republic of','irn','ir','364',NULL),('Iraq','irq','iq','368',NULL),('Ireland','irl','ie','372',NULL),('Israel','isr','il','376',NULL),('Italy','ita','it','380',NULL),('Jamaica','jam','jm','388',NULL),('Japan','jpn','jp','392',NULL),('Jordan','jor','jo','400',NULL),('Kazakhstan','kaz','kz','398',NULL),('Kenya','ken','ke','404',NULL),('Kiribati','kir','ki','296',NULL),('Korea, Democratic People\'s Republic of','prk','kp','408',NULL),('Korea, Republic of','kor','kr','410',NULL),('Kuwait','kwt','kw','414',NULL),('Kyrgyzstan','kgz','kg','417',NULL),('Lao People\'s Democratic Republic','lao','la','418',NULL),('Latvia','lva','lv','428',NULL),('Lebanon','lbn','lb','422',NULL),('Lesotho','lso','ls','426',NULL),('Liberia','lbr','lr','430',NULL),('Libyan Arab Jamahiriya','lby','ly','434',NULL),('Liechtenstein','lie','li','438',NULL),('Lithuania','ltu','lt','440',NULL),('Luxembourg','lux','lu','442',NULL),('Macao','mac','mo','446',NULL),('Macedonia, the former Yugoslav Republic of','mkd','mk','807',NULL),('Madagascar','mdg','mg','450',NULL),('Malawi','mwi','mw','454',NULL),('Malaysia','mys','my','458',NULL),('Maldives','mdv','mv','462',NULL),('Mali','mli','ml','466',NULL),('Malta','mlt','mt','470',NULL),('Marshall Islands','mhl','mh','584',NULL),('Martinique','mtq','mq','474',NULL),('Mauritania','mrt','mr','478',NULL),('Mauritius','mus','mu','480',NULL),('Mayotte','myt','yt','175',NULL),('Mexico','mex','mx','484',NULL),('Micronesia, Federated States of','fsm','fm','583',NULL),('Moldova, Republic of','mda','md','498',NULL),('Monaco','mco','mc','492',NULL),('Mongolia','mng','mn','496',NULL),('Montenegro','mne','me','499',NULL),('Montserrat','msr','ms','500',NULL),('Morocco','mar','ma','504',NULL),('Mozambique','moz','mz','508',NULL),('Myanmar','mmr','mm','104',NULL),('Namibia','nam','na','516',NULL),('Nauru','nru','nr','520',NULL),('Nepal','npl','np','524',NULL),('Netherlands','nld','nl','528',NULL),('Netherlands Antilles','ant','an','530',NULL),('New Caledonia','ncl','nc','540',NULL),('New Zealand','nzl','nz','554',NULL),('Nicaragua','nic','ni','558',NULL),('Niger','ner','ne','562',NULL),('Nigeria','nga','ng','566',NULL),('Niue','niu','nu','570',NULL),('Norfolk Island','nfk','nf','574',NULL),('Northern Mariana Islands','mnp','mp','580',NULL),('Norway','nor','no','578',NULL),('Oman','omn','om','512',NULL),('Pakistan','pak','pk','586',NULL),('Palau','plw','pw','585',NULL),('Palestinian Territory, Occupied','pse','ps','275',NULL),('Panama','pan','pa','591',NULL),('Papua New Guinea','png','pg','598',NULL),('Paraguay','pry','py','600',NULL),('Peru','per','pe','604',NULL),('Philippines','phl','ph','608',NULL),('Pitcairn','pcn','pn','612',NULL),('Poland','pol','pl','616',NULL),('Portugal','prt','pt','620',NULL),('Puerto Rico','pri','pr','630',NULL),('Qatar','qat','qa','634',NULL),('Réunion','reu','re','638',NULL),('Romania','rou','ro','642',NULL),('Russian Federation','rus','ru','643',NULL),('Rwanda','rwa','rw','646',NULL),('Saint Helena, Ascension and Tristan da Cunha','shn','sh','654',NULL),('Saint Kitts and Nevis','kna','kn','659',NULL),('Saint Lucia','lca','lc','662',NULL),('Saint Pierre and Miquelon','spm','pm','666',NULL),('Saint Vincent and the Grenadines','vct','vc','670',NULL),('Samoa','wsm','ws','882',NULL),('San Marino','smr','sm','674',NULL),('Sao Tome and Principe','stp','st','678',NULL),('Saudi Arabia','sau','sa','682',NULL),('Senegal','sen','sn','686',NULL),('Serbia','srb','rs','688',NULL),('Seychelles','syc','sc','690',NULL),('Sierra Leone','sle','sl','694',NULL),('Singapore','sgp','sg','702',NULL),('Slovakia','svk','sk','703',NULL),('Slovenia','svn','si','705',NULL),('Solomon Islands','slb','sb','090',NULL),('Somalia','som','so','706',NULL),('South Africa','zaf','za','710',NULL),('South Georgia and the South Sandwich Islands','sgs','gs','239',NULL),('Spain','esp','es','724',NULL),('Sri Lanka','lka','lk','144',NULL),('Sudan','sdn','sd','736',NULL),('Suriname','sur','sr','740',NULL),('Svalbard and Jan Mayen','sjm','sj','744',NULL),('Swaziland','swz','sz','748',NULL),('Sweden','swe','se','752',NULL),('Switzerland','che','ch','756',NULL),('Syrian Arab Republic','syr','sy','760',NULL),('Taiwan, Province of China','twn','tw','158',NULL),('Tajikistan','tjk','tj','762',NULL),('Tanzania, United Republic of','tza','tz','834',NULL),('Thailand','tha','th','764',NULL),('Timor-Leste','tls','tl','626',NULL),('Togo','tgo','tg','768',NULL),('Tokelau','tkl','tk','772',NULL),('Tonga','ton','to','776',NULL),('Trinidad and Tobago','tto','tt','780',NULL),('Tunisia','tun','tn','788',NULL),('Turkey','tur','tr','792',NULL),('Turkmenistan','tkm','tm','795',NULL),('Turks and Caicos Islands','tca','tc','796',NULL),('Tuvalu','tuv','tv','798',NULL),('Uganda','uga','ug','800',NULL),('Ukraine','ukr','ua','804',NULL),('United Arab Emirates','are','ae','784',NULL),('United Kingdom','gbr','gb','826',NULL),('United States','usa','us','840',NULL),('United States Minor Outlying Islands','umi','um','581',NULL),('Uruguay','ury','uy','858',NULL),('Uzbekistan','uzb','uz','860',NULL),('Vanuatu','vut','vu','548',NULL),('Venezuela, Bolivarian Republic of','ven','ve','862',NULL),('Viet Nam','vnm','vn','704',NULL),('Virgin Islands, British','vgb','vg','092',NULL),('Virgin Islands, U.S.','vir','vi','850',NULL),('Wallis and Futuna','wlf','wf','876',NULL),('Western Sahara','esh','eh','732',NULL),('Yemen','yem','ye','887',NULL),('Zambia','zmb','zm','894',NULL),('Zimbabwe','zwe','zw','716',NULL);
/*!40000 ALTER TABLE `wa_country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_dashboard`
--

DROP TABLE IF EXISTS `wa_dashboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_dashboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `hash` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hash` (`hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_dashboard`
--

LOCK TABLES `wa_dashboard` WRITE;
/*!40000 ALTER TABLE `wa_dashboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_dashboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_group`
--

DROP TABLE IF EXISTS `wa_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cnt` int(11) NOT NULL DEFAULT '0',
  `icon` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_group`
--

LOCK TABLES `wa_group` WRITE;
/*!40000 ALTER TABLE `wa_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_log`
--

DROP TABLE IF EXISTS `wa_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `app_id` varchar(32) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `action` varchar(255) NOT NULL,
  `subject_contact_id` int(11) DEFAULT NULL,
  `params` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_log`
--

LOCK TABLES `wa_log` WRITE;
/*!40000 ALTER TABLE `wa_log` DISABLE KEYS */;
INSERT INTO `wa_log` VALUES (1,'webasyst',1,'2016-02-16 14:24:06','login',NULL,'backend'),(2,'site',1,'2016-02-16 14:26:25','route_edit',NULL,'it.site.camera/*'),(3,'site',1,'2016-02-16 14:26:48','page_add',NULL,'1'),(4,'site',1,'2016-02-16 14:26:58','page_edit',NULL,'1'),(5,'site',1,'2016-02-16 14:27:03','page_edit',NULL,'1'),(6,'site',1,'2016-02-16 14:27:38','block_add',NULL,NULL),(7,'site',1,'2016-02-16 14:28:38','block_add',NULL,NULL),(8,'site',1,'2016-02-16 14:29:25','page_add',NULL,'2'),(9,'site',1,'2016-02-16 14:29:34','page_edit',NULL,'2'),(10,'site',1,'2016-02-16 14:29:55','page_edit',NULL,'1'),(11,'site',1,'2016-02-16 14:59:33','page_add',NULL,'3'),(12,'site',1,'2016-02-16 14:59:51','page_add',NULL,'4'),(13,'site',1,'2016-02-16 15:04:11','page_edit',NULL,'2'),(14,'site',1,'2016-02-16 15:04:17','page_edit',NULL,'3'),(15,'site',1,'2016-02-16 15:04:21','page_edit',NULL,'4'),(16,'site',1,'2016-02-16 15:04:49','page_edit',NULL,'3'),(17,'site',1,'2016-02-16 15:05:01','page_edit',NULL,'4'),(18,'webasyst',1,'2016-02-16 15:51:24','login',NULL,'backend'),(19,'site',1,'2016-02-16 15:57:33','theme_download',NULL,'site_camera'),(20,'site',1,'2016-02-16 16:39:59','block_edit',NULL,NULL),(21,'site',1,'2016-02-16 16:40:03','block_edit',NULL,NULL),(22,'site',1,'2016-02-16 16:52:33','block_add',NULL,NULL),(23,'site',1,'2016-02-16 16:52:48','block_edit',NULL,NULL),(24,'site',1,'2016-02-16 16:53:21','block_add',NULL,NULL),(25,'site',1,'2016-02-16 16:53:32','page_edit',NULL,'4'),(26,'site',1,'2016-02-16 16:53:45','page_edit',NULL,'3'),(27,'site',1,'2016-02-16 16:53:58','page_edit',NULL,'3'),(28,'site',1,'2016-02-16 18:43:52','block_add',NULL,NULL),(29,'site',1,'2016-02-16 18:44:21','block_edit',NULL,NULL),(30,'site',1,'2016-02-16 18:44:26','block_edit',NULL,NULL),(31,'site',1,'2016-02-16 18:45:05','page_add',NULL,'5'),(32,'site',1,'2016-02-16 18:45:49','page_edit',NULL,'5'),(33,'site',1,'2016-02-16 18:59:54','block_edit',NULL,NULL),(34,'site',1,'2016-02-16 19:00:10','block_edit',NULL,NULL),(35,'site',1,'2016-02-16 19:00:19','block_edit',NULL,NULL),(36,'site',1,'2016-02-16 19:00:28','block_edit',NULL,NULL),(37,'site',1,'2016-02-16 19:00:38','block_edit',NULL,NULL),(38,'site',1,'2016-02-16 19:01:09','block_add',NULL,NULL),(39,'site',1,'2016-02-16 19:01:58','block_add',NULL,NULL),(40,'site',1,'2016-02-16 19:11:16','page_edit',NULL,'1'),(41,'site',1,'2016-02-16 19:11:28','page_edit',NULL,'2'),(42,'site',1,'2016-02-16 19:11:38','page_edit',NULL,'3'),(43,'site',1,'2016-02-16 19:11:47','page_edit',NULL,'4'),(44,'site',1,'2016-02-16 20:07:01','page_edit',NULL,'5'),(45,'site',1,'2016-02-16 20:09:47','page_edit',NULL,'4'),(46,'site',1,'2016-02-16 20:11:13','page_edit',NULL,'4'),(47,'site',1,'2016-02-16 20:12:04','page_edit',NULL,'4'),(48,'site',1,'2016-02-16 20:26:58','block_edit',NULL,NULL),(49,'site',1,'2016-02-16 20:27:02','block_edit',NULL,NULL),(50,'site',1,'2016-02-16 20:28:01','block_edit',NULL,NULL),(51,'site',1,'2016-02-16 20:28:34','block_edit',NULL,NULL),(52,'site',1,'2016-02-16 20:28:59','page_edit',NULL,'2'),(53,'site',1,'2016-02-16 21:03:07','page_edit',NULL,'2'),(54,'site',1,'2016-02-16 21:03:21','page_edit',NULL,'2'),(55,'site',1,'2016-02-16 21:04:21','page_edit',NULL,'3'),(56,'site',1,'2016-02-16 21:05:27','page_edit',NULL,'5'),(57,'site',1,'2016-02-16 21:05:35','page_edit',NULL,'5'),(58,'site',1,'2016-02-16 21:27:41','page_edit',NULL,'2'),(59,'site',1,'2016-02-16 21:27:53','page_edit',NULL,'2'),(60,'site',1,'2016-02-16 21:28:17','page_add',NULL,'6'),(61,'site',1,'2016-02-16 21:28:37','page_add',NULL,'7'),(62,'site',1,'2016-02-16 21:28:43','page_edit',NULL,'6'),(63,'site',1,'2016-02-16 21:49:23','page_edit',NULL,'5'),(64,'site',1,'2016-02-16 21:52:28','page_edit',NULL,'6'),(65,'site',1,'2016-02-16 21:53:12','block_add',NULL,NULL),(66,'site',1,'2016-02-16 21:53:37','block_edit',NULL,NULL),(67,'site',1,'2016-02-16 21:53:54','block_edit',NULL,NULL),(68,'site',1,'2016-02-16 21:54:10','block_edit',NULL,NULL),(69,'site',1,'2016-02-16 21:54:21','page_edit',NULL,'7'),(70,'site',1,'2016-02-16 21:55:03','page_edit',NULL,'6'),(71,'site',1,'2016-02-16 22:18:09','block_edit',NULL,NULL),(72,'site',1,'2016-02-17 10:03:28','page_add',NULL,'8'),(73,'site',1,'2016-02-17 10:10:26','page_edit',NULL,'8'),(74,'site',1,'2016-02-17 10:10:59','page_edit',NULL,'8'),(75,'site',1,'2016-02-17 10:24:31','page_edit',NULL,'8'),(76,'site',1,'2016-02-17 10:25:20','page_edit',NULL,'8'),(77,'site',1,'2016-02-17 10:25:44','page_edit',NULL,'8'),(78,'site',1,'2016-02-17 10:25:45','page_edit',NULL,'8'),(79,'site',1,'2016-02-17 10:32:27','block_edit',NULL,NULL),(80,'site',1,'2016-02-17 10:34:40','block_edit',NULL,NULL),(81,'site',1,'2016-02-17 10:36:26','block_edit',NULL,NULL),(82,'site',1,'2016-02-17 10:38:25','block_edit',NULL,NULL);
/*!40000 ALTER TABLE `wa_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_login_log`
--

DROP TABLE IF EXISTS `wa_login_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_login_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `datetime_in` datetime NOT NULL,
  `datetime_out` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_login_log`
--

LOCK TABLES `wa_login_log` WRITE;
/*!40000 ALTER TABLE `wa_login_log` DISABLE KEYS */;
INSERT INTO `wa_login_log` VALUES (1,1,'2016-02-10 12:20:36','2016-02-10 12:57:12'),(2,1,'2016-02-16 14:24:06','2016-02-16 14:33:56'),(3,1,'2016-02-16 14:59:24','2016-02-16 15:03:54'),(4,1,'2016-02-16 15:51:24','2016-02-16 15:03:54'),(5,1,'2016-02-16 16:51:38','2016-02-16 17:12:25'),(6,1,'2016-02-16 18:08:47','2016-02-16 19:17:59'),(7,1,'2016-02-16 19:36:37','2016-02-16 19:19:40'),(8,1,'2016-02-16 19:49:01','2016-02-16 20:38:50'),(9,1,'2016-02-16 20:55:49','2016-02-16 19:46:14'),(10,1,'2016-02-16 20:57:10','2016-02-16 20:57:10'),(11,1,'2016-02-16 21:26:57','2016-02-16 21:57:09'),(12,1,'2016-02-16 22:14:35','2016-02-16 22:20:08'),(13,1,'2016-02-17 10:01:29','2016-02-16 22:05:34'),(14,1,'2016-02-17 12:08:54','2016-02-17 12:08:54'),(15,1,'2016-02-17 12:41:26','2016-02-17 12:41:26'),(16,1,'2016-02-17 13:24:09','2016-02-17 13:32:17'),(17,1,'2016-02-17 14:01:29','2016-02-17 14:01:29'),(18,1,'2016-02-17 14:34:45','2016-02-17 14:34:45'),(19,1,'2016-02-17 15:23:05','2016-02-17 15:23:05'),(20,1,'2016-02-17 18:32:37','2016-02-17 18:32:37'),(21,1,'2016-02-18 05:56:25','2016-02-18 06:02:50'),(22,1,'2016-02-18 18:55:54','2016-02-18 19:04:07'),(23,1,'2016-02-18 19:44:33','2016-02-18 19:44:33'),(24,1,'2016-02-19 06:42:47','2016-02-19 06:42:47'),(25,1,'2016-02-19 08:05:29','2016-02-19 08:05:29'),(26,1,'2016-02-19 16:57:24','2016-02-19 16:59:25'),(27,1,'2016-02-19 17:23:35','2016-02-19 17:23:35'),(28,1,'2016-02-19 19:03:57','2016-02-19 19:03:57'),(29,1,'2016-02-19 19:42:18',NULL);
/*!40000 ALTER TABLE `wa_login_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_region`
--

DROP TABLE IF EXISTS `wa_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_region` (
  `country_iso3` varchar(3) NOT NULL,
  `code` varchar(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fav_sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`country_iso3`,`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_region`
--

LOCK TABLES `wa_region` WRITE;
/*!40000 ALTER TABLE `wa_region` DISABLE KEYS */;
INSERT INTO `wa_region` VALUES ('usa','AK','Alaska',NULL),('usa','AL','Alabama',NULL),('usa','AR','Arkansas',NULL),('usa','AZ','Arizona',NULL),('usa','CA','California',NULL),('usa','CO','Colorado',NULL),('usa','CT','Connecticut',NULL),('usa','DC','Washington, D.C.',NULL),('usa','DE','Delaware',NULL),('usa','FL','Florida',NULL),('usa','GA','Georgia',NULL),('usa','HI','Hawaii',NULL),('usa','IA','Iowa',NULL),('usa','ID','Idaho',NULL),('usa','IL','Illinois',NULL),('usa','IN','Indiana',NULL),('usa','KS','Kansas',NULL),('usa','KY','Kentucky',NULL),('usa','LA','Louisiana',NULL),('usa','MA','Massachusetts',NULL),('usa','MD','Maryland',NULL),('usa','ME','Maine',NULL),('usa','MI','Michigan',NULL),('usa','MN','Minnesota',NULL),('usa','MO','Missouri',NULL),('usa','MS','Mississippi',NULL),('usa','MT','Montana',NULL),('usa','NC','North Carolina',NULL),('usa','ND','North Dakota',NULL),('usa','NE','Nebraska',NULL),('usa','NH','New Hampshire',NULL),('usa','NJ','New Jersey',NULL),('usa','NM','New Mexico',NULL),('usa','NV','Nevada',NULL),('usa','NY','New York',NULL),('usa','OH','Ohio',NULL),('usa','OK','Oklahoma',NULL),('usa','OR','Oregon',NULL),('usa','PA','Pennsylvania',NULL),('usa','RI','Rhode Island',NULL),('usa','SC','South Carolina',NULL),('usa','SD','South Dakota',NULL),('usa','TN','Tennessee',NULL),('usa','TX','Texas',NULL),('usa','UT','Utah',NULL),('usa','VA','Virginia',NULL),('usa','VT','Vermont',NULL),('usa','WA','Washington',NULL),('usa','WI','Wisconsin',NULL),('usa','WV','West Virginia',NULL),('usa','WY','Wyoming',NULL),('can','AB','Alberta',NULL),('can','BC','British Columbia',NULL),('can','MB','Manitoba',NULL),('can','NB','New Brunswick',NULL),('can','NL','Newfoundland and Labrador',NULL),('can','NS','Nova Scotia',NULL),('can','ON','Ontario',NULL),('can','PE','Prince Edward Island',NULL),('can','QC','Quebec',NULL),('can','SK','Saskatchewan',NULL),('can','NT','Northwest Territories',NULL),('can','YT','Yukon',NULL),('can','NU','Nunavut',NULL),('rus','01','Адыгея республика',NULL),('rus','04','Алтай республика',NULL),('rus','22','Алтайский край',NULL),('rus','28','Амурская область',NULL),('rus','29','Архангельская область',NULL),('rus','30','Астраханская область',NULL),('rus','02','Башкортостан республика',NULL),('rus','31','Белгородская область',NULL),('rus','32','Брянская область',NULL),('rus','03','Бурятия республика',NULL),('rus','33','Владимирская область',NULL),('rus','34','Волгоградская область',NULL),('rus','35','Вологодская область',NULL),('rus','36','Воронежская область',NULL),('rus','05','Дагестан республика',NULL),('rus','79','Еврейская автономная область',NULL),('rus','75','Забайкальский край',NULL),('rus','37','Ивановская область',NULL),('rus','06','Ингушетия республика',NULL),('rus','38','Иркутская область',NULL),('rus','07','Кабардино-Балкарская республика',NULL),('rus','09','Карачаево-Черкесская республика',NULL),('rus','39','Калининградская область',NULL),('rus','08','Калмыкия республика',NULL),('rus','40','Калужская область',NULL),('rus','41','Камчатский край',NULL),('rus','10','Карелия республика',NULL),('rus','42','Кемеровская область',NULL),('rus','43','Кировская область',NULL),('rus','11','Коми республика',NULL),('rus','44','Костромская область',NULL),('rus','23','Краснодарский край',NULL),('rus','24','Красноярский край',NULL),('rus','45','Курганская область',NULL),('rus','46','Курская область',NULL),('rus','47','Ленинградская область',NULL),('rus','48','Липецкая область',NULL),('rus','49','Магаданская область',NULL),('rus','12','Марий Эл республика',NULL),('rus','50','Московская область',NULL),('rus','77','Москва',NULL),('rus','13','Мордовия республика',NULL),('rus','51','Мурманская область',NULL),('rus','83','Ненецкий автономный округ',NULL),('rus','52','Нижегородская область',NULL),('rus','53','Новгородская область',NULL),('rus','54','Новосибирская область',NULL),('rus','55','Омская область',NULL),('rus','56','Оренбургская область',NULL),('rus','57','Орловская область',NULL),('rus','58','Пензенская область',NULL),('rus','59','Пермский край',NULL),('rus','25','Приморский край',NULL),('rus','60','Псковская область',NULL),('rus','61','Ростовская область',NULL),('rus','62','Рязанская область',NULL),('rus','63','Самарская область',NULL),('rus','78','Санкт-Петербург',NULL),('rus','64','Саратовская область',NULL),('rus','14','Саха (Якутия) республика',NULL),('rus','65','Сахалинская область',NULL),('rus','66','Свердловская область',NULL),('rus','15','Северная Осетия-Алания',NULL),('rus','67','Смоленская область',NULL),('rus','26','Ставропольский край',NULL),('rus','68','Тамбовская область',NULL),('rus','16','Татарстан республика',NULL),('rus','69','Тверская область',NULL),('rus','70','Томская область',NULL),('rus','71','Тульская область',NULL),('rus','72','Тюменская область',NULL),('rus','17','Тыва республика',NULL),('rus','18','Удмуртская республика',NULL),('rus','73','Ульяновская область',NULL),('rus','27','Хабаровский край',NULL),('rus','19','Хакасия республика',NULL),('rus','86','Ханты-Мансийский-Югра автономный округ',NULL),('rus','74','Челябинская область',NULL),('rus','20','Чеченская республика',NULL),('rus','21','Чувашская республика',NULL),('rus','87','Чукотский автономный округ',NULL),('rus','89','Ямало-Ненецкий автономный округ',NULL),('rus','76','Ярославская область',NULL),('ukr','01','Автономна Республіка Крим',NULL),('ukr','02','Вінницька область',NULL),('ukr','03','Волинська область',NULL),('ukr','04','Дніпропетровська область',NULL),('ukr','05','Донецька область',NULL),('ukr','06','Житомирська область',NULL),('ukr','07','Закарпатська область',NULL),('ukr','08','Запорізька область',NULL),('ukr','09','Івано-Франківська область',NULL),('ukr','10','Київська область',NULL),('ukr','11','місто Київ',NULL),('ukr','12','Кіровоградська область',NULL),('ukr','13','Луганська область',NULL),('ukr','14','Львівська область',NULL),('ukr','15','Миколаївська область',NULL),('ukr','16','Одеська область',NULL),('ukr','17','Полтавська область',NULL),('ukr','18','Рівненська область',NULL),('ukr','19','Сумська область',NULL),('ukr','20','Тернопільська область',NULL),('ukr','21','Харківська область',NULL),('ukr','22','Херсонська область',NULL),('ukr','23','Хмельницька область',NULL),('ukr','24','Черкаська область',NULL),('ukr','25','Чернігівська область',NULL),('ukr','26','Чернівецька область',NULL),('ukr','27','місто Севастополь',NULL);
/*!40000 ALTER TABLE `wa_region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_transaction`
--

DROP TABLE IF EXISTS `wa_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin` varchar(50) NOT NULL,
  `app_id` varchar(50) NOT NULL,
  `merchant_id` varchar(50) DEFAULT NULL,
  `native_id` varchar(255) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `update_datetime` datetime NOT NULL,
  `type` varchar(20) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `customer_id` varchar(50) DEFAULT NULL,
  `result` varchar(20) NOT NULL,
  `error` varchar(255) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `view_data` text,
  `amount` float DEFAULT NULL,
  `currency_id` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plugin` (`plugin`),
  KEY `app_id` (`app_id`),
  KEY `merchant_id` (`merchant_id`),
  KEY `transaction_native_id` (`native_id`),
  KEY `parent_id` (`parent_id`),
  KEY `order_id` (`order_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_transaction`
--

LOCK TABLES `wa_transaction` WRITE;
/*!40000 ALTER TABLE `wa_transaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_transaction_data`
--

DROP TABLE IF EXISTS `wa_transaction_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_transaction_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) NOT NULL,
  `field_id` varchar(50) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_id` (`transaction_id`),
  KEY `field_id` (`field_id`),
  KEY `value` (`value`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_transaction_data`
--

LOCK TABLES `wa_transaction_data` WRITE;
/*!40000 ALTER TABLE `wa_transaction_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_transaction_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_user_groups`
--

DROP TABLE IF EXISTS `wa_user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_user_groups` (
  `contact_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`contact_id`,`group_id`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_user_groups`
--

LOCK TABLES `wa_user_groups` WRITE;
/*!40000 ALTER TABLE `wa_user_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_widget`
--

DROP TABLE IF EXISTS `wa_widget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_widget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `widget` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `dashboard_id` int(11) DEFAULT NULL,
  `create_datetime` datetime NOT NULL,
  `app_id` varchar(32) NOT NULL,
  `block` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `size` char(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_widget`
--

LOCK TABLES `wa_widget` WRITE;
/*!40000 ALTER TABLE `wa_widget` DISABLE KEYS */;
INSERT INTO `wa_widget` VALUES (1,'clock','Часы',1,NULL,'2016-02-10 12:20:36','webasyst',0,0,'2x2'),(2,'weather','Погода',1,NULL,'2016-02-10 12:20:36','webasyst',1,0,'2x2'),(3,'news','Новости',1,NULL,'2016-02-10 12:20:36','webasyst',2,0,'2x2');
/*!40000 ALTER TABLE `wa_widget` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wa_widget_params`
--

DROP TABLE IF EXISTS `wa_widget_params`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wa_widget_params` (
  `widget_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`widget_id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wa_widget_params`
--

LOCK TABLES `wa_widget_params` WRITE;
/*!40000 ALTER TABLE `wa_widget_params` DISABLE KEYS */;
/*!40000 ALTER TABLE `wa_widget_params` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-19 22:03:24
