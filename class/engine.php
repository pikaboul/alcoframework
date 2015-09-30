<?php

class engine
{
	function render($tpl, $data)
	{
		if(is_array($data))
		{
			extract($data);
		}
		include_once('./' . $tpl . ".php");
	}
}

?>