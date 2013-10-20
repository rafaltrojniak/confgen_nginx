<?php
/**
 * Class for chunked_transfer_encoding directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class ChunkedTransferEncoding extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('chunked_transfer_encoding');
	}
}
