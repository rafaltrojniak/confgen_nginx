<?php
/**
 * Class for proxy_ignore_headers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyIgnoreHeaders extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_ignore_headers');
	}
}
