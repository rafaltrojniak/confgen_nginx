<?php
/**
 * Class for proxy_buffer_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyBufferSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_buffer_size');
	}
}
