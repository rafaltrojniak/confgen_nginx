<?php
/**
 * Class for output_buffers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class OutputBuffers extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('output_buffers');
	}
}
