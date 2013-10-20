<?php
/**
 * Class for limit_zone directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LimitZone extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('limit_zone');
	}
}
