<?php
/**
 * Class for charset_types directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class CharsetTypes extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('charset_types');
	}
}
