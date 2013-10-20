<?php
/**
 * Class for expires directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Expires extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('expires');
	}
}
