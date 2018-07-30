<?php

	session_start();

	include 'database/dbconnect.php';

	if(isset($_POST['btn-login'])){
    $myusername = $_POST['email'];
    $mypassword = md5($_POST['password']);

    $result = $con->query('SELECT * FROM users WHERE email="'.$myusername.'" and password="'.$mypassword.'"');

    /* determine number of rows result set */
    $row_cnt = $result->num_rows;

    if($row_cnt == 1){
      while($row = mysqli_fetch_array($result)) {
          echo "ok"; // log in
          $_SESSION['user_id'] = $row['id'];
          $_SESSION['user_role'] = $row['role'];

      }
    }else{
      echo "Sorry, email and or password is wrong"; // wrong details
    }
  }


?>
