<?php
/**
 * Class for underscores_in_headers directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class UnderscoresInHeaders extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('underscores_in_headers');
	}
}
