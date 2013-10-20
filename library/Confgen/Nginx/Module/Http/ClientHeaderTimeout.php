<?php
/**
 * Class for client_header_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ClientHeaderTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('client_header_timeout');
	}
}
