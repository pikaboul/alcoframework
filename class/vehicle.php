<?php 

class Vehicle {

	private $wheelNb;

	public function __construct($nb)
	{
		$this->wheelNb = $nb;
	}

    /**
     * Gets the value of wheelNb.
     *
     * @return mixed
     */
    public function getWheelNb()
    {
        return $this->wheelNb;
    }

    /**
     * Sets the value of wheelNb.
     *
     * @param mixed $wheelNb the wheel nb
     *
     * @return self
     */
    private function _setWheelNb($wheelNb)
    {
        $this->wheelNb = $wheelNb;

        return $this;
    }
}

/**
* 
*/
class Car extends Vehicle
{
	function __construct()
	{
		return parent::__construct(4);
	}
}

/**
* 
*/
class Bike extends Vehicle
{
	function __construct()
	{
		return parent::__construct(2);
	}
}

?>