<?php
/**
 * Class for proxy_cache_path directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyCachePath extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_cache_path');
	}
}
