<?php
/**
 * Class for client_body_temp_path directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ClientBodyTempPath extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('client_body_temp_path');
	}
}
