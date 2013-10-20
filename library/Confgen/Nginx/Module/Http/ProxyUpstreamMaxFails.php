<?php
/**
 * Class for proxy_upstream_max_fails directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyUpstreamMaxFails extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_upstream_max_fails');
	}
}
