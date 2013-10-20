<?php
/**
 * Class for access_log directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class AccessLog extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('access_log');
	}
}
