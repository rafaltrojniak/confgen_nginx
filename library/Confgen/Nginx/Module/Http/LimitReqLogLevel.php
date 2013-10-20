<?php
/**
 * Class for limit_req_log_level directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LimitReqLogLevel extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('limit_req_log_level');
	}
}
