<?php
/**
 * Class for tcp_nodelay directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class TcpNodelay extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('tcp_nodelay');
	}
}
