<?php 

class Field {
	private $type;
	private $name;
	private $required;
	private $placeholder;
	private $value;
	private $label;

	public function __construct($args)
	{
		foreach ($args as $key => $value) {
			if(property_exists($this, $key))
			{
				$this->{$key} = $value;
			}
		}
	}

    /**
     * Gets the value of type.
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the value of required.
     *
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Gets the value of placeholder.
     *
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * Gets the value of value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Gets the value of label.
     *
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }
}

?>