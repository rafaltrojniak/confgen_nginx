<?php
/**
 * Class for accept_mutex directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Event;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class AcceptMutex extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('accept_mutex');
	}
}
