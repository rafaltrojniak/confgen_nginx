<?php
/**
 * Class for ip_hash directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http\Upstream;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class IpHash extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('ip_hash');
	}
}
