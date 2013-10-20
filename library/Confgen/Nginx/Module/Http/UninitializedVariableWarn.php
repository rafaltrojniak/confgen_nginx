<?php
/**
 * Class for uninitialized_variable_warn directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class UninitializedVariableWarn extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('uninitialized_variable_warn');
	}
}
