<?php
/**
 * Class for worker_connections directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Event;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class WorkerConnections extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('worker_connections');
	}
}
