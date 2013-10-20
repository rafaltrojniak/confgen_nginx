<?php
/**
 * Class for fastcgi_max_temp_file_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiMaxTempFileSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_max_temp_file_size');
	}
}
