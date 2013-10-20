<?php
/**
 * Class for worker_cpu_affinity directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class WorkerCpuAffinity extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('worker_cpu_affinity');
	}
}
