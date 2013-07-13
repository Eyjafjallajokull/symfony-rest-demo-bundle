<?php

namespace Eyja\RestDemoBundle\Entity;

class Product {
	protected $id;
	protected $name;
	protected $price;
	protected $description;
	protected $category_id;
	protected $category;
	protected $is_disabled = false;

	public function setIsDisabled($is_disabled) {
		$this->is_disabled = $is_disabled;
	}

	public function getIsDisabled() {
		return $this->is_disabled;
	}


	/**
	 * @param mixed $category
	 */
	public function setCategory($category) {
		$this->category = $category;
	}

	/**
	 * @return mixed
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * @param mixed $category_id
	 */
	public function setCategoryId($category_id) {
		$this->category_id = $category_id;
	}

	/**
	 * @return mixed
	 */
	public function getCategoryId() {
		return $this->category_id;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $price
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * @return mixed
	 */
	public function getPrice() {
		return $this->price;
	}
}