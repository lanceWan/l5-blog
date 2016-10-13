<?php
$router->group(['middleware' => 'auth.admin:admin'],function ($router){
  $router->get('dash', 'DashboardController@index');
});
