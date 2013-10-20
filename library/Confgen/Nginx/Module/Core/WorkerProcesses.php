<?php
/**
 * Class for worker_processes directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class WorkerProcesses extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('worker_processes');
	}
}
