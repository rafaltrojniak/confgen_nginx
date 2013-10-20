<?php
/**
 * Class for limit_rate_after directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LimitRateAfter extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('limit_rate_after');
	}
}
