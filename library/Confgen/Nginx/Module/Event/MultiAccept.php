<?php
/**
 * Class for multi_accept directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Event;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MultiAccept extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('multi_accept');
	}
}
