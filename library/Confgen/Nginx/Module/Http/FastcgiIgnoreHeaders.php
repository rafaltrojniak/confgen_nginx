<?php
/**
 * Class for fastcgi_ignore_headers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiIgnoreHeaders extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_ignore_headers');
	}
}
