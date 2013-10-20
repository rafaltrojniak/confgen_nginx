<?php
/**
 * Class for fastcgi_store_access directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiStoreAccess extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_store_access');
	}
}
