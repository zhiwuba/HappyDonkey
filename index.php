<?php

define('VERSION','0.0.0.1');

if ( file_exists('config.php') )
{
    require_once('config.php');
}

require_once(DIR_System. 'startup.php');



//Registry
$registry=new Registry();

//Loader
$loader=new Loader($registry);
$registry->set('load', $loader);

//Config
//$db=new

//DB
$db=new HD_MySql(DB_HostName,DB_UserName,DB_Password,DB_Name);
$registry->set('db', $db);

//Request
$request=new Request();
$registry->set('request', $request);

//Response
$response=new Response();
$registry->set('response', $response);

//Session
$session=new Session();
$registry->set('session', $session);

//Constance object.
$registry->set('user', new User($registry));



//Front Controller
$controller=new Front($registry);


//Router
if  ( isset($request->get['route']) )
{
    $action=new Action($request->get['route']);
}
else
{
    $action=new Action('common/home');
}

//Dispatch
$controller->dispatch($action, new Action('error/not_found'));

//Output
$response->output();


?>