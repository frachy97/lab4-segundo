<?php
namespace model;

class Service
{
	private $id;
	private $client;//dni del cliente
	private $brand;
	private $model;
	private $patent;
	private $description;//tareas a realizar
	private $price;
	private $state;
    private $msg;


	function __construct($id, $client, $brand, $model, $patent, $description,$price, $state='en espera', $msg='')
	{
		$this->id= $id;
		$this->client = $client;
		$this->brand = $brand;
		$this->model = $model;
		$this->patent = $patent;
		$this->description = $description;
		$this->price =$price;
		$this->state = $state;
        $this->msg= $msg;
	
	}


	


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     *
     * @return self
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPatent()
    {
        return $this->patent;
    }

    /**
     * @param mixed $patent
     *
     * @return self
     */
    public function setPatent($patent)
    {
        $this->patent = $patent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param mixed $msg
     *
     * @return self
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }
}
?>