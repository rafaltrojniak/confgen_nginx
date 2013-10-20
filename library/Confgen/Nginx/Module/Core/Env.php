<?php
/**
 * Class for env directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Env extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('env');
	}
}
