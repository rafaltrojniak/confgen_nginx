<?php
/**
 * Class for http directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Http extends Block
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('http');
	}
}
