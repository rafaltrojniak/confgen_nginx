<?php
/**
 * Class for proxy_read_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyReadTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_read_timeout');
	}
}
