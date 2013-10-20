<?php
/**
 * Class for proxy_upstream_fail_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyUpstreamFailTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_upstream_fail_timeout');
	}
}
