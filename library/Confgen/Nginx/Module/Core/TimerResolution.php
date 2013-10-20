<?php
/**
 * Class for timer_resolution directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class TimerResolution extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('timer_resolution');
	}
}
