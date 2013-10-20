<?php
/**
 * Class for limit_req_zone directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LimitReqZone extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('limit_req_zone');
	}
}
