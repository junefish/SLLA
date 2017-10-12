<?php
	include '../../dbconfig.php';

	header('content-type: application/json; charset=utf-8');

	$resp = [];
	//@junefish - adding set check fixes "undefined index" error
		//=> fixes undefined variable error
	$fb_ids = (isset($_GET['fb_ids']) ? $_GET['fb_ids'] : null);

	//@junefish - adding array check fixes "invalid argument" error
	if (is_array($fb_ids)) {
		foreach ($fb_ids as &$fb_id) {
			
		// Get cURL resource
		$curl = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => "https://graph.facebook.com/v2.8/" . $fb_id . "?access_token=" . $fbt
		));
		// Send the request & save response to $resp
		array_push($resp,curl_exec($curl));
		// Close request to clear up some resources
		curl_close($curl);
	}
	}
	unset($fb_id);

	
	echo json_encode($resp);
?>