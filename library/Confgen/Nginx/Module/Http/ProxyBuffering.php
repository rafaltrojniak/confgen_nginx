<?php
/**
 * Class for proxy_buffering directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyBuffering extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_buffering');
	}
}
