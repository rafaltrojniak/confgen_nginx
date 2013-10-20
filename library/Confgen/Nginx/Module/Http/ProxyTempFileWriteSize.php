<?php
/**
 * Class for proxy_temp_file_write_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ProxyTempFileWriteSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('proxy_temp_file_write_size');
	}
}
