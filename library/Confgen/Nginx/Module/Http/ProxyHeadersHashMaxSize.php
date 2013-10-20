<?php
/**
 * Class for proxy_headers_hash_max_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyHeadersHashMaxSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_headers_hash_max_size');
	}
}
