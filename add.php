<?php

if(isset($_POST['firstname']))
{
	if(!isset($_COOKIE['faku']) || $_COOKIE['faku'] != 1 || $ADMIN)
	{
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

		$value = new User($firstname, $lastname, $last_id+1, "", $age, $job);
		
		Engine::render('user', array("value" => $value,"key"=>count($users)));

		setcookie('faku', 1, 9999999999);
	}
	else
	{

		Engine::render('toast', array("success" => false, "message" => "Tu as déjà soumis un nom, coquinou." ));

	}
}
else
{
	$fields[] =	array("type" =>"text", "name" => "firstname", "required" => true, "placeholder" => "Newbie's first name?");
	$fields[] =	array("type" =>"text", "name" => "lastname", "required" => true, "placeholder" => "Newbie's last name?");
	$fields[] =	array("type" =>"text", "name" => "age", "required" => true, "placeholder" => "For how long?");
	$fields[] =	array("type" =>"submit");
	$form = new Form("/add", "GET", $fields);
	Engine::render('form', array("form" => $form));
}


	 ?>