<?php

class engine
{
	function render($tpl, $data = null)
	{
		if(is_array($data))
		{
			extract($data);
		}
		include_once('./template/' . $tpl . ".php");
	}
}

?>