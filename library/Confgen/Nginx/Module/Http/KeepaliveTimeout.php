<?php
/**
 * Class for keepalive_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class KeepaliveTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('keepalive_timeout');
	}
}
