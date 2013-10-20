<?php
/**
 * Class for variables_hash_max_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class VariablesHashMaxSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('variables_hash_max_size');
	}
}
