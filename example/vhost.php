<?php
function autoload($className)
{
    $className = ltrim($className, '\\');
    $serverName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $serverName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $serverName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $serverName;
}
spl_autoload_register('autoload');

$path = '/usr/lib/pear';
set_include_path(
	dirname(__FILE__).'/../library/' . PATH_SEPARATOR.
	get_include_path() );


$server=new \Confgen\Nginx\Module\Http\Server();

$server->addDirective(
		(new \Confgen\Nginx\Module\Http\Listen())
		->setPort(81)
	)
	->addDirective(
		(new \Confgen\Nginx\Module\Core\Inc())
		->setFile('y')
	)
	->addDirective(
		(new \Confgen\Nginx\Module\Core\Inc())
		->setFile('*')
	);


$formater=new \Confgen\Nginx\Formater();
echo $formater->format($server);
