<?php
/**
 * Class for fastcgi_next_upstream directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiNextUpstream extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_next_upstream');
	}
}
