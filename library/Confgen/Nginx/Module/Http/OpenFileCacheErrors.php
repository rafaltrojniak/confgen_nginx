<?php
/**
 * Class for open_file_cache_errors directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class OpenFileCacheErrors extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('open_file_cache_errors');
	}
}
