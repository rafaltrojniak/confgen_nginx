<?php
/**
 * Class for worker_rlimit_sigpending directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class WorkerRlimitSigpending extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('worker_rlimit_sigpending');
	}
}
