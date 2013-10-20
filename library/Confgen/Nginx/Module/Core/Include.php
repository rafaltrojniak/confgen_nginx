<?php
/**
 * Class for include directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\CORE;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Include extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('include');
	}
}
