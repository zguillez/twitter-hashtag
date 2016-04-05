<?php

	require "vendor/autoload.php";

	$config = [
		"CONSUMER_KEY"=> "D2On6w8SviV34wmVjhwvI8s5K",
		"CONSUMER_SECRET"=> "bvJZ0abPR51psmrVUtNGJNbDou4JaPIIQjyj0lIRGtMg0kdPjg",
		"access_token"=> "819735-fEEFnx7DjxFccoWApXlj23qTXnZ6vgkCjTiVlovaxcg",
		"access_token_secret"=> "06lIf6hJ5UnxRQwd9e9FiEWydxYoGEztTZIlsbz7uHz48"
	];

	$api      = new Z\TwitterHastag($config);

	print_r($api);


	$statuses = $api->get('messi', 10);

	print_r(json_encode($statuses));