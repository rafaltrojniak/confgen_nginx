<?php
/**
 * Class for working_directory directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class WorkingDirectory extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('working_directory');
	}
}
