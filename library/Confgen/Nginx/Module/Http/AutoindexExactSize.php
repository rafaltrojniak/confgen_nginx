<?php
/**
 * Class for autoindex_exact_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class AutoindexExactSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('autoindex_exact_size');
	}
}
