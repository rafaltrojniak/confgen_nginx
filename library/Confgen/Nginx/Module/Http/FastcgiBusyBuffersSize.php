<?php
/**
 * Class for fastcgi_busy_buffers_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiBusyBuffersSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_busy_buffers_size');
	}
}
