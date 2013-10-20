<?php
/**
 * Class for fastcgi_cache directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiCache extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_cache');
	}
}
