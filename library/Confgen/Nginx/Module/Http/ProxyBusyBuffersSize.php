<?php
/**
 * Class for proxy_busy_buffers_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyBusyBuffersSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_busy_buffers_size');
	}
}
