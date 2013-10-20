<?php
/**
 * Class for valid_referers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ValidReferers extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('valid_referers');
	}
}
