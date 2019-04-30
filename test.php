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
	exit;
	// foreach( $class as $required_php_file ){
	// 	if( file_exists( $pagepointer . "classes/" . $required_php_file . ".php" ) ){
	// 		require_once $pagepointer . "classes/" . $required_php_file . ".php";
	// 	}else{
	// 		//echo $required_php_file; exit;//$class; 
	// 		log_m( array( "missing_file" => $required_php_file ) );
	// 	}
	// }
	
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

	function show_database_structure( $table_fields = array() ){
		?>
 			<table>
 				<tr>
 					<th>Data Name</th>
 					<th>Data Value</th>
 				</tr>
 				<?php 
					foreach($table_fields as $key => $val){
						//if( $key ){
							?>
							<tr>
								<td><?php print_r($key); ?></td>
								<td><?php print_r($val); ?></td>
							</tr><?php
						//}
					}
					// print_r($key); 
				?>
 			</table><br /><br />
 		<?php
	}
	exit;
	
	//$terms = array();
	
	//$where = " AND `pay_row017` = 'duplicated' AND `pay_row001` BETWEEN " . mktime( 0, 0, 0, 2, 1, 2018 ) . " AND " . mktime( 23, 59, 59, 2, 28, 2018 );
	
	//$query = "SELECT `customers001` as 'sname', `customers014` as 'p', `id` FROM `".$database_name."`.`customers` WHERE `record_status` = '1' ";
	
	$query = "SELECT `debit_and_credit003` as 'amount', `debit_and_credit002` as 'account', `sales`.`sales009` as 'customer' FROM `".$database_name."`.`debit_and_credit` JOIN `".$database_name."`.`sales` ON `debit_and_credit`.`debit_and_credit015` = `sales`.`id` where `debit_and_credit`.`debit_and_credit004` = 'debit' and `debit_and_credit`.`debit_and_credit002` IN ( 'main_cash', 'complimentary', 'bank1' ) and `debit_and_credit`.`debit_and_credit005` NOT IN ( 'city_ledger' )";
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array(),
	);
	$tables = execute_sql_query($query_settings);
	
	print_r( $tables );
	$transHeader = array();
	$trans = array();
	
	//get_name_of_referenced_record( array( "id" => $v["customer"], "table" => "customers" ) );
	//get_name_of_referenced_record( array( "id" => $v["customer"], "table" => "users" ) );
	//get_name_of_referenced_record( array( "id" => $v["customer"], "table" => "vendors" ) );
	
	foreach( $tables as $v ){
		//$trans[ $v["account"] ][] = $v;
		$transHeader[ $v["account"] ] = get_name_of_referenced_record( array( "id" => $v["account"], "table" => "chart_of_accounts" ) );
	}
	
	$h1 = '';
	$h2 = '';
	
	$first = 1;
	foreach( $tables as $v ){
		
		$h2 .= '<tr>';
		
		foreach( $transHeader as $k2 => $v2 ){
			
			if( $k2 == $v["account"] ){
				$h2 .= '<td>'.$v["amount"].'</td>';
			}else{
				$h2 .= '<td></td>';
			}
			
			if( $first ){
				$h1 .= '<th>'.$v2.'</th>';
			}
			
		}
		
		$first = 0;
		$h2 .= '</tr>';
	}
	
	echo '<table border="1"><thead><tr>'.$h1.'</tr></thead><tbody>'.$h2.'</tbody></table>';
	
	print_r( $transHeader );
	print_r( $trans );
	exit;
	
	$staff = array();
	foreach( $tables as $v ){
		
		$a = explode(" ", trim( $v["sname"] ) );
		
		$surname = strtoupper( isset( $a[0] )?$a[0]:'' );
		unset( $a[0] );
		$oname = strtoupper( implode( " ", $a ) );
		
		echo "UPDATE `".$database_name."`.`customers` SET `creator_role` = '". $v["sname"] ."', `customers001` = '". $surname ."', `customers035` = '". $oname ."', `customers014` = 'files/customers/".$v["p"].".jpg', `customers007` = `customers008` WHERE `id` = '".$v["id"]."';<br /><br />";
		
		
		//echo "DELETE FROM `".$database_name."`.`pay_row` WHERE `id` = '".$v["id"]."';<br /><br />";
	}
	
	exit;
	$query = "SELECT * FROM `".$database_name."`.`states` ";
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array(),
	);
	$tables = execute_sql_query($query_settings);
	foreach( $tables as $v ){
		$terms["state_id"][ $v["state_id"] ] = $v["state"];
	}
	
	$query = "SELECT * FROM `".$database_name."`.`incardination_types` ";
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array(),
	);
	$tables = execute_sql_query($query_settings);
	foreach( $tables as $v ){
		$terms["incardination_type_id"][ $v["incardination_type_id"] ] = $v["incardination_type"];
	}
	
	
	$query = "SELECT * FROM `".$database_name."`.`congregations` ";
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array(),
	);
	$tables = execute_sql_query($query_settings);
	foreach( $tables as $v ){
		$terms["congregation_id"][ $v["congregation_id"] ] = $v["congregation"];
	}
	
	
	$query = "SELECT * FROM `".$database_name."`.`current_positions` ";
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array(),
	);
	$tables = execute_sql_query($query_settings);
	foreach( $tables as $v ){
		$terms["current_position_id"][ $v["current_position_id"] ] = $v["position"];
	}
	
	
	$query = "SELECT * FROM `".$database_name."`.`personnel` ";
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array(),
	);
	$tables = execute_sql_query($query_settings);
	
	$one = 1;
	$html = '';
	$h = '';
	
	foreach( $tables as $v ){
		$html .= '<tr>';
		foreach( $v as $k => $v1 ){
			if( $one ){
				$h .= '<th>'. strtoupper( $k ) .'</th>';
			}
			
			$val = $v1;
			if( isset( $terms[ $k ][ $v1 ] ) ){
				$val = $terms[ $k ][ $v1 ];
			}
			if( $k == "picture_url" ){
				$val = '<img src="'.$v1.'" width="80" />';
			}
			$html .= '<td>'. $val .'</td>';
		}
		$html .= '</tr>';
		$one = 0;
	}
	
	echo '<table border="1" cellspacing="0"><thead>'.$h.'</thead><tbody>'.$html.'</tbody></table>';
	
	exit;
	
	$query = "SELECT parish001, parish002, id FROM `".$database_name."`.`parish` ";
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array(),
	);
	$tables = execute_sql_query($query_settings);
	
	foreach( $tables as $v ){
		$query = "UPDATE `".$database_name."`.`parish` SET `parish001` = '". ucwords( strtolower( $v["parish001"] ) )."', `parish002` = '". ucwords( strtolower( $v["parish002"] ) )."' WHERE `id` = '".$v["id"]."' ";
		
		$query_settings = array(
			'database' => $database_name ,
			'connect' => $database_connection ,
			'query' => $query,
			'query_type' => 'UPDATE',
			'set_memcache' => 0,
			'tables' => array(),
		);
		execute_sql_query($query_settings);
	}
	exit;
	
	//$file = 'tmp/tr/1528286400.json';
	$file = 'tmp/1529827200.json';
	$file = 'tmp/1529856000.json';
	$file = 'tmp/1529902800.json';
	$file = 'tmp/1529935200.json';
	$file = 'tmp/1529956800.json';
	$f = file_get_contents( $file );
	$f1 = json_decode( $f, true );
	foreach( $f1 as $s ){
		echo $s["comment"] . ";<br /><br />";
	}
	exit;
	require_once "settings/Config.php";
	
	echo date("d-M-Y H:i");
	exit;
	
	$pagepointer = './';
    $display_pagepointer = '';
    echo date("d-M-Y", doubleval( '1524564609' ) );
	//exit;
	
	require_once $pagepointer."settings/Config.php";
	require_once $pagepointer."settings/Setup.php";
	
	$count = 0;
	
	$new_record_id = get_new_id();
	$new_record_id_serial = 0;
	
	$ip_address = get_ip_address();
	$date = date("U");
	//$date = mktime( 0,0,0,6,26,2016 );
	$cdate = mktime( 23,59,59,12,31,2015 );
	
	$serial = 0;
	$iserial = 0;
	set_time_limit(0); //Unlimited max execution time
	
	$table_fields = array(
		'category' => 'items001',
		
		'description' => 'items002',
		'image' => 'items003',
		'barcode' => 'items004',
		
		'type' => 'items005',
		'low_stock' => 'items009',
		
		'cost_price' => 'items006',
		'selling_price' => 'items007',
		'source' => 'items008',
		
		'unit' => 'items016',
		'unit_of_measure' => 'items017',
		'sub_category' => 'items013',
		'currency' => 'items014',
	);

	$itf = array(
		'date' => 'inventory001',
		'source' => 'inventory002',
		'store' => 'inventory003',
		'item' => 'inventory004',
		'quantity' => 'inventory005',
		'cost_price' => 'inventory006',
		'selling_price' => 'inventory007',
		'expiry_date' => 'inventory008',
		
		'production_id' => 'inventory010',
		'staff_responsible' => 'inventory011',
		
		'quantity_expected' => 'inventory012',
		'quantity_ordered' => 'inventory014',
		
		'reference_table' => 'inventory013',
		
		'comment' => 'inventory009',
		'currency' => 'inventory015',
		
		'discount' => 'inventory016',
		'tax' => 'inventory017',
	);
	
