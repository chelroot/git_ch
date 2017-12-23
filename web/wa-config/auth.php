<?php
return array (
  'site.camera' => 
  array (
    'auth' => true,
    'app' => 'shop',
    'signup_captcha' => true,
    'params' => 
    array (
      'button_caption' => 'Регистрация',
    ),
    'fields' => 
    array (
      'firstname' => 
      array (
        'caption' => 'Имя',
        'placeholder' => '',
      ),
      'email' => 
      array (
        'caption' => 'Email',
        'placeholder' => '',
        'required' => true,
      ),
      'password' => 
      array (
        'caption' => 'Пароль',
        'placeholder' => '',
        'required' => true,
      ),
    ),
    'adapters' => 
    array (
      'mailru' => 
      array (
        'app_id' => '742095',
        'app_secret' => '67722d0fc8fd356bb047650926b2849d',
        'app_private' => '5e7f1c0e4ba9d46fb5750cde8fcd4110',
      ),
      'yandex' => 
      array (
        'app_id' => 'b64436babdda41868d0b52ca4e2d9565',
        'app_secret' => '42c9d0e74c1743cfa1bc566e87f14ae3',
      ),
      'vkontakte' => 
      array (
        'app_id' => '5317529',
        'app_secret' => 'fVd6ySVDbsMm48OOWNeI',
      ),
      'twitter' => 
      array (
        'app_id' => '5Y1jaded3eymVGNWGLfeF4gfz',
        'app_secret' => 'b36t1LsZrKpaovJHZnQyIVE0k25FQQOPuwQZw6U7Z99LdEy6Vi',
      ),
      'google' => 
      array (
        'app_id' => '1052854293160-20pa1lfpi80o0p5erul8ej01rrpq873a.apps.googleusercontent.com',
        'app_secret' => 'SFVJ4jJCC4j975LRUwI84cWv',
      ),
    ),
  ),
);
