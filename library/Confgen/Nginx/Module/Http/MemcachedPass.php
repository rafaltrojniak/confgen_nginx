<?php
/**
 * Class for memcached_pass directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MemcachedPass extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('memcached_pass');
	}
}
