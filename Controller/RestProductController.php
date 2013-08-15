<?php

namespace Eyja\RestDemoBundle\Controller;

use Doctrine\ORM\QueryBuilder;
use Eyja\RestBundle\Controller\RestRepositoryController;

/**
 * Example custom controller for REST resource
 */
class RestProductController extends RestRepositoryController {

	/**
	 * Return doctrine entity name associated with this controller
	 *
	 * @return string
	 */
	public function getRepositoryName() {
		return 'EyjaRestDemoBundle:Product';
	}

	/**
	 * Return resource name
	 *
	 * This name will be used to generate routes, eg. /product, /product/1
	 *
	 * @return string
	 */
	public function getResourceName() {
		return 'product';
	}

	/**
	 * Return array of field names allowed for filtering
	 *
	 * @return array
	 */
	public function getAllowedFilterFields() {
		return array('price', 'categoryId');
	}

	/**
	 * Extend default query used for fetching entities
	 *
	 * @param QueryBuilder $queryBuilder
	 * @return QueryBuilder|void
	 */
	protected function setQueryWhere(QueryBuilder $queryBuilder) {
		$queryBuilder->andWhere('c.is_disabled = 0');
		return $queryBuilder;
	}
}