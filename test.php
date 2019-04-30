<?php
//echo mktime( 0, 0, 0, 1, 12, 2020 ); exit;


	/*
update `customers` set `customers048` = 'bs19558481268' where `customers048` IN ( 'ECO', 'ECO BANK', 'ECO BANK AIRPORT BRANCH', 'ECO BANK PLC', 'ECO BANK, ABUJA AIRPORT', 'ECO FNB', 'ECOBANK' );

update `customers` set `customers048` = '9960183279' where `customers048` IN ( 'FBN', 'FGN', 'FIEST BANK' );

update `customers` set `customers048` = 'bs19558482128' where `customers048` IN ( 'FIDELITY BANK', 'FIDELITY', 'FEDELITY BANK' );

update `customers` set `customers048` = 'bs19558506019' where `customers048` IN ( 'FCMB ABUJA AIRPORT BRANCH', 'FCMB', 'FCM BANK' );

update `customers` set `customers048` = '10200322755' where `customers048` IN ( 'DIAMOND BANK GARKI 2', 'DIAMOND BANK', 'DAIMOND BANK' );

update `customers` set `customers048` = '10200319536' where `customers048` IN ( 'ACCESS BANK', 'ACCESS' );
*/
	/*
	$url = 'http://localhost:819/feyi/musa.php?pen=12&glo=382';
	$params = array();
	
	echo date("H-i-s");
	echo curl_post_async($url, $params);
	echo "<br />";
	echo date("H-i-s");
	
	function curl_post_async($url, $params = array() )
	{
		$post_params = array();
		foreach ($params as $key => &$val) {
		  if (is_array($val)) $val = implode(',', $val);
			$post_params[] = $key.'='.urlencode($val);
		}
		$post_string = implode('&', $post_params);

		$parts=parse_url($url);

		$fp = fsockopen($parts['host'], 
			isset($parts['port'])?$parts['port']:80, 
			$errno, $errstr, 30);

		if( $fp == 0 ){
			return "Couldn't open a socket to ".$url." (".$errstr.")";
		}
		//pete_assert(($fp!=0), "Couldn't open a socket to ".$url." (".$errstr.")");

		$out = "POST ".$parts['path']." HTTP/1.1\r\n";
		$out.= "Host: ".$parts['host']."\r\n";
		$out.= "Content-Type: application/x-www-form-urlencoded\r\n";
		$out.= "Content-Length: ".strlen($post_string)."\r\n";
		$out.= "Connection: Close\r\n\r\n";
		if (isset($post_string)) $out.= $post_string;

		fwrite($fp, $out);
		fclose($fp);
	}

	exit;
	
	
	for( $i = 1; $i < 24; $i++ ){
		for( $ii = 1; $ii < 4; $ii++ ){
			echo "INSERT INTO `grade_level` (`id`, `grade_level001`, `grade_level002`, `grade_level003`, `grade_level004`, `grade_level005`, `grade_level006`, `grade_level007`, `grade_level008`, `grade_level009`, `grade_level010`, `grade_level011`, `grade_level012`, `grade_level013`, `grade_level014`, `serial_num`, `creator_role`, `created_by`, `creation_date`, `modified_by`, `modification_date`, `ip_address`, `device_id`, `record_status`) VALUES ('grade_level".$i."_".$ii."', 'GRADE ".$i."', '".$ii."', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', 'ngn', 'undefined', 'undefined', '', '1300130013', '35991362173', '1527151418', '35991362173', '1527151418', '::1', 'undefined', '1'); \n \n ";
		}
	}
	
	
	exit;
	*/
	/*
	date_default_timezone_set('Africa/Lagos');
	echo mktime( 11, 0, 0, 7, 10, 2018 ); exit;
	*/
	
	//print_r( pathinfo( 'C:\hyella\htdocs\feyi\engine\files\contribution\data-is19806537430.txt' ) );
	//echo doubleval( intval( '40,000.00' ) );
	//exit;
	
	$pagepointer = './';
    $display_pagepointer = '';
	require_once $pagepointer."settings/Config.php";
	require_once $pagepointer."settings/Setup.php";
	
	$page = 'ajax_request_processing_script';
	
	//INCLUDE CLASSES
	$class = $classes[$page];
	
	print_r($class);
// 	exit;
	foreach( $class as $required_php_file ){
		if( file_exists( $pagepointer . "classes/" . $required_php_file . ".php" ) ){
			require_once $pagepointer . "classes/" . $required_php_file . ".php";
		}else{
			//echo $required_php_file; exit;//$class; 
			log_m( array( "missing_file" => $required_php_file ) );
		}
	}
	
	//print_r(get_declared_classes());
	//exit;

	$loaded_class = array( 'sales', 'sales_items' );
	foreach( $loaded_class as $table ){

		if( $table ){
			$t = 'c' . ucwords( $table );
			if( class_exists( $t ) ){
				$cl = new $t();
				
				if( isset( $cl->table_fields ) ){

					show_database_structure( $cl->table_fields );

				}
			}
		}

		

	}

	
