<?php
/**
 * Class for error_page directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ErrorPage extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('error_page');
	}
}
