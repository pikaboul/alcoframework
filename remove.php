<?php

	$users = json_decode(file_get_contents("./db/users.json"));

	$id = $_POST['id'];

	$idtoremove = null;
	foreach ($users as $key => $user) {
		if($user->id == $id )
		{
			$idtoremove = $key;
			break;
		}
	}

	unset($users[$key]);

	$users = array_values(array_filter($users));

	file_put_contents("./db/users.json", json_encode($users, JSON_PRETTY_PRINT ));

	echo $id;

?>