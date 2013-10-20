<?php
/**
 * Class for large_client_header_buffers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LargeClientHeaderBuffers extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('large_client_header_buffers');
	}
}
