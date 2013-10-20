<?php
/**
 * Class for log_format directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LogFormat extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('log_format');
	}
}
