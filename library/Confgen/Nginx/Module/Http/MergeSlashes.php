<?php
/**
 * Class for merge_slashes directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MergeSlashes extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('merge_slashes');
	}
}
