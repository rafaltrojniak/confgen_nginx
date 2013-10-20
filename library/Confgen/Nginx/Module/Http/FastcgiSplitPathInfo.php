<?php
/**
 * Class for fastcgi_split_path_info directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiSplitPathInfo extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_split_path_info');
	}
}
