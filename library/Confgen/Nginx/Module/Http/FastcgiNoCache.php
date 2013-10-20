<?php
/**
 * Class for fastcgi_no_cache directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiNoCache extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_no_cache');
	}
}
