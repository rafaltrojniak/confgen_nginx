<?php
/**
 * Class for fastcgi_read_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiReadTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_read_timeout');
	}
}
