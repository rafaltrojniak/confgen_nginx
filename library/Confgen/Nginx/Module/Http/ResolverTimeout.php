<?php
/**
 * Class for resolver_timeout directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ResolverTimeout extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('resolver_timeout');
	}
}
