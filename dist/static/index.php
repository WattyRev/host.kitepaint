<?php
	// Get the domain
	$domain = $_SERVER['SERVER_NAME'];

	// Get the file path
  $requestUri = $_SERVER['REQUEST_URI'];
  $filePath = str_replace('static/', '', $requestUri);

	// Grab the relevant file from  stati.kitepaint.com
	if ($domain === 'kitepaint.com') {
		$environment = 'production';
	} else {
		$environment = 'development';
	}

	$baseUrl = $environment === 'production' ? 'https://static.kitepaint.com/' : 'https://static.beta.kitepaint.com/';

	echo file_get_contents($baseUrl + $filePath);
