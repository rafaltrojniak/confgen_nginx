<?php
/**
 * Class for post_action directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class PostAction extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('post_action');
	}
}
