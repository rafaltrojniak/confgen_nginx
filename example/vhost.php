<?php
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}
spl_autoload_register('autoload');

$path = '/usr/lib/pear';
set_include_path(
	dirname(__FILE__).'/../library/' . PATH_SEPARATOR.
	get_include_path() );


$file=new \Confgen\Nginx\File();

$file->addDirective(
		(new \Confgen\Nginx\Module\Http\Listen())
		->setFile('x')
	)
	->addDirective(
		(new \Confgen\Nginx\Module\Http\Listen())
		->setFile('y')
	)
	->addDirective(
		(new \Confgen\Nginx\Module\Http\Listen())
		->setFile('*')
	);


$formater=new \Confgen\Nginx\Formater();
echo $formater->format($file);
