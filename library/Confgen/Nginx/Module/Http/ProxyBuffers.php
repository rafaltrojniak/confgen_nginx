<?php
/**
 * Class for proxy_buffers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyBuffers extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_buffers');
	}
}
