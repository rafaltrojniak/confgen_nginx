<?php
/**
 * Class for proxy_store_access directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyStoreAccess extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_store_access');
	}
}
