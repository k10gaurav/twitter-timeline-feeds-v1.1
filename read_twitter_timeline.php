<?php
/*
include("TwitterAPIExchange.php");

$settings = array(
    'oauth_access_token' => "171165840-nZTpVG15O24ASaaUm7n7UCePlKet0XYAd1zPuw9q",
    'oauth_access_token_secret' => "AQ7A0QrHBFMc3sGmxNkUjZMB7dz7fzhlOLySjUtiHYijF",
    'consumer_key' => "Y6B9TcbtCJPLwQBkYalV6BSaa",
    'consumer_secret' => " EJ4oH96QxZNQGIlhcoXsblvi32h6XbqDwor7t8MqXlZvHYSkxF"
);



$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=Brands_India';

$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();
  echo $response.'__'; exit;                  
//var_dump(json_decode($response));

$valid_data = json_decode($response); //JSON data to PHP.

print "<ul>";
foreach ($valid_data as $key=>$value) {
  print "<li>";
  print $value->text;
  print "</li>";
}
print "</ul>"; */
?>
<?php
// include("TwitterAPIExchange.php");

// $settings = array(
 // 'oauth_access_token' => "171165840-nZTpVG15O24ASaaUm7n7UCePlKet0XYAd1zPuw9q",
    // 'oauth_access_token_secret' => "AQ7A0QrHBFMc3sGmxNkUjZMB7dz7fzhlOLySjUtiHYijF",
    // 'consumer_key' => "Y6B9TcbtCJPLwQBkYalV6BSaa",
    // 'consumer_secret' => " EJ4oH96QxZNQGIlhcoXsblvi32h6XbqDwor7t8MqXlZvHYSkxF"
// );

// $url = 'https://api.twitter.com/1.1/search/tweets.json';
// $requestMethod = 'GET';

// $getfield = '?q=Brands_India&geocode= 20.2386889,85.7820416,10mi&count=100";';

// $twitter = new TwitterAPIExchange($settings);
// $response = $twitter->setGetfield($getfield)
// ->buildOauth($url, $requestMethod)
// ->performRequest();
// var_dump(json_decode($response));

?>
<?php
// include("TwitterAPIExchange.php");

// $settings = array(
    // 'oauth_access_token' => "171165840-nZTpVG15O24ASaaUm7n7UCePlKet0XYAd1zPuw9q",
    // 'oauth_access_token_secret' => "AQ7A0QrHBFMc3sGmxNkUjZMB7dz7fzhlOLySjUtiHYijF",
    // 'consumer_key' => "Y6B9TcbtCJPLwQBkYalV6BSaa",
    // 'consumer_secret' => " EJ4oH96QxZNQGIlhcoXsblvi32h6XbqDwor7t8MqXlZvHYSkxF"
// );

// $url = 'https://api.twitter.com/1.1/search/tweets.json';
// $getfield = '?q=#a2zwebhelp';
// $requestMethod = 'GET';

// $twitter = new TwitterAPIExchange($settings);
// $response = $twitter->setGetfield($getfield)
// ->buildOauth($url, $requestMethod)
// ->performRequest();

// var_dump(json_decode($response));
?>
<?php
session_start();
require_once("twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "ambitious_kumar";
$notweets = 1;
$consumerkey = "Y6B9TcbtCJPLwQBkYalV6BSaa";
$consumersecret = "EJ4oH96QxZNQGIlhcoXsblvi32h6XbqDwor7t8MqXlZvHYSkxF";
$accesstoken = "171165840-nZTpVG15O24ASaaUm7n7UCePlKet0XYAd1zPuw9q";
$accesstokensecret = "AQ7A0QrHBFMc3sGmxNkUjZMB7dz7fzhlOLySjUtiHYijF";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
// foreach($tweets as $tweet)
// {
		// echo $tweet->text;
// }
echo json_encode($tweets);
?>
