<?php

namespace Eyja\RestDemoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Category {
	protected $id;
	protected $name;
	protected $parent_id;
	protected $children;
	protected $parent;

	public function __construct() {
		$this->children = new ArrayCollection();
	}

	/**
	 * @param ArrayCollection $children
	 */
	public function setChildren($children) {
		$this->children = $children;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getChildren() {
		return $this->children;
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
	 * @param mixed $parent
	 */
	public function setParent($parent) {
		$this->parent = $parent;
	}

	/**
	 * @return mixed
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * @param mixed $parent_id
	 */
	public function setParentId($parent_id) {
		$this->parent_id = $parent_id;
	}

	/**
	 * @return mixed
	 */
	public function getParentId() {
		return $this->parent_id;
	}
}