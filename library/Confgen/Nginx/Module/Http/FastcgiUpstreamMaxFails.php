<?php
/**
 * Class for fastcgi_upstream_max_fails directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiUpstreamMaxFails extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_upstream_max_fails');
	}
}
