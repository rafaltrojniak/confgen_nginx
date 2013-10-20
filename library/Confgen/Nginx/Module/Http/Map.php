<?php
/**
 * Class for map directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Map extends Block
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('map');
	}
}
