<?php

	$users = json_decode(file_get_contents("./db/users.json"));

	$id = $_POST['id'];

	$idtoremove = null;
	foreach ($users->users as $key => $user) {
		if($user->id == $id )
		{
			$idtoremove = $key;
		}
	}

	unset($users->users[$key]);

	file_put_contents("./db/users.json", json_encode($users));

	echo $id;

?>