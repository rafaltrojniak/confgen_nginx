<?php
/**
 * Class for map_hash_bucket_size directive
 * TODO Implement directive logic
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class MapHashBucketSize extends Directive
{

	public function __construct()
	{
		parent::__construct();
		parent::setName('map_hash_bucket_size');
	}
}
