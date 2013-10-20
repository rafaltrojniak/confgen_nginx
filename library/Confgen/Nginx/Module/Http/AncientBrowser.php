<?php
/**
 * Class for ancient_browser directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class AncientBrowser extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('ancient_browser');
	}
}
