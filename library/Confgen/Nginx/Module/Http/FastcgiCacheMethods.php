<?php
/**
 * Class for fastcgi_cache_methods directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiCacheMethods extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_cache_methods');
	}
}
