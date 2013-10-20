<?php
/**
 * Class for server directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http\Upstream;
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
