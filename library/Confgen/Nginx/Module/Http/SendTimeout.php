<?php
/**
 * Class for send_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class SendTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('send_timeout');
	}
}
