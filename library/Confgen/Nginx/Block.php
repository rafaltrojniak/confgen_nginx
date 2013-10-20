<?php
/**
 * This block contains set of directives, that are associated in one block
 **/
namespace Confgen\Nginx;
abstract class Block extends Directive
{

	private $directives=array();

	/**
	 * Returns directives list 
	 * 
	 * @return 
	 * @author : Rafał Trójniak rafal@trojniak.net
	 */
	public function getDirectives()
	{
		return $this->directives;
	}

	/**
	 * Adds directives to directive set 
	 * TODO add position in set specification
	 * 
	 * @param Directive $directive 
	 * @return Block fluent interface
	 * @author : Rafał Trójniak rafal@trojniak.net
	 */
	public function addDirective(Directive $directive)
	{
		$this->directives[]=$directive;
		ksort($this->directives);
		return $this;
	}

}
