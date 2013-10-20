<?php
/**
 * Class for sendfile_max_chunk directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class SendfileMaxChunk extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('sendfile_max_chunk');
	}
}
