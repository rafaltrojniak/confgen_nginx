<?php
/**
 * Class for fastcgi_param directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiParam extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_param');
	}
}
