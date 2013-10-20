<?php
/**
 * Class for ignore_invalid_headers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class IgnoreInvalidHeaders extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('ignore_invalid_headers');
	}
}
