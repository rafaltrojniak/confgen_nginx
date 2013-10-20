<?php
/**
 * This block contains set of directives, that are associated in one block
 **/
namespace Confgen\Nginx;
abstract class Directive
	implements Element
{
	private $name;

	/**
	 * Default constructor, for future usage 
	 * 
	 * @return 
	 * @author : Rafał Trójniak rafal@trojniak.net
	 */
	public function __construct()
	{
	}

	/**
	 * Returns directive name 
	 * 
	 * @return 
	 * @author : Rafał Trójniak rafal@trojniak.net
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Sets directive name 
	 * 
	 * @param $name string Name to set
	 * @return Element fluent interface
	 * @author : Rafał Trójniak rafal@trojniak.net
	 */
	protected function setName($name)
	{
		$this->name=(string)$name;
		return $this;
	}

	/**
	 * By default, doesn't return any parameters 
	 * 
	 * @return array
	 * @author : Rafał Trójniak rafal@trojniak.net
	 */
	public function getParams()
	{
		return array();
	}
}
