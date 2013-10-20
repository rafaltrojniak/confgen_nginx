<?php
/**
 * Class for allow directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Allow extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('allow');
	}
}
