<?php
/**
 * Class for open_log_file_cache directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class OpenLogFileCache extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('open_log_file_cache');
	}
}
