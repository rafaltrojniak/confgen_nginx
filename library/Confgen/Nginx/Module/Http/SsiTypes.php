<?php
/**
 * Class for ssi_types directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class SsiTypes extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('ssi_types');
	}
}
