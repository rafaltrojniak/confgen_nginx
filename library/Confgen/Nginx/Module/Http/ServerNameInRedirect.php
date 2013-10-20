<?php
/**
 * Class for server_name_in_redirect directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ServerNameInRedirect extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('server_name_in_redirect');
	}
}
