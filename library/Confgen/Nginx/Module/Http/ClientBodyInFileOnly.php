<?php
/**
 * Class for client_body_in_file_only directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ClientBodyInFileOnly extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('client_body_in_file_only');
	}
}
