<?php
/**
 * Class for epoll_events directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Event;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class EpollEvents extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('epoll_events');
	}
}
