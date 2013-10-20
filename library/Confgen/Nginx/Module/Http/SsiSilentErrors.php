<?php
/**
 * Class for ssi_silent_errors directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class SsiSilentErrors extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('ssi_silent_errors');
	}
}
