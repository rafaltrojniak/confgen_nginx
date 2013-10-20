<?php
/**
 * Class for if_modified_since directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class IfModifiedSince extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('if_modified_since');
	}
}
