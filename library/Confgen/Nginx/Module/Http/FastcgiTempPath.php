<?php
/**
 * Class for fastcgi_temp_path directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiTempPath extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_temp_path');
	}
}
