<?php
/**
 * Class for client_body_buffer_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ClientBodyBufferSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('client_body_buffer_size');
	}
}
