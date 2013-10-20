<?php
/**
 * Class for proxy_method directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyMethod extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_method');
	}
}
