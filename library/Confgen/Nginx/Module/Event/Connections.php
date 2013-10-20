<?php
/**
 * Class for connections directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Event;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Connections extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('connections');
	}
}
