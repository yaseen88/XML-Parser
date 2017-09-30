<?php

$url = (!empty($_POST['link'])) ? $_POST['link'] : false;
$table = (!empty($_POST['table'])) ? $_POST['table'] : false;
$db_server = (!empty($_POST['dbserver'])) ? $_POST['dbserver'] : false;
$db_name = (!empty($_POST['db'])) ? $_POST['db'] : false;
$db_user = (!empty($_POST['dbuser'])) ? $_POST['dbuser'] : false;
$db_user_pass = (!empty($_POST['dbuserpass'])) ? $_POST['dbuserpass'] : false;

echo $url."<br>";
echo $table."<br>";
echo $db_server."<br>";
echo $db_name."<br>";
echo $db_user."<br>";
echo $db_user_pass."<br>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url); // Get the url

$data = curl_exec($ch);
curl_close($ch);

$xml = simplexml_load_string($data);
//$array = json_decode(json_encode($xml), true);

//print($array);
//print_r($array);
//echo $array;


$db_connect = mysqli_connect($db_server, $db_user, $db_user_pass, $db_name) or die(mysqli_error()); //connect to database Server
//mysqli_select_db($db_connect,$db_name) or die(mysqli_error()); //select a database_name

/*
if (is_array($values) || is_object($values))
{*/
foreach ($xml->channel->item as $row){
  $title = $row -> title;
  $artist = $row -> description;
  $country = $row -> link;
  $company = $row -> category;
  $price = $row -> comments;
  $year = $row -> pubDate;
  echo "<br>".$title."<br>";

$query = "INSERT INTO ".mysqli_real_escape_string($db_connect,$table)." (title,artist,country,company,price,year)
VALUES ('".mysqli_real_escape_string($db_connect,$title)."','".mysqli_real_escape_string($db_connect, $artist)."','".mysqli_real_escape_string($db_connect, $country)."','".mysqli_real_escape_string($db_connect, $company)."','".mysqli_real_escape_string($db_connect, $price)."','".mysqli_real_escape_string($db_connect,$year)."')";

  $result = mysqli_query($db_connect, $query, MYSQLI_USE_RESULT);

  if(!$result){
    echo mysqli_error($db_connect);
  }else {
    echo "Success";
  };

}
/*
}else {
  echo "soory";
}*/


?>
