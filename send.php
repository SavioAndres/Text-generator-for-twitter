<?php

use DG\Twitter\Twitter;

require_once 'twitter/twitter.class.php';
require_once 'phrase.php';

// ENTER HERE YOUR CREDENTIALS (see readme.txt)
$consumerKey = '';
$consumerSecret = '';
$accessToken = '';
$accessTokenSecret = '';

$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

try {
	$text = new Phrase();
	$tweet = $twitter->send($text->phrase()); // you can add $imagePath or array of image paths as second argument
	//print_r($tweet);

} catch (DG\Twitter\TwitterException $e) {
	echo 'Error: ' . $e->getMessage();
}
