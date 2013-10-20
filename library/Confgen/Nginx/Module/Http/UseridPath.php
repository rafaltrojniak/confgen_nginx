<?php
/**
 * Class for userid_path directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class UseridPath extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('userid_path');
	}
}
