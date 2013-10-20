<?php
/**
 * Class for debug_points directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class DebugPoints extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('debug_points');
	}
}
