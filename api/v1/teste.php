<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$service_url = 'http://localhost:8080/PocketManager/api/v1/listing/thiago.santos';
   $curl = curl_init($service_url);
   $curl_post_data = array(
        "user_id" => 42,
        "emailaddress" => 'lorna@example.com',
        );
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   $curl_response = curl_exec($curl);
   $res = json_decode($curl_response);
   echo "<pre>";
   print_r($res);
   echo "</pre>";
   curl_close($curl);
?>

<div id="teste">AQUI</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>

$.ajax({
    url: "http://localhost:8080/PocketManager/api/v1/listing/thiago.santos?apiKey=123456",
    type: "GET",

    contentType: 'application/json; charset=utf-8',
    success: function(resultData) {
        //here is your json.
          // process it
       console.log(resultData);

    },
    error : function(jqXHR, textStatus, errorThrown) {
    },

    timeout: 120000,
});

</script>