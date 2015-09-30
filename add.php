<?php

	$users = json_decode(file_get_contents("./db/users.json"));

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];

	$users_rev = array_reverse($users->users);
	if(count($users_rev) > 0)
	{
		$last_id   = $users_rev[0]->id;
	}
	else
	{
		$last_id   = 0;
	}

	$job = Helper::rand_job();


	if($age!="")
	{
		$users->users[] = array("id" => $last_id+1,"firstName" => $firstname, "lastName" => $lastname, "age" => $age, "job" => $job);
	}
	else
	{
		$users->users[] = array("id" => $last_id+1,"firstName" => $firstname, "lastName" => $lastname, "job" => $job);
	}
	file_put_contents("./db/users.json", json_encode($users));

	echo $last_id+1;

?>