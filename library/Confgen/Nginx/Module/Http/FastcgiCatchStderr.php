<?php
/**
 * Class for fastcgi_catch_stderr directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiCatchStderr extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_catch_stderr');
	}
}
