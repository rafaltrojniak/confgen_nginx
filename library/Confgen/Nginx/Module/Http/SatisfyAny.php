<?php
/**
 * Class for satisfy_any directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class SatisfyAny extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('satisfy_any');
	}
}
