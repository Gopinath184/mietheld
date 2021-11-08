<?php

//Check URL
if(isset($_GET) && $_GET['url'] !=''){

	$getURL1 =  $_SERVER['QUERY_STRING'];
	$getURL  = str_replace("url=","",$getURL1);
	$getURLEx = explode('?', $getURL);

	$postURL = $getURLEx[0];
	$getParamsEx = explode('&', $getURLEx[1]);
	$param1 = '';
	//split key and value
 	foreach($getParamsEx as $key=>$value) {
        $param1 .= $value . "&";
    }
    $param = trim($param1, '&');
    $param11 = explode('&', $param);
    //Count parameters
	for($i=0; $i < count($param11 ); $i++){
	    $key_value = explode('=', $param11 [$i]);
	    $end_array[$key_value [0]] = $key_value [1];
	}

	$check_url = end($end_array);

	//Check is valid URL or Not
	if (filter_var($check_url, FILTER_VALIDATE_URL)) {
	      
	      array_pop($end_array);

	      $payload = json_encode($end_array, JSON_FORCE_OBJECT);
	      $ch = curl_init();
	      $url = $postURL;
	      curl_setopt($ch,CURLOPT_URL,$url);
	      curl_setopt($ch,CURLOPT_POST, 1);       
	      curl_setopt($ch,CURLOPT_POSTFIELDS,
	            $payload);
	      curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	      curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
	      curl_setopt($ch,CURLOPT_TIMEOUT, 20);
	      //status success
	      $response = curl_exec($ch);
	      echo "<script type='text/javascript'>window.location.href='$check_url';</script>";
	      curl_close ($ch);
	    } else {
	      		echo("Is not a valid URL <br><br> <b>Note:</b><br>&nbsp;&nbsp;&nbsp;This type of URL is allowed. <br> &nbsp;&nbsp;&nbsp;<b>Eg:</b> https://www.mietheld.at/hooks.php?url=https://hooks.zapier.com/hooks/catch/1043893/odtnhnm?ZPreP={{75798046__ZPreP182037618}}&Name des Vollmachtgebers={{75798046__Name des Vollmachtgebers}}&Strasse des Vollmachtgebers={{75798046__Strasse des Vollmachtgebers}}...&redirect=https://www.mietheld.at/");
	      }
	      
	}
	else{
	    	echo "Please provide url <br><br> <b>Note:</b><br>&nbsp;&nbsp;&nbsp;This type of URL is allowed. <br> &nbsp;&nbsp;&nbsp;<b>Eg:</b> https://www.mietheld.at/hooks.php?url=https://hooks.zapier.com/hooks/catch/1043893/odtnhnm?ZPreP={{75798046__ZPreP182037618}}&Name des Vollmachtgebers={{75798046__Name des Vollmachtgebers}}&Strasse des Vollmachtgebers={{75798046__Strasse des Vollmachtgebers}}...&redirect=https://www.mietheld.at/";
}
//end
?>