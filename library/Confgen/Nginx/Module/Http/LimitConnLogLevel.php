<?php
/**
 * Class for limit_conn_log_level directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LimitConnLogLevel extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('limit_conn_log_level');
	}
}
