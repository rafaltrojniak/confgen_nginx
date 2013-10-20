<?php
/**
 * Class for fastcgi_index directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiIndex extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_index');
	}
}
