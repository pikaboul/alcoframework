<?php


class Engine
{
	static function render($tpl, $data = null)
	{
		global $ADMIN;
		if(is_array($data))
		{
			extract($data);
		}
		include('./template/' . $tpl . ".php");
	}
}

?>