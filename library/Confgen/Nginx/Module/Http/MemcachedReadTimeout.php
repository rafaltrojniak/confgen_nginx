<?php
/**
 * Class for memcached_read_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MemcachedReadTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('memcached_read_timeout');
	}
}
