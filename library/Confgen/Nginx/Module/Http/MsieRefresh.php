<?php
/**
 * Class for msie_refresh directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MsieRefresh extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('msie_refresh');
	}
}
