<?php
/**
 * Class for proxy_connect_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyConnectTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_connect_timeout');
	}
}
