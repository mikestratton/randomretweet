<?php
	
	require_once('TwitterAPIExchange.php');
	$settings = array(
			/* You will need to enter your own oauth settings below.
			 * To do this, you will first need to create an app through
	* Twitter's API. Go to https://apps.twitter.com to set up
	* your first app. Once you have set up your app, find your:
	* a) oauth_access_token
	* b) oauth_access_token_secret
	* c) consumer_key
	* d) consumer_secret
	* Copy and paste your settings below
	*/
			'oauth_access_token' => "your app settings go here",
			'oauth_access_token_secret' => "your app settings go here",
			'consumer_key' => "your app settings go here",
			'consumer_secret' => "your app settings go here"
	);
			
	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$getfield = '?count=1&screen_name=IntelSoftware';
	$requestMethod = 'GET';
	
    $twitter = new TwitterAPIExchange($settings);
	echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>