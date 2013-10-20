<?php
/**
 * Class for request_pool_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class RequestPoolSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('request_pool_size');
	}
}
