<?php
/**
 * Class for types_hash_bucket_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class TypesHashBucketSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('types_hash_bucket_size');
	}
}
