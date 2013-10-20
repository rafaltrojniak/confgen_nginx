<?php
/**
 * Class for fastcgi_ignore_client_abort directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class FastcgiIgnoreClientAbort extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('fastcgi_ignore_client_abort');
	}
}
