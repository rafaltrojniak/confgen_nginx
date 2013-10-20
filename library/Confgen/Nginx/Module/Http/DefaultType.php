<?php
/**
 * Class for default_type directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class DefaultType extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('default_type');
	}
}
