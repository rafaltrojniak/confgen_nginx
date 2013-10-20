<?php
/**
 * Class for optimize_server_names directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class OptimizeServerNames extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('optimize_server_names');
	}
}
