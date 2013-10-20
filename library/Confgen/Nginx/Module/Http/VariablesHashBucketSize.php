<?php
/**
 * Class for variables_hash_bucket_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class VariablesHashBucketSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('variables_hash_bucket_size');
	}
}
