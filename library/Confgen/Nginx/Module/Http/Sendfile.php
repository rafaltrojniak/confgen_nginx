<?php
/**
 * Class for sendfile directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Sendfile extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('sendfile');
	}
}
