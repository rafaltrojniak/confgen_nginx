<?php
/**
 * Class for userid_mark directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class UseridMark extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('userid_mark');
	}
}
