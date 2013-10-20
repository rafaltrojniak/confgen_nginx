<?php
/**
 * Class for proxy_next_upstream directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyNextUpstream extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_next_upstream');
	}
}
