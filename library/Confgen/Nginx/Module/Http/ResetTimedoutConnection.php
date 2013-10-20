<?php
/**
 * Class for reset_timedout_connection directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ResetTimedoutConnection extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('reset_timedout_connection');
	}
}
