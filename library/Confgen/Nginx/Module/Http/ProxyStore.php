<?php
/**
 * Class for proxy_store directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyStore extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_store');
	}
}
