<?php
/**
 * Class for fastcgi_intercept_errors directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiInterceptErrors extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_intercept_errors');
	}
}
