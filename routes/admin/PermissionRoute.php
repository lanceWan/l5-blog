<?php
$router->group(['middleware' => 'auth.admin:admin'],function ($router)
{
	$router->resource('permissions','PermissionController');
});