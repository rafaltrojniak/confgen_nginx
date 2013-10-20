<?php
/**
 * Class for directio directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Directio extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('directio');
	}
}
