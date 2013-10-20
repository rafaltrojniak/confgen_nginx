<?php
/**
 * Class for memcached_next_upstream directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MemcachedNextUpstream extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('memcached_next_upstream');
	}
}
