<?php
/**
 * Class for userid directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Userid extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('userid');
	}
}
