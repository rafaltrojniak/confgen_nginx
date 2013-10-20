<?php
/**
 * Class for server_names_hash_max_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ServerNamesHashMaxSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('server_names_hash_max_size');
	}
}
