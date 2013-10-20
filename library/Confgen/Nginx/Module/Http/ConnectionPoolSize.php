<?php
/**
 * Class for connection_pool_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ConnectionPoolSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('connection_pool_size');
	}
}
