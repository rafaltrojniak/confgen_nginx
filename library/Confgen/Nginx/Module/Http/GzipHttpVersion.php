<?php
/**
 * Class for gzip_http_version directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class GzipHttpVersion extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('gzip_http_version');
	}
}
