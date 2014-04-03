<?php

class Product{
	private $name = '';
	private $description = '';
	private $category = '';
	private $price = 0.0;
	private $shipping = true;

	public function __construct()
	{
	}

	public function __set($property, $value)
	{
		$this->$property = $value;
	}

	public function __get($property)
	{
	    return $this->$property;
	}

	/*public function getName()
	{
		return $this->$name;
	}

	public function setName($value)
	{
		$this->$name = $value;
	}

	public function getDescription()
	{
		return $this->$description;
	}

	public function setDescription($value)
	{
		$this->$description = $value;
	}

	public function getCategory()
	{
		return $this->$category;
	}

	public function setCategory($value)
	{
		$this->$category = $value;
	}

	public function getPrice()
	{
		return $this->$price;
	}

	public function setPrice($value)
	{
		$this->$price = $value;
	}

	public function getShipping()
	{
		return $this->$shipping;
	}

	public function setShipping($value)
	{
		$this->$shipping = $value;
	}*/
};