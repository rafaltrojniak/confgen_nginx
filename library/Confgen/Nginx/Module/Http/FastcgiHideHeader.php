<?php
/**
 * Class for fastcgi_hide_header directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiHideHeader extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_hide_header');
	}
}
