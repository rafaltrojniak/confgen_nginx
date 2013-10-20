<?php
/**
 * Class for proxy_hide_header directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyHideHeader extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_hide_header');
	}
}
