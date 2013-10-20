<?php
/**
 * Class for auth_basic_user_file directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class AuthBasicUserFile extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('auth_basic_user_file');
	}
}
