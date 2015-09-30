<?php

$users = json_decode(file_get_contents("./db/users.json"));

$i = 0;

foreach ($users->users as $key => $user) {
    $userobj = new User($user->firstName, $user->lastName);
    $data[$i]['name'] = $userobj->getName();
    $data[$i]['copyright'] = $userobj->getCopyright();
    $data[$i]['age'] = $userobj->getAge();
    $data[$i]['id'] = $userobj->getId();
    $i++;
}

$engine->render('tpl', array("users"=>$data));

?>