<?php

$users = json_decode(file_get_contents("./db/users.json"));

$i = 0;

$data = array();

foreach ($users as $key => $user) {
	$cop = isset($user->copyright)?$user->copyright:"";
	$age = isset($user->age)?$user->age:null;
	$job = isset($user->job)?$user->job:null;

    $userobj  = new User($user->firstName, $user->lastName, $user->id, $cop, $age, $job);
    $data[$i] = $userobj;

    // $data[$i]['name'] = htmlentities($userobj->getName());
    // $data[$i]['copyright'] = htmlentities($userobj->getCopyright());
    // $data[$i]['age'] = htmlentities($userobj->getAge());
    // $data[$i]['id'] = htmlentities($userobj->getId());
    // $data[$i]['job'] = htmlentities($userobj->getJob());
    $i++;
}

Engine::render('tpl', array("users"=>$data));

?>