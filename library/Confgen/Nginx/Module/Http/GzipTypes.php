<?php
/**
 * Class for gzip_types directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class GzipTypes extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('gzip_types');
	}
}
