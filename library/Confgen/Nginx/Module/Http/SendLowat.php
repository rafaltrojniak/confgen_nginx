<?php
/**
 * Class for send_lowat directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class SendLowat extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('send_lowat');
	}
}
