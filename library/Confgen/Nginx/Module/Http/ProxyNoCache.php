<?php
/**
 * Class for proxy_no_cache directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyNoCache extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_no_cache');
	}
}
