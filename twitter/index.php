<?php

require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "773806057399455744-bJLxqpdh3AhXh16NwsDSARzQW82fYFJ",
'oauth_access_token_secret' => "6CFHjEEaFEZPkU3ZHNuhfQDLCIxSlFeBsHVr0Vih8hqVF",
'consumer_key' => "i3MdMQ0FeaP7AHr1bdkoEOOYG",
'consumer_secret' => "YvciVWbqwWqEwY1iz4Q3G9tjmYMRUQM0amYx9biP3RwdTMFHJB"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "iagdotme";}
if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 20;}
$getfield = "?screen_name=Kwara_P3";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);

foreach($string as $items)
    {   
        echo "<div class='col-md-4'>";
        echo "<blockquote class='twitter-tweet' data-lang='en'><p lang='en' dir='ltr'>";
        echo $items['text'];
        echo " "."<p>".$items['user']['name'];
        echo "(".$items['user']['screen_name'].")"."</p>";
        echo "<small>".$items['created_at']."</small>";
        echo "</p>"."</blockquote>";
        echo "</div>";
    }
?>