<?php
/**
 * Class for master_process directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MasterProcess extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('master_process');
	}
}
