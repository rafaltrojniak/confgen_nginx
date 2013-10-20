<?php
/**
 * Class for proxy_set_header directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxySetHeader extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_set_header');
	}
}
