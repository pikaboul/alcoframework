<?php

class Helper
{
	static function rand_job()
	{
		$jobs = json_decode(file_get_contents("./db/jobs.json"));

		$total = count($jobs);

		return $jobs[rand(0,$total-1)]->job;
	}
}



?>