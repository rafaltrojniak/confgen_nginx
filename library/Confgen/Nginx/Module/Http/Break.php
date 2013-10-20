<?php
/**
 * Class for break directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Break extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('break');
	}
}
