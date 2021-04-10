			<?php include 'conn.php';?>

			<?php
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        /* 
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        */
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        /* choose the appropriate page to redirect users */
        die( header( 'location: /bar/notfound.php' ) );

    }
	
	$check_call = mysqli_real_escape_string($connc, $_POST['user_token']);
	
	if($check_call === "signup"){
		
		$user_name = mysqli_real_escape_string($connc, $_POST['user_name']);
		$user_email = mysqli_real_escape_string($connc,$_POST['user_email']);
		$user_phone = mysqli_real_escape_string($connc,$_POST['user_phone']);
		$user_password = mysqli_real_escape_string($connc,$_POST['user_password']);
		$user_date = mysqli_real_escape_string($connc, $_POST['today']); 

		$final_date = date('Y-m-d', strtotime($user_date));
		$status = "1";

		
			$result = mysqli_query($connc, "INSERT INTO physiquemafiausers (userName,userEmail,userPhone,userPassword,createdDate,status) VALUES 
				('$user_name', '$user_email','$user_phone','$user_password','$final_date', '$status')");
					  	$msg = "Registerd Succesfully.";
						

	echo json_encode(['code'=>200, 'msg'=>$msg]);
	
	}
	if($check_call === "signin"){
		
		$user_name = trim($_POST['user_name']);
$user_password = trim($_POST['user_password']);

$result = mysqli_query($connc ,"SELECT * FROM physiquemafiausers WHERE  ( userName='$user_name' OR userEmail = '$user_name' OR userPhone = '$user_name') and userPassword='$user_password' ") ;
$row=mysqli_num_rows($result);
  if($row > 0){
				$forSession=mysqli_fetch_array($result);
				session_start();
				$_SESSION["userName"] = $forSession['userName'];
				$userName = $_SESSION["userName"];
				
				$_SESSION["userEmail"] = $forSession['userEmail'];
				$userEmail = $_SESSION["userEmail"];
				

 	$msg = "Login Succes.";
	echo json_encode(['code'=>200, 'msg'=>$msg]);

  }else{
				$msg = "Check your username and password.";
	  			echo json_encode(['code'=>409, 'msg'=>$msg]);

  }
  
	}

?>