<?php
/**
 * Class for lingering_time directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LingeringTime extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('lingering_time');
	}
}
