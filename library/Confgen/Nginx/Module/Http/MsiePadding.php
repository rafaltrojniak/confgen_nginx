<?php
/**
 * Class for msie_padding directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MsiePadding extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('msie_padding');
	}
}
