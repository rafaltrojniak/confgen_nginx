<?php
/**
 * This interface abstracts single directive or block of configuration
 **/
namespace Confgen\Nginx;
interface Element
{

	/**
	 * Returns element name 
	 * 
	 * @return string Element name
	 * @author : Rafał Trójniak rafal@trojniak.net
	 */
	function getName();
	
	/**
	 * Rreturns element parameters as array 
	 * 
	 * @return array Array of parameters
	 * @author : Rafał Trójniak rafal@trojniak.net
	 */
	function getParams();
}
