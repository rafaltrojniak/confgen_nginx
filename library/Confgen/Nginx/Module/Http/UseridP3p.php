<?php
/**
 * Class for userid_p3p directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class UseridP3p extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('userid_p3p');
	}
}
