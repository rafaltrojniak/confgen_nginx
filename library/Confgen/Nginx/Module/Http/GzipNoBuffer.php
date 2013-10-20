<?php
/**
 * Class for gzip_no_buffer directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class GzipNoBuffer extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('gzip_no_buffer');
	}
}
