<?php
/**
 * This block contains set of directives, that are associated in one block
 **/
namespace Confgen\Nginx\Module\Core;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Inc extends Directive
{

	private $file;

	public function __construct()
	{
		parent::__construct();
		parent::setName('include');
	}

	/**
	 * Sets file to include 
	 * 
	 * @param $file 
	 * @return Inc fluent interface
	 * @author : Rafał Trójniak rafal@trojniak.net
	 */
	public function setFile($file)
	{
		$this->file=$file;
		return $this;
	}

	public function getParams()
	{
		return array($this->file);
	}
}
