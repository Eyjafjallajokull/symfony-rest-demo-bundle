<?php

namespace Eyja\RestDemoBundle\Controller;

use Eyja\RestBundle\Controller\RestRepositoryController;

class RestCategoryController extends RestRepositoryController {

	public function getRepository() {
		return $this->getDoctrine()->getRepository('EyjaRestDemoBundle:Category');
	}

	public function getResourceName() {
		return 'category';
	}
}