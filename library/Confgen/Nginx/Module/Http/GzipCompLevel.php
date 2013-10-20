<?php
/**
 * Class for gzip_comp_level directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class GzipCompLevel extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('gzip_comp_level');
	}
}
