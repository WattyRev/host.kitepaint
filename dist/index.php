<?php
	// Get the domain
	$domain = $_SERVER['SERVER_NAME'];
	if ($domain === 'kitepaint.com') {
		$environment = 'production';
	} else {
		$environment = 'development';
	}

	$indexLocation = $environment === 'production' ? 'http://static.kitepaint.com/index.html' : 'http://static.beta.kitepaint.com/index.html';

	echo file_get_contents($indexLocation);
