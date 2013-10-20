<?php
/**
 * Formatter for printing configuration from object
 **/
namespace Confgen\Nginx;
class Formater
{
	private $options=array();
	
	function __construct()
	{
		$this->options['indentchr']="\t";
	}

	public function format(Directive $directive, $level=0)
	{
		$indent=str_repeat($this->options['indentchr'],$level);
		$output= 
				$indent.$directive->getName()."\t".
				implode(' ', $directive->getParams());

		if($directive instanceof File ){

			$content=null;
			foreach($directive->getDirectives() as $directive){
				$content.=$this->format($directive, $level)."\n";
			}
			return $content;
		}elseif($directive instanceof Block ){

			$chlevel=$level+1;
			$content=null;
			foreach($directive->getDirectives() as $directive){
				$content.=$this->format($directive, $chlevel)."\n";
			}
			return $output."\t$indent{\n$content$indent}\n";
		}else{
			return $output.";";
		}
	}
}
