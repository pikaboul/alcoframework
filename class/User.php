<?php 
class User
{

	private $firstname;
	private $lastname;
    private $age;
    private $copyright;
    private $id;

    function __construct($fn, $ln, $id, $copyright = "", $age = null)
    {
        $this->firstname = $fn;
        $this->lastname = $ln;
        $this->copyright = $copyright;
        $this->id = $id;
        $this->age = is_null($age) ? rand(15,99) : $age;
    }

    /**
     * Gets the value of firstname.
     *
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the value of firstname.
     *
     * @param mixed $firstname the firstname
     *
     * @return self
     */
    public function _setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Gets the value of lastname.
     *
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the value of lastname.
     *
     * @param mixed $lastname the lastname
     *
     * @return self
     */
    public function _setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Gets the value of age.
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets the value of age.
     *
     * @param mixed $age the age
     *
     * @return self
     */
    public function _setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets the value of copyright.
     *
     * @return mixed
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets the value of copyright.
     *
     * @param mixed $copyright the copyright
     *
     * @return self
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get the name by concat.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->firstname . " " . $this->lastname;
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

 ?>