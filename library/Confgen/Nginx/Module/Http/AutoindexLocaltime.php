<?php
/**
 * Class for autoindex_localtime directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class AutoindexLocaltime extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('autoindex_localtime');
	}
}
