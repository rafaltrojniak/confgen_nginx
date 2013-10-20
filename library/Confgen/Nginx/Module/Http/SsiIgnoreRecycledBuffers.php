<?php
/**
 * Class for ssi_ignore_recycled_buffers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class SsiIgnoreRecycledBuffers extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('ssi_ignore_recycled_buffers');
	}
}
