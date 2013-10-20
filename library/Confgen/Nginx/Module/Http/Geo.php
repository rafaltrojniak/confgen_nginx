<?php
/**
 * Class for geo directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Geo extends Block
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('geo');
	}
}
