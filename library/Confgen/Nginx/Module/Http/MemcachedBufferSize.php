<?php
/**
 * Class for memcached_buffer_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MemcachedBufferSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('memcached_buffer_size');
	}
}
