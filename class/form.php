<?php 

class Form {
	private $fields;
	private $action;
	private $method;

	public function __construct($action, $method = "GET", $fields = array())
	{
		$this->action = $action;
		$this->method = $method;

		if(is_array($fields))
		{
			foreach ($fields as $key => $field) {
				$this->fields[] = new Field($field);
			}
		}
	}

    /**
     * Gets the value of fields.
     *
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Gets the value of action.
     *
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Gets the value of method.
     *
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }
}

?>