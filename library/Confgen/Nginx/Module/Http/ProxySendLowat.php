<?php
/**
 * Class for proxy_send_lowat directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxySendLowat extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_send_lowat');
	}
}
