<?php
/**
 * Class for fastcgi_buffers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiBuffers extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_buffers');
	}
}
