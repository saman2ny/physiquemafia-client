<?php
$email = $_POST["email"];
// echo  $email;


// To jagan
// To jagan
// To jagan

$to      = 'reachme@physiquemafia.in';
$subject = 'The intro Modal';
$message = 'Registered Email: - > '.$from.' ';
$headers = 'From: '.$email.'  '. "\r\n" .
    'Reply-To: reachme@physiquemafia.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


// To user
// To user
// To user

$to      = $email;
$subject = 'Physique Mafia';
$message = 'Hi there, thanks for being valued member ';
$headers = 'From:  reachme@physiquemafia.in '. "\r\n" .
    'Reply-To: '.$email.'  ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


if(!empty($email)){

$msg = "<li>Mail sent sucessfully</li>";
echo json_encode(['code'=>200, 'msg'=>$msg]);

}


?> 