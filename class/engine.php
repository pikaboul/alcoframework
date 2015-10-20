<?php

class Engine
{
	static function render($tpl, $data = null)
	{
		if(is_array($data))
		{
			extract($data);
		}
		include('./template/' . $tpl . ".php");
	}
}

?>