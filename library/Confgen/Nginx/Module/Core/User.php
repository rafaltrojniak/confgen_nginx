<?php
/**
 * Class for user directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class User extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('user');
	}
}
