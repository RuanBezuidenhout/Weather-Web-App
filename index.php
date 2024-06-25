<?php
  //Get API Weather details based on city Input
  if(isset($_POST["submit"])){
    if(empty($_POST["city"])){
      echo "Enter city name";
    }else{
      $city = $_POST["city"];

      //Please note that you will have to insert personal api key below
      $api_key = "";
      $api = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
      $api_data = file_get_contents($api);
    
      $weather = json_decode($api_data,true);
      $celcius = $weather["main"]["temp"] -273;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta chaset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="widht=device-width, initial-scale=1.0">
  <title>Weather App</title>
</head>
<body>
  <section>
    <form method="post">
      <h1>My Weather App</h1>
      <input type="text" name="" id="">
      <input type="submit" value="Check weather">
    </form>
      <?php
        //Display API Contents
        echo $weather["weather"][0]["description"];
        echo "<br>" , $celcius , "degrees celcius";
      ?>
  </section>
</body>
</html>
