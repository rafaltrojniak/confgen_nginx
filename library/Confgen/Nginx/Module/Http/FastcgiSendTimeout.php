<?php
/**
 * Class for fastcgi_send_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiSendTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_send_timeout');
	}
}
