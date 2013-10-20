<?php
/**
 * Class for memcached_connect_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MemcachedConnectTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('memcached_connect_timeout');
	}
}
