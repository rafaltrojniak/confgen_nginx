<?php
/**
 * Class for gzip_min_length directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class GzipMinLength extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('gzip_min_length');
	}
}
