<?php
/**
 * Class for charset_map directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class CharsetMap extends Block
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('charset_map');
	}
}
