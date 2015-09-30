<?php 

	$users = json_decode(file_get_contents("./db/users.json"));

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];

	$users_rev = array_reverse($users->users);
	$last_id   = $users_rev[0]->id;

	$users->users[] = array("id" => $last_id++,"firstName" => $firstname, "lastName" => $lastname, "age" => $age);
	file_put_contents("./db/users.json", json_encode($users));

?>