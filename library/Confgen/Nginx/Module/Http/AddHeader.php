<?php
/**
 * Class for add_header directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class AddHeader extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('add_header');
	}
}
