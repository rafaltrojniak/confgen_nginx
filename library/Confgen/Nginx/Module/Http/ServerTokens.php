<?php
/**
 * Class for server_tokens directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ServerTokens extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('server_tokens');
	}
}
