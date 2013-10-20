<?php
/**
 * Class for try_files directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class TryFiles extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('try_files');
	}
}
