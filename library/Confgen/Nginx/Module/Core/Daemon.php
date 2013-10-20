<?php
/**
 * Class for daemon directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Daemon extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('daemon');
	}
}
