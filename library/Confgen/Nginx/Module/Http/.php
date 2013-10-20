<?php
/**
 * Class for real_ip_header directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class  extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('real_ip_header');
	}
}
