<?php
/**
 * Class for use directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Event;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Use extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('use');
	}
}
