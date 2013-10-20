<?php
/**
 * Class for gzip_proxied directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class GzipProxied extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('gzip_proxied');
	}
}
