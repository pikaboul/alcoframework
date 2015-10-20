<?php

	$users = json_decode(file_get_contents("./db/users.json"));

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'] != "" ? $_POST['age'] : rand(1,99);

	$last_id = file_get_contents("./db/users_i.json");
	file_put_contents("./db/users_i.json", $last_id+1);

	$job = Helper::rand_job();

	if($age!="")
	{
		$users[] = array("id" => $last_id+1,"firstName" => $firstname, "lastName" => $lastname, "age" => $age, "job" => $job);
	}
	file_put_contents("./db/users.json", json_encode($users, JSON_PRETTY_PRINT ));

	$value = new User($firstname, $lastname, $last_id+1, "", $age, $job)
?>

<?php Engine::render('user', array("value" => $value,"key"=>count($users))); ?>