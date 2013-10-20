<?php
/**
 * Class for gzip_window directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class GzipWindow extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('gzip_window');
	}
}
