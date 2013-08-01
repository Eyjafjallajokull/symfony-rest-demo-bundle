<?php

namespace Eyja\RestDemoBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Client;

class RestProductControllerTest extends WebTestCase {
	/** @var  Client */
	public $client;

	protected function setUp() {
		parent::setUp();
		$this->client = static::createClient();
	}

	public function testCreateGetDeleteValid() {
		$entity = array('name' => 'name', 'description' => 'description', 'price' => 123, 'categoryId' => 1);
		$this->request('POST', '/product', json_encode($entity));
		$createEntity = $this->getRequestResult();
		$this->assertArrayHasKey('id', $createEntity);
		$this->assertArrayHasKey('category', $createEntity);
		foreach ($entity as $key => $value) {
			$this->assertArrayHasKey($key, $createEntity);
			$this->assertEquals($value, $createEntity[$key]);
		}

		$this->request('GET', '/product/' . $createEntity['id']);
		$getEntity = $this->getRequestResult();
		foreach ($createEntity as $key => $value) {
			$this->assertArrayHasKey($key, $getEntity);
			$this->assertEquals($value, $getEntity[$key]);
		}

		$entity = array('name' => 'name2', 'description' => 'description2', 'price' => 1234, 'categoryId' => 2);
		$this->request('PUT', '/product/' . $createEntity['id'], json_encode($entity));
		$updateEntity = $this->getRequestResult();
		foreach ($entity as $key => $value) {
			$this->assertArrayHasKey($key, $updateEntity);
			$this->assertEquals($value, $updateEntity[$key]);
		}

		$this->request('DELETE', '/product/' . $createEntity['id']);
		$this->assertEquals(204, $this->client->getResponse()->getStatusCode());
	}

	protected function request($method, $url, $content = '') {
		return $this->client->request($method, $url, array(), array(), array('HTTP_ACCEPT' => 'application/json',
			'CONTENT_TYPE' => 'application/json'), $content);
	}

	protected function getRequestResult() {
		return json_decode($this->client->getResponse()->getContent(), true);
	}
}