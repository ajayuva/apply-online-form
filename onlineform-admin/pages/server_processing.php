<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'personal_information_info_tbl';

// Table's primary key
$primaryKey = 'user_pri_setid';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array( 'db' => 'application_number', 'dt' => 0 ),
	array( 'db' => 'course_type',  'dt' => 1 ),
	array( 'db' => 'preference_1',   'dt' => 2 ),
	array( 'db' => 'preference_2',     'dt' => 3 ),
	array( 'db' => 'preference_3',     'dt' => 4 ),
	array( 'db' => 'name',     'dt' => 5 ),
	array( 'db' => 'fathers_name',     'dt' => 6),
	array(
		'db'        => 'dob',
		'dt'        => 7,
		'formatter' => function( $d, $row ) {
			return date( 'jS M y', strtotime($d));
		}
	),
	array( 'db' => 'category',     'dt' => 8),
	array( 'db' => 'email',     'dt' => 9),
	array( 'db' => 'mobile_number',     'dt' => 10),
	array(
		'db'        => 'user_pri_setid',
		'dt'        => 11,
		'formatter' => function( $d, $row ) {
			$link = '<a href="userinformation.php?user_id='.$d.'" target="_blank">View</a>';
			return $link;
		}
	)
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'applyonline_mu',
	'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);


