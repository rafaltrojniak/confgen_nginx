<?php
/**
 * Class for ssi directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Ssi extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('ssi');
	}
}
