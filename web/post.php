<?php
ini_set('display_errors',1);
set_time_limit(0);
if($_POST["grant_type"] != '') {
	
    $grant_type= 'password';
	$client_id = '4_54jk3ruksnsw804sw4408ggow0488g8c4kwsc8kskg0cwssggs';
	$client_secret = '5zidkryv2p8og4kcsoccgw0gg08k08c88g48s8cswo04c0884w';
	$username = 'ricardo.correia';
	$password = 'password';
	$url = 'https://develop.ckgs.us/ravipassportprod/web/app_dev.php/oauth/v2/token?';
	$postdata = array(
			'grant_type' => urlencode($grant_type),
			'client_id' => urlencode($client_id),
			'client_secret' => urlencode($client_secret),
			'username' => urlencode($username),
			'password' => urlencode($password)
			
		);
	$jsondata = json_encode($postdata);
	$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata); //$xml is the xml string
		curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_NOPROGRESS, 0);

		$result = curl_exec ($ch);
}


?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         grant_type: <input type = "text" name = "grant_type" value=""/>
         client_id: <input type = "text" name = "client_id" />
         client_secret: <input type = "text" name = "client_secret" />
         username: <input type = "text" name = "username" />
         password: <input type = "text" name = "password" />
         <input type = "submit" />
      </form>
      
   </body>
</html>

