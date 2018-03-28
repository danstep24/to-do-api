<?php

$router->group(["prefix" => "tasks"], function ($router) {

	$router->get("", "Tasks@index");
	$router->post("", "Tasks@store");
	$router->delete("{task}", "Tasks@destroy");
	$router->put("{task}", "Tasks@update");
	$router->patch("{task}/completed", "Tasks@completed");

});
