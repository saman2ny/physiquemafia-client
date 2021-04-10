<?php


$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
    
// $recentPics = $_FILES['recentPics']['name'];
// $imgEncoded = 'data:image/' . $type . ';base64,' . base64_encode(file_get_contents($recentPics));

$age = $_POST["age"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$occupation = $_POST["occupation"];
$goals = $_POST["goals"];
$workoutLevel = $_POST["workoutLevel"];
$foodRoutine = $_POST["foodRoutine"];
$foodType = $_POST["foodType"];
$needType = $_POST["needType"];
$medicalConditions = $_POST["medicalConditions"];

	
	
	

if($_POST && isset($_FILES['recentPics']))
{
	$attachments = $_FILES['recentPics'];

	$file_count = count($attachments['name']); //count total files attached
		

	
$from_email = $email ;
$sender_email = $email;


	$recipient_email 	= "reachme@physiquemafia.in"; //recepient
	$from_email 		= $email; //from email using site domain.
	$subject			= "Contact Form!"; //email subject line
	
			$sender_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //capture sender name

if($file_count > 0){ //if attachment exists
		//header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$sender_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //message text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode('Username: '.$sender_name.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Phone: '.$phone.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Email: '.$email.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Age: '.$age.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Height: '.$height.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Weight: '.$weight.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Ocuupation: '.$occcupation.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Native: '.$natives.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Goals: '.$goals.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Workout Level: '.$workoutLevel.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Food Routine: '.$foodRoutine.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Need Type: '.$needType.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Food Type: '.$foodType.'  '. "\r\n")) ;
        $body .= chunk_split(base64_encode('Medical Conditions: '.$medicalConditions.'  '. "\r\n")) ;


        // 'Phone: '.$phone.'  '. "\r\n" .

		//attachments
		for ($x = 0; $x < $file_count; $x++){		
			if(!empty($attachments['name'][$x])){
				
				if($attachments['error'][$x]>0) //exit script and output error if we encounter any
				{
					$mymsg = array( 
					1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini", 
					2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form", 
					3=>"The uploaded file was only partially uploaded", 
					4=>"No file was uploaded", 
					6=>"Missing a temporary folder" ); 
					die($mymsg[$attachments['error'][$x]]); 
				}
				
				//get file info
				$file_name = $attachments['name'][$x];
				$file_size = $attachments['size'][$x];
				$file_type = $attachments['type'][$x];
				
				//read file 
				$handle = fopen($attachments['tmp_name'][$x], "r");
				$content = fread($handle, $file_size);
				fclose($handle);
				$encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)
				
				$body .= "--$boundary\r\n";
				$body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
				$body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
				$body .="Content-Transfer-Encoding: base64\r\n";
				$body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
				$body .= $encoded_content;
				
				


			}
		}

	}else{ //send plain email otherwise
       $headers = "From:".$from_email."\r\n".
        "Reply-To: ".$sender_email. "\n" .
        "X-Mailer: PHP/" . phpversion();
        $body = $sender_message;
	}
		
	 $sentMail = @mail($recipient_email,$subject, $body, $headers);
	if($sentMail) //output success or failure messages
	{
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		// die('Thank you for your email');
	}else{
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		// die('Could not send mail! Please check your PHP mail configuration.');  
	}
}
// header('Location: ' . $_SERVER['HTTP_REFERER']);



?>