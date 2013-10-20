<?php
/**
 * Class for rewrite_log directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class RewriteLog extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('rewrite_log');
	}
}
