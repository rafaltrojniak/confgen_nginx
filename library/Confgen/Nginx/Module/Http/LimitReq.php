<?php
/**
 * Class for limit_req directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LimitReq extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('limit_req');
	}
}
