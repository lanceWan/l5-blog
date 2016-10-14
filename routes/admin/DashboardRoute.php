<?php
$router->group(['middleware' => 'auth.admin:admin'],function ($router){
  $router->get('dash', 'DashboardController@index');
  $router->get('/i18n', 'DashboardController@dataTableI18n');
});
