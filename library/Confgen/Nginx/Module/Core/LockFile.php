<?php
/**
 * Class for lock_file directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class LockFile extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('lock_file');
	}
}
