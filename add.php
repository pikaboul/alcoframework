<?php

	$users = json_decode(file_get_contents("./db/users.json"));

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];

	$last_id = file_get_contents("./db/users_i.json");
	file_put_contents("./db/users_i.json", $last_id+1);

	$job = Helper::rand_job();

	if($age!="")
	{
		$users[] = array("id" => $last_id+1,"firstName" => $firstname, "lastName" => $lastname, "age" => $age, "job" => $job);
	}
	else
	{
		$users[] = array("id" => $last_id+1,"firstName" => $firstname, "lastName" => $lastname, "job" => $job);
	}
	file_put_contents("./db/users.json", json_encode($users, JSON_PRETTY_PRINT ));

	echo $last_id+1;

?>