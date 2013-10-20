<?php
/**
 * Class for limit_rate directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LimitRate extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('limit_rate');
	}
}
