<?php
/**
 * Class for debug_connection directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Event;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class DebugConnection extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('debug_connection');
	}
}
