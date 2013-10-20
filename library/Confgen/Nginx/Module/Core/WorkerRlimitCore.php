<?php
/**
 * Class for worker_rlimit_core directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class WorkerRlimitCore extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('worker_rlimit_core');
	}
}
