<?php
/**
 * Class for recursive_error_pages directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class RecursiveErrorPages extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('recursive_error_pages');
	}
}
