<?php

	include 'database/dbconnect.php';

	if ( isset($_REQUEST['reg_email']) && !empty($_REQUEST['reg_email']) ) {

		$email = trim($_REQUEST['reg_email']);
		$email = strip_tags($email);

    $query = $con->query('SELECT email FROM users WHERE email="'.$email.'"');

    $row_cnt = $query->num_rows;


    if($row_cnt == 1){
			echo 'false'; // email already taken
		} else {
			echo 'true';
		}
	}
