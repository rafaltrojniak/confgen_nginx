<?php
/**
 * Class for postpone_gzipping directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class PostponeGzipping extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('postpone_gzipping');
	}
}
