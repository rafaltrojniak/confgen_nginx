<?php
/**
 * Class for events directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Events extends Block
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('events');
	}
}
