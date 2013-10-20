<?php
/**
 * Class for proxy_max_temp_file_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyMaxTempFileSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_max_temp_file_size');
	}
}
