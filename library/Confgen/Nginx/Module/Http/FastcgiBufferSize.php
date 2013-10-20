<?php
/**
 * Class for fastcgi_buffer_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiBufferSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_buffer_size');
	}
}
