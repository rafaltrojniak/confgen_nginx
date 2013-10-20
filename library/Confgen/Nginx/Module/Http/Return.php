<?php
/**
 * Class for return directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Return extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('return');
	}
}
