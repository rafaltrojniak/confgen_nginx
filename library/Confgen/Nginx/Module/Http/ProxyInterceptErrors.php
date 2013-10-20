<?php
/**
 * Class for proxy_intercept_errors directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyInterceptErrors extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_intercept_errors');
	}
}
