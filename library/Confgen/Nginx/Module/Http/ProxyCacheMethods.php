<?php
/**
 * Class for proxy_cache_methods directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyCacheMethods extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_cache_methods');
	}
}
