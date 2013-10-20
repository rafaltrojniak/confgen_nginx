<?php
/**
 * Class for limit_except directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LimitExcept extends Block
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('limit_except');
	}
}
