<?php
/**
 * Class for memcached_send_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MemcachedSendTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('memcached_send_timeout');
	}
}
