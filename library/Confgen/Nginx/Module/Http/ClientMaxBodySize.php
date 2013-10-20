<?php
/**
 * Class for client_max_body_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ClientMaxBodySize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('client_max_body_size');
	}
}
