<?php
/**
 * Class for modern_browser_value directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ModernBrowserValue extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('modern_browser_value');
	}
}
