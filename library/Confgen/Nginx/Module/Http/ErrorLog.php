<?php
/**
 * Class for error_log directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ErrorLog extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('error_log');
	}
}
