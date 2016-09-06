<?php
$router->group(['namespace' => 'Admin'],function ($router)
{
	$router->get('login', 'LoginController@showLoginForm')->name('admin.login');
	$router->post('login', 'LoginController@login');
	$router->post('logout', 'LoginController@logout');
});