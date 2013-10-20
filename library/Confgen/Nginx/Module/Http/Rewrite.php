<?php
/**
 * Class for rewrite directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Rewrite extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('rewrite');
	}
}
