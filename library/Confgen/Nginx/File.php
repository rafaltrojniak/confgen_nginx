<?php
/**
 * This block contains set of directives, that are associated in one block
 **/
namespace Confgen\Nginx;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class File extends Block
{

	public function __construct()
	{
		parent::__construct();
	}


	public function getParams()
	{
		return array();
	}
}
