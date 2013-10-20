<?php
/**
 * Class for server directive
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Server extends Block
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('server');
	}
}
