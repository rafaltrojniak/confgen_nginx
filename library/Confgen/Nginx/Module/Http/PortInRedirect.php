<?php
/**
 * Class for port_in_redirect directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class PortInRedirect extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('port_in_redirect');
	}
}
