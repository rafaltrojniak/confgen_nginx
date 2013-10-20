<?php
/**
 * Class for ssi_value_length directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class SsiValueLength extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('ssi_value_length');
	}
}
