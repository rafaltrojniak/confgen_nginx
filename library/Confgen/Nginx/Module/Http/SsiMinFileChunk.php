<?php
/**
 * Class for ssi_min_file_chunk directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class SsiMinFileChunk extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('ssi_min_file_chunk');
	}
}
