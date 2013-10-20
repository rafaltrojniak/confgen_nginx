<?php
/**
 * Class for worker_priority directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class WorkerPriority extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('worker_priority');
	}
}