for( $ii = 0; $ii < 5800; $ii += 100 ){
	$query = "SELECT * FROM `".$database_name."`.`items_raw_data_import` LIMIT ".$ii.", 100 ";
	echo "\n\n" . $query . "\n\n";
	
	
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array( "items_raw_data_import" ),
	);
	$sales = execute_sql_query($query_settings);
	
	$array_of_dataset = array();
	$iarray_of_dataset = array();
	
	foreach( $sales as $v ){
		if( $v["items_raw_data_import001"] == "Item Number A" )continue;
		if( ! $v["items_raw_data_import002"] )continue;
		
		++$serial;
		
		$dataset_to_be_inserted = array(
			'id' => $serial,
			'created_role' => 'import',
			'created_by' => 'import',
			'creation_date' => $date,
			'modified_by' => "1300130013",
			'modification_date' => $date,
			'ip_address' => 'import',
			'record_status' => 1,
			'serial_num' => $serial,
			
			$table_fields["category"] => strtolower( trim( $v["items_raw_data_import005"] ) ),
			$table_fields["description"] => $v["items_raw_data_import002"],
			$table_fields["image"] => '',
			$table_fields["barcode"] => $v["items_raw_data_import003"],
			
			
			$table_fields["type"] => "purchased_goods",
			$table_fields["low_stock"] => '',
			
			$table_fields["cost_price"] => $v["items_raw_data_import006"],
			$table_fields["selling_price"] => $v["items_raw_data_import007"],
			$table_fields["source"] => $v["items_raw_data_import009"],
			
			$table_fields["unit"] => $v["items_raw_data_import010"],
			$table_fields["unit_of_measure"] => $v["items_raw_data_import011"],
			$table_fields["sub_category"] => $v["items_raw_data_import008"],
			$table_fields["currency"] => 'ngn',
			
			
		);
		$array_of_dataset[] = $dataset_to_be_inserted;	
		
		++$iserial;
		
		$dataset_to_be_inserted = array(
			'id' => $serial . 'sangotedo',
			'created_role' => 'import',
			'created_by' => 'import',
			'creation_date' => $date,
			'modified_by' => "1300130013",
			'modification_date' => $date,
			'ip_address' => 'import',
			'record_status' => 1,
			'serial_num' => $iserial,
			
			$itf["date"] => $date,
			$itf["source"] => '16368336217',	//sangotedo
			$itf["store"] => '16368336217',
			$itf["item"] => $serial,
			
			
			$itf["quantity"] => $v["items_raw_data_import010"],
			$itf["cost_price"] => $v["items_raw_data_import006"],
			$itf["selling_price"] => $v["items_raw_data_import007"],
			$itf["expiry_date"] => eeex_data( $v["items_raw_data_import004"] ),
			
			$itf["production_id"] => 'import',
			$itf["staff_responsible"] => '1300130013',
			$itf["quantity_expected"] => '',
			$itf["quantity_ordered"] => '',
			$itf["reference_table"] => 'import',
			$itf["comment"] => 'import expires on ' . $v["items_raw_data_import004"],
			$itf["currency"] => 'ngn',
			$itf["discount"] => '',
			$itf["tax"] => '',
			
			
		);
		$iarray_of_dataset[] = $dataset_to_be_inserted;	
		
		++$iserial;
		$dataset_to_be_inserted[ 'id' ] = $serial . 'backoffice';
		$dataset_to_be_inserted[ 'serial_num' ] = $iserial;
		$dataset_to_be_inserted[ 'source' ] = '10173870046';
		$dataset_to_be_inserted[ 'store' ] = '10173870046';
		$dataset_to_be_inserted[ 'quantity' ] = $v["items_raw_data_import011"];
		
		$iarray_of_dataset[] = $dataset_to_be_inserted;	
		
		
	}
	++$count;
	
	if( ! empty( $array_of_dataset ) ){
		$function_settings = array(
			'database' => $database_name,
			'connect' => $database_connection,
			'table' => "items",
			'dataset' => $array_of_dataset,
		);
		$returned_data = insert_new_record_into_table( $function_settings );
		
		$function_settings = array(
			'database' => $database_name,
			'connect' => $database_connection,
			'table' => "inventory",
			'dataset' => $iarray_of_dataset,
		);
		$returned_data = insert_new_record_into_table( $function_settings );
		
		echo $count . '<br />';
		sleep( 1 );
		//exit;
	}
}

	function eeex_data( $val ){
		$d = '';
		if( $val ){
			$e = explode("/", $val);
			if( isset( $e[0] ) && $e[0] && isset( $e[1] ) && $e[1] ){
				return mktime( 23,59,59, intval( $e[0] ) , 1, intval( $e[1] ) );
			}
		}
		return $d;
	}
	
