<?php
/**
 * Class for fastcgi_pass_header directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiPassHeader extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_pass_header');
	}
}
