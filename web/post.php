<?php
ini_set('display_errors',1);
set_time_limit(0);
if(isset($_POST["grant_type"]) && $_POST["grant_type"] != '') {
	
	/* This is for access token request */
    /* $grant_type= 'password';
	$client_id = '5_1557p1yenrpc0gs8k0kwkc44k0cswg8swwskgs84sg8cogw4so';
	$client_secret = '1zzlirvkolk0g4g044k80o00okcookwk8w8s8kww844wkkco8s';
	$username = 'ravi.yadav';
	$password = 'password';
	$url = 'https://develop.ckgs.us/ravinin/web/app_dev.php/oauth/v2/token?';
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
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
		curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_NOPROGRESS, 0);
		$result = curl_exec ($ch); */
	/* This is for access token request */
	
	/* This is for access token request */
    /* $grant_type= 'password';
	$client_id = '5_1557p1yenrpc0gs8k0kwkc44k0cswg8swwskgs84sg8cogw4so';
	$client_secret = '1zzlirvkolk0g4g044k80o00okcookwk8w8s8kww844wkkco8s';
	$username = 'ravi.yadav';
	$password = 'password';
	$url = 'https://develop.ckgs.us/ravinin/web/app_dev.php/oauth/v2/token?';
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
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
		curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_NOPROGRESS, 0);
		$result = curl_exec ($ch); */
	/* This is for access token request */
	
	/* This is for refresh token request */
    $grant_type= 'refresh_token';
	$client_id = '5_1557p1yenrpc0gs8k0kwkc44k0cswg8swwskgs84sg8cogw4so';
	$client_secret = '1zzlirvkolk0g4g044k80o00okcookwk8w8s8kww844wkkco8s';
	$refresh_token = 'MjQxM2E1OWYzZTc4NWI0OGVmYjZjM2FiMjlkYzE1OGM4NzdjYTJjNTMzYzg5MDg4NWQyNjliMzE2MzkwODRlMg';
	$url = 'https://develop.ckgs.us/ravinin/web/app_dev.php/oauth/v2/token?';
	$postdata = array(
			'grant_type' => urlencode($grant_type),
			'client_id' => urlencode($client_id),
			'client_secret' => urlencode($client_secret),
			'refresh_token' => urlencode($refresh_token)
		);
	$jsondata = json_encode($postdata);
	$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
		curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_NOPROGRESS, 0);
		$result = curl_exec ($ch);
		echo "<pre>";print_r($result);echo "<pre/>";exit;
	/* This is for access token request */	
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