exit;
	$query = "SELECT personnel_id, picture_url FROM `".$database_name."`.`personnel` ";
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array(),
	);
	$tables = execute_sql_query($query_settings);
	
	foreach( $tables as $v ){
		$ext = 'jpg';
		
		$n = explode( ".", $v["picture_url"] );
		$x = count( $n ) - 1;
		if( isset( $n[ $x ] ) ){
			$ext = $n[ $x ];
		}
		
		$fname = 'personnel/' . $v["personnel_id"] . '.' . $ext;
		$link = 'http://localhost:819/personnel/' . $v["personnel_id"] . '.' . $ext;
		
		$file = 1;
		//$file = file_get_contents( $v["picture_url"] );
		if( $file ){
			//file_put_contents( $fname , $file );
			print_r( $v );
			print_r( '<hr />' );
			
			
			$query = "UPDATE `".$database_name."`.`personnel` SET `picture_url` = '".$link."' WHERE `personnel_id` = '".$v["personnel_id"]."' ";
			
			$query_settings = array(
				'database' => $database_name ,
				'connect' => $database_connection ,
				'query' => $query,
				'query_type' => 'UPDATE',
				'set_memcache' => 0,
				'tables' => array(),
			);
			execute_sql_query($query_settings);
			
		}
	}
	exit;
	print_r( $tables ); exit;
	
	$query = "SELECT table_name FROM information_schema.tables where table_schema='".$database_name."'";
	$query = "SHOW CREATE TABLE `".$database_name."`.`category`";
			$query_settings = array(
				'database' => $database_name ,
		'connect' => $database_connection ,
				'query' => $query,
				'query_type' => 'DESCRIBE',
				'set_memcache' => 0,
				'tables' => array(),
			);
			$tables = execute_sql_query($query_settings);
			print_r( $tables ); exit;
			
	$database_name2 = 'pharmacy';
	
	$table = 'category';
	$table = 'sales_items';
	//$table = 'pay_row';
	
	$query = "DESCRIBE `".$database_name."`.`".$table."` ";
	
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'DESCRIBE',
		'set_memcache' => 0,
		'tables' => array( "items_raw_data_import" ),
	);
	$r2 = execute_sql_query($query_settings);
	
	
	$query = "DESCRIBE `".$database_name2."`.`".$table."` ";
	$query_settings["query"] = $query;
	$r1 = execute_sql_query($query_settings);
	
	/*
	$query = "SHOW TABLES `".$database_name2."` ";
	$query_settings["query"] = $query;
	$r1 = execute_sql_query($query_settings);
	print_r( $r1 );
	*/
	
	$after = array();
	$s2 = array();
	$after_field = array();
	
	foreach( $r2 as $v1 ){
		//print_r( $v1 );
		$s2[ $v1["Field"] ] = $v1;
	}
	
	$after_field = array();
	foreach( $r1 as $v1 ){
		//print_r( $v1 );
		$after[ $v1["Field"] ] = $after_field;
		$after_field = $v1;
	}
	
	foreach( $r1 as $v1 ){
		$q = '';
		//print_r( $v1 );
		if( isset( $s2[ $v1["Field"] ] ) ){
			if( $s2[ $v1["Field"] ]["Type"] != $v1["Type"] ){
				$q = "ALTER TABLE `".$database_name."`.`".$table."` CHANGE `".$v1["Field"]."` `".$v1["Field"]."` ".$v1["Type"]." CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;";
				//echo "alter field " . $v1["Field"] . "<br />";
			}
			
		}else{
			if( isset( $after[ $v1["Field"] ]["Field"] ) ){
				$q = "ALTER TABLE `".$database_name."`.`".$table."` ADD `".$v1["Field"]."` ".$v1["Type"]." NOT NULL AFTER `".$after[ $v1["Field"] ]["Field"]."`";
			}
			//echo "add field " . $v1["Field"] . "<br />";
		}
		
		echo $q . "<br />";
	}
	
	
	exit;
	
	function _check_for_formula( $e = '' ){
		$e = trim( $e );
		$formula = array();
		
		if( substr( $e, 0, 1 ) == '=' ){
			$array = str_split( $e );
			$bracket_count = 0;
			$open_bracket = 0;
			$dots_count = 0;
			$val = '';
			$count = 0;
			$close_bracket = 0;
			$close_bracket_count = 0;
			$i = 0;
			
			foreach( $array as $k1 => $v1 ){
				$next = 0;
				$sign = '';
				
				switch( $v1 ){
				case "(":
					++$bracket_count;
					$open_bracket = $bracket_count;
					$next = 1;
				break;
				case ")":
					$open_bracket = $bracket_count;
					++$bracket_count;
					$next = 1;
					$close_bracket = 1;
				break;
				case " ":
				case "=":
				break;
				case "+":
				case "-":
				case "*":
				case "/":
					$next = 1;
					$sign = $v1;
				break;
				case ".":
					$val .= $v1;
					++$dots_count;
				break;
				default:
					$val .= $v1;
				break;
				}
				
				if( $next ){
					if( $open_bracket > 0 )$count = $open_bracket;
					
					if( $close_bracket && $sign ){
						++$count;
						$close_bracket = 0;
					}
					
					if( $val ){
						++$i;
						$formula["formula"][ $count ][ $i ] = $val;
						
						if( $dots_count > 1 ){
							$formula["variable"][ $i ] = array(
								"val" => $val,
								"count" => $count,
								"sub_count" => $i,
							);
						}
					}
					if( $sign ){
						++$i;
						$formula["formula"][ $count ][ $i ] = $sign;
					}
					
					$dots_count = 0;
					$val = '';
					
					if( $open_bracket < 0 ){
						$count += $open_bracket;
						$close_bracket = 1;
					}
					$open_bracket = 0;
				}
			}
		}
		
		return $formula;
	}
	
	$f1 = '=( (2 + 4) * ( 3 - 1 ) ) / ( 3 - 1 * 78 + 19 )'; //pass
	$f1 = '=( (2 + 4) * ( 3 - 1 ) ) + ( 3 - 1 * 78 + 19 )'; //pass
	$f1 = '=( (2 + 4) + ( 3.1.1 - 1 ) ) / ( 3 - 1 * 78 + 19 )'; //
	//$f1 = '=(2 + 4 * ( 3 - 1 ) ) / ( 3 - 1 * 78 + 19 ) '; //fail
	
	//$f1 = '=( (2 + 4) * ( 3 - 1 ) / ( 5 - 17 + 8 ) )'; //-3 pass
	
	//$f1 = '=(2 + 4 * ( 3 - 1 ) / ( 5 - (6 * 2) + 8 ) )';	//fail
	//$f1 = '=(2 + 4 * ( 3 - 1 ) / ( 5 - 6 * 78 + 19 ) )'; //fail
	//$f1 = '=(2 + 4 * ( 3 - 1 ) )';	//fail
	//$f1 = '=(2 + ( 4 * ( 3 - 1 ) ) )'; //fail
	
	//$f1 = '=( 2 + 4 * 3 - 1 * 8 + 7 * 4 - 2 )'; //pass
	//$f1 = '=( 2 + 10 + 40 / 3 * 60 + 4 / 6 * 3 + 1 * 8 - 7 * 4 + 2 / 9 * 4 - 12 )'; //pass
	//$f1 = '=( 2 + 10 + 45 / 3 * 6 + 4 * 3 )'; //pass
	//$f1 = '=( ( 2 + 4 ) * ( 3 - 1 ) )'; //pass
	$f2 = '=(1.1.1 + 1.1.2 )';
	/*
	$e  =_check_for_formula( $f1 );
	print_r( $e );
	exit;
	*/
	require_once 'classes\formula-parser-master\FormulaParser.php';

	//use FormulaParser\FormulaParser;

	$formula = '3*x^2 - 4*y + 3/y';
	$formula = '(2 + 4 * ( 3 - 1 ) ) / ( 3 - 1 * 78 + 19 )';
	//$formula = '(2 + 4 * ( a1 - 1 ) ) / ( a1 - 1 * 78 + 19 )';
	$precision = 2; // Number of digits after the decimal point

	try {
		$parser = new FormulaParser($formula, $precision);
		
		//$parser->setVariables(['a1' => 3]);
		//$parser->setVariables(['x' => 3, 'y' => 8]);
		
		$result = $parser->getResult(); // [0 => 'done', 1 => 16.38]
		print_r($result);
	} catch (\Exception $e) {
		echo $e->getMessage(), "\n";
	}
	exit;
	
	$e  =_check_for_formula( $f1 );
	print_r( $e );
	
	/*
	$pe = array_reverse( $e, true);
	$e1 = _calculate_formula_bracket( $pe );
	$e2 = array_reverse( $e1, true);
	*/
	
	//$pe = array_reverse( $e, true);
	$e2 = _calculate_formula_bracket3( $e, 1 );
	//$e2 = array_reverse( $e1, true);
	print_r( $e2 );
	
	function _calculate_formula_bracket3( $e = array(), $convert_negative = 0 ){
		$e2 = _calculate_formula_bracket2( $e, 1 );
		if( count( $e2 ) > 1 ){
			$pe = array();
			foreach( $e2 as $sv ){
				if( isset( $sv[0] ) )$pe[0][] = $sv[0];
			}
			$e2 = _calculate_formula_bracket2( $pe, 1 );
		}
		if( count( $e2 ) == 1 ){
			foreach( $e2 as $e22 ){
				if( isset( $e22[0] ) )return $e22[0];
			}
		}
		return $e2;
	}
	
	function _calculate_formula_bracket2( $e = array(), $convert_negative = 0 ){
		
		$signs = array( "/" => 1, "*" => 1, "+" => 1, "-" => 1 );
		$eval = array();
		
		if( $convert_negative ){
			
			$convert_key = '';
			$convert_val_key = '';
			
			foreach( $e as $k1x => & $v1x ){
				if( is_array( $v1x ) ){
					$convert_keys = array();
					
					foreach( $v1x as $k2x => & $v2x ){
						if( $convert_key ){
							$convert_keys[] = $convert_key;
							$v2x = -1 * $v2x;
							$convert_key = '';
						}
						if( $v2x == "-" ){
							$convert_key = $k2x;
						}
					}
					
					foreach( $convert_keys as $k ){
						if( isset( $v1x[ $k ] ) )$v1x[ $k ] = '+';
					}
					
				}else{
					
				}
			}
			//print_r($e); exit;
		}
		
		foreach( $e as $k1 => & $v1 ){
			
			if( is_array( $v1 ) ){
				$sign_value = array();
				$used_sign = array();
				$current_sign = '';
				$before = '';
				$before_key = '';
				
				foreach( $v1 as $k2 => $v2 ){
					
					if( isset( $signs[ $v2 ] ) ){
						if( isset( $used_sign[ $v2 ] ) ){
							$current_sign = '';
						}else{
							$sign_value[ $v2 ]["before"] = $before;
							$sign_value[ $v2 ]["before_key"] = $before_key;
							$sign_value[ $v2 ]["sign_key"] = $k2;
							$current_sign = $v2;
						}
					}else{
						if( $current_sign ){
							$sign_value[ $current_sign ]["after"] = $v2;
							$sign_value[ $current_sign ]["after_key"] = $k2;
							$used_sign[ $current_sign ] = 1;
							$current_sign = '';
						}
						$before = $v2;
						$before_key = $k2;
					}
				}
				
				//print_r( $sign_value );
				//exit;
				
				if( ! empty( $sign_value ) ){
					foreach( $signs as $sign => $vx ){
						if( isset( $sign_value[ $sign ]["before"] ) && isset( $sign_value[ $sign ]["after"] ) && $sign_value[ $sign ]["before"] && $sign_value[ $sign ]["after"] ){
							switch( $sign ){
							case "/":
								$eval_v = doubleval( $sign_value[ $sign ]["before"] ) / doubleval( $sign_value[ $sign ]["after"] );
							break;
							case "*":
								$eval_v = doubleval( $sign_value[ $sign ]["before"] ) * doubleval( $sign_value[ $sign ]["after"] );
							break;
							case "+":
								$eval_v = doubleval( $sign_value[ $sign ]["before"] ) + doubleval( $sign_value[ $sign ]["after"] );
							break;
							case "-":
								$eval_v = doubleval( $sign_value[ $sign ]["before"] ) - doubleval( $sign_value[ $sign ]["after"] );
							break;
							}
							
							if( $eval_v ){
								
								$eval[] = $eval_v;
								$v1[ $sign_value[ $sign ]["before_key"] ] = $eval_v;
								if( isset( $v1[ $sign_value[ $sign ]["after_key"] ] ) ){
									unset( $v1[ $sign_value[ $sign ]["after_key"] ] );
								}
								if( isset( $v1[ $sign_value[ $sign ]["sign_key"] ] ) ){
									unset( $v1[ $sign_value[ $sign ]["sign_key"] ] );
								}
								print_r($e);
								return _calculate_formula_bracket2( $e, 0 );
								break;
							}
							
						}
					}
				}
			}
				
			//print_r( $sign_value );
			
		}
		//print_r($e);
		
		return $e;
		//return $eval;
		//print_r( $eval );
	}
	
	exit;
	
	$a = 21387397959.77;
	$b = 21387397959.77;
	echo $a - $b; exit;
	$cdate = mktime( 23,59,59,12,31,2017 );
	echo $cdate;
	echo date("||d-M-Y H:i", 1502146799 );
	//echo date("||d-M-Y", $cdate);
	exit;
	
	$pagepointer = './';
    $display_pagepointer = '';
    
	require_once $pagepointer."settings/Config.php";
	require_once $pagepointer."settings/Setup.php";
	
	$a = get_all_states_in_nigeria();
	$aa = array();
	foreach( $a as $b )$aa[] = $b;
	asort( $aa );
	echo implode("<br />",$aa);
	//print_r($aa);
	exit;
	$query = "SELECT * FROM `".$database_name."`.`items_raw_data_import` ORDER BY `items_raw_data_import003` ASC";
	$query = "SELECT * INTO OUTFILE 'customers' FROM `customers`";
	
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array( "items_raw_data_import" ),
	);
	$sales = execute_sql_query($query_settings);
	
	$array_of_dataset = array();
			
	$new_record_id = get_new_id();
	$new_record_id_serial = 0;
	
	$ip_address = get_ip_address();
	$date = date("U");
	//$date = mktime( 0,0,0,6,26,2016 );
	$cdate = mktime( 23,59,59,12,31,2015 );
	
	$serial = 1000;
	set_time_limit(0); //Unlimited max execution time
	
	$count = 0;
	
	foreach( $sales as $v ){
		$hno = doubleval( clean_numbers( strip_leading_zero( $v["items_raw_data_import003"] ) ) );
		if( ! $hno ){
			continue;
		}
		$nok = '';
		$nokp = '';
		
		$n = explode("/", $v["items_raw_data_import010"] );
		if( isset( $n[0] ) && $n[0] ){
			$nok = $n[0];
		}else{
			$nok = $v["items_raw_data_import010"];
		}
		if( isset( $n[1] ) && $n[1] ){
			$nokp = $n[1];
		}
		
		$dataset_to_be_inserted = array(
			'id' => $hno,
			'created_role' => $v["items_raw_data_import002"],
			'created_by' => "1300130013",
			'creation_date' => $date,
			'modified_by' => "1300130013",
			'modification_date' => $date,
			'ip_address' => $ip_address,
			'record_status' => 1,
			'serial_num' => $hno,
			
			//'chart_of_accounts001' => "expenses",
			'customers001' => trim( ucwords( strtolower( clean2( $v["items_raw_data_import004"] ) ) ) ),
			'customers002' => $v["items_raw_data_import009"],
			'customers003' => '1371811518_12348', //city,
			'customers004' => $v["items_raw_data_import006"], //phone,
			'customers005' => '', //ophone,
			'customers006' => '', //email,
			'customers007' => convert_d( $v["items_raw_data_import007"] ), //dob,
			'customers008' => $v["items_raw_data_import005"], //age,
			'customers009' => '', //sex,
			'customers010' => $hno, //file no,
			'customers011' => '', //bloog group,
			'customers012' => $v["items_raw_data_import008"], //occu,
			'customers013' => $nok, //nok,
			'customers014' => $nokp, //nokp,
			'customers015' => '', //noka,
			'customers016' => $v["items_raw_data_import002"], //commment,
			
		);
		$array_of_dataset[] = $dataset_to_be_inserted;	
		
		++$count;
		
		if( ! ( $count % 200 ) ){
			$function_settings = array(
				'database' => $database_name,
				'connect' => $database_connection,
				'table' => "customers",
				'dataset' => $array_of_dataset,
			);
			$returned_data = insert_new_record_into_table( $function_settings );
			$array_of_dataset = array();
			echo $count . '<br />';
			sleep(30);
			echo 'awake<br />';
		}
	
		
	}
	
	$function_settings = array(
		'database' => $database_name,
		'connect' => $database_connection,
		'table' => "customers",
		'dataset' => $array_of_dataset,
	);
	$returned_data = insert_new_record_into_table( $function_settings );
	echo $count . '<br />';
	
	function convert_d( $d ){
		$a = explode( "/", $d );
		if( isset( $a[2] ) && $a[2] ){
			
		}else{
			$a = explode( "-", $d );
		}
		
		if( isset( $a[2] ) && $a[2] ){
			$year = 0;
			if( $a[2] > 17 ){
				if( $a[2] > 1000 ){
					$year = $a[2];
				}else{
					$year = 1900 + intval( $a[2] );
				}
			}else{
				$year = 2000 + intval( $a[2] );
			}
			return mktime(0,0,0, intval( $a[1] ), intval( $a[0] ), $year );
		}
	}
	exit;
	/*
	$query = "SELECT * FROM `".$database_name."`.`items_raw_data_import` ";
	
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array( "items_raw_data_import" ),
	);
	$sales = execute_sql_query($query_settings);
	
	$array_of_dataset = array();
			
	$new_record_id = get_new_id();
	$new_record_id_serial = 0;
	
	$ip_address = get_ip_address();
	$date = date("U");
	//$date = mktime( 0,0,0,6,26,2016 );
	$cdate = mktime( 23,59,59,12,31,2015 );
	
	$serial = 1000;
	
	foreach( $sales as $v ){
		
		$dataset_to_be_inserted = array(
			'id' => trim( $v["items_raw_data_import001"] ),
			'created_role' => "1300130013",
			'created_by' => "1300130013",
			'creation_date' => $date,
			'modified_by' => "1300130013",
			'modification_date' => $date,
			'ip_address' => $ip_address,
			'record_status' => 1,
			
			//'chart_of_accounts001' => "expenses",
			'chart_of_accounts001' => "revenue",
			'chart_of_accounts002' => trim( ucwords( $v["items_raw_data_import002"] ) ),
			'chart_of_accounts003' => trim( $v["items_raw_data_import001"] ),
			//'chart_of_accounts004' => "operating_expense",
			'chart_of_accounts004' => "revenue",
			'chart_of_accounts005' => ( $v["items_raw_data_import003"] )?$v["items_raw_data_import003"]:0,
			'chart_of_accounts006' => '',
			'chart_of_accounts007' => '',
		);
		$array_of_dataset[] = $dataset_to_be_inserted;	
		
	}
	
	$function_settings = array(
		'database' => $database_name,
		'connect' => $database_connection,
		'table' => "chart_of_accounts",
		'dataset' => $array_of_dataset,
	);
	$returned_data = insert_new_record_into_table( $function_settings );
	exit;
	*/
	
	/*
	$query = "SELECT * FROM `".$database_name."`.`c` group by LOWER(`Companytype`) ";
	
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array( "category" ),
	);
	$sales = execute_sql_query($query_settings);
	
	$array_of_dataset = array();
			
	$new_record_id = get_new_id();
	$new_record_id_serial = 0;
	
	$ip_address = get_ip_address();
	$date = date("U");
	//$date = mktime( 0,0,0,6,26,2016 );
	$cdate = mktime( 23,59,59,12,31,2015 );
	
	$serial = 10;
	
	foreach( $sales as $v ){
		$cat = trim( ucwords( strtolower( $v["Companytype"] ) ) );
		if( $cat ){
			++$serial;
			$_SESSION["cat"][ $cat ] = $serial;
			
			$dataset_to_be_inserted = array(
				'id' => $serial,
				'created_role' => "1300130013",
				'created_by' => "1300130013",
				'creation_date' => $date,
				'modified_by' => "1300130013",
				'modification_date' => $date,
				'ip_address' => $ip_address,
				'record_status' => 1,
				
				'category001' => $cat,
				'category002' => "service",
			);
			$array_of_dataset[] = $dataset_to_be_inserted;	
		}
		//new
		
	}
	
	$function_settings = array(
		'database' => $database_name,
		'connect' => $database_connection,
		'table' => "category",
		'dataset' => $array_of_dataset,
	);
	
	$returned_data = insert_new_record_into_table( $function_settings );
	exit;
	*/
	
	
	$query = "SELECT * FROM `".$database_name."`.`c` ";
	
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array( "items" ),
	);
	$sales = execute_sql_query($query_settings);
	
	$array_of_dataset = array();
			
	$new_record_id = get_new_id();
	$new_record_id_serial = 0;
	
	$ip_address = get_ip_address();
	$date = date("U");
	//$date = mktime( 0,0,0,6,26,2016 );
	$cdate = mktime( 23,59,59,12,31,2015 );
	
	$serial = 0;
	
	foreach( $sales as $v ){
		$r = explode( "/", $v["DateReg"] );
		$rdate = 0;
		if( isset( $r[2] ) && $r[2] ){
			$rdate = mktime( 0,0,0, intval( $r[1] ) , intval( $r[0] ) , intval( $r[2] ) );
		}
		
		//if( $v["Registration_No"] && $rdate > $cdate ){
		if( $v["Registration_No"] ){
			$cat = trim( ucwords( strtolower( $v["Companytype"] ) ) );
			$pv = ucwords( strtolower( trim( $v["pvno"] ) ) );
			
			$dataset_to_be_inserted = array(
				'id' => ++$serial,
				'created_role' => "1300130013",
				'created_by' => "1300130013",
				'creation_date' => $date,
				'modified_by' => "1300130013",
				'modification_date' => $date,
				'ip_address' => $ip_address,
				'record_status' => 1,
				
				'items002' => isset( $_SESSION["cat"][ $cat ] )?$_SESSION["cat"][ $cat ]:$cat,
				'items007' => $v["Registration_No"],
				'items001' => $rdate,	//format
				'items016' => isset( $_SESSION["c1"][ $pv ] )?$_SESSION["c1"][ $pv ]:$pv,
				
				'items003' => "",
				'items004' => strtoupper( $v["V_Make"] ),
				'items005' => strtoupper( $v["V_Model"] ),
				'items006' => strtoupper( $v["Chasis_No"] ),
				'items008' => strtoupper( $v["Tracker_No"] ),
				
				'items010' => "service",
				'items019' => strtoupper( $v["V_Color"] ),	//color
				
			);
			$array_of_dataset[] = $dataset_to_be_inserted;	
		}
		//new
		
	}
	
	$function_settings = array(
		'database' => $database_name,
		'connect' => $database_connection,
		'table' => "items",
		'dataset' => $array_of_dataset,
	);
	
	$returned_data = insert_new_record_into_table( $function_settings );
	exit;
	
	
	$query = "SELECT * FROM `".$database_name."`.`c` group by `pvno`";
	
	$query_settings = array(
		'database' => $database_name ,
		'connect' => $database_connection ,
		'query' => $query,
		'query_type' => 'SELECT',
		'set_memcache' => 0,
		'tables' => array( "customers" ),
	);
	$sales = execute_sql_query($query_settings);
	
	$array_of_dataset = array();
			
	$new_record_id = get_new_id();
	$new_record_id_serial = 0;
	
	$ip_address = get_ip_address();
	//$date = date("U");
	$date = mktime( 0,0,0,6,26,2016 );
	
	$serial = 100;
	
	foreach( $sales as $v ){
		$pv = ucwords( strtolower( trim( $v["pvno"] ) ) );
		if( $pv ){
			++$serial;
			
			$_SESSION["c1"][ $pv ] = $serial;
			
			$dataset_to_be_inserted = array(
				'id' => $serial,
				'created_role' => "1300130013",
				'created_by' => "1300130013",
				'creation_date' => $date,
				'modified_by' => "1300130013",
				'modification_date' => $date,
				'ip_address' => $ip_address,
				'record_status' => 1,
				
				'customers001' => $pv,
				'customers002' => $v["Address"],
				'customers003' => $v["MobileNo"],
				'customers004' => $v["Email"],
				
				'customers006' => $v["City"],
				'customers008' => $v["Companytype"],
				
			);
			$array_of_dataset[] = $dataset_to_be_inserted;	
		}
		//new
		
	}
	
	$function_settings = array(
		'database' => $database_name,
		'connect' => $database_connection,
		'table' => "customers",
		'dataset' => $array_of_dataset,
	);
	
	$returned_data = insert_new_record_into_table( $function_settings );
	exit;
	
?>