<?php

namespace Eyja\RestDemoBundle\Controller;

use Doctrine\ORM\QueryBuilder;
use Eyja\RestBundle\Controller\RestRepositoryController;

class RestProductController extends RestRepositoryController {

	public function getRepository() {
		return $this->getDoctrine()->getRepository('EyjaRestDemoBundle:Product');
	}

	public function getResourceName() {
		return 'product';
	}

	protected function setQueryWhere(QueryBuilder $queryBuilder) {
		$queryBuilder->andWhere('c.is_disabled = 0');
		return $queryBuilder;
	}
}